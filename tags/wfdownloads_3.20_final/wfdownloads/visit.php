<?php
/**
 * $Id: visit.php,v 1.16 2007/09/30 12:52:44 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */

include 'header.php';

global $icmsUser, $icmsModuleConfig;

if(!is_object($icmsUser) && $icmsModuleConfig['download_minposts'] > 0) {
	redirect_header(ICMS_URL . '/user.php', 1, _MD_WFD_MUSTREGFIRST);
} elseif(is_object($icmsUser) && $icmsUser->getVar('posts') < $icmsModuleConfig['download_minposts'] && !$icmsUser->isAdmin()) {
	redirect_header(WFDOWNLOADS_URL.'index.php',5,_MD_WFD_DOWNLOADMINPOSTS);
}

$agreed = (isset($_GET['agree'])) ? (int) $_GET['agree'] : 0;
	
$lid = (int) $_GET['lid'];
$download_handler = icms_getModuleHandler('download');
$download = $download_handler->get($lid);
$cid = (int) $download->getVar('cid');
$mid = (int) $icmsModule->getVar('mid');

if($download->isNew()) {
	redirect_header(WFDOWNLOADS_URL.'index.php', 1, _MD_WFD_NODOWNLOAD);
}
if($download->getVar('published') == 0 || $download->getVar('published') > time()
	|| $download->getVar('offline') == 1 || ($download->getVar('expired') != 0
	&& $download->getVar('expired') < time()) || $download->getVar('status') == 0) {
	redirect_header(WFDOWNLOADS_URL.'index.php', 3, _MD_WFD_NODOWNLOAD);
}

$gperm_handler = icms::handler('icms_member_groupperm');;
$groups = is_object($icmsUser) ? $icmsUser->getGroups() : array(0 => XOOPS_GROUP_ANONYMOUS);
	
if(!$gperm_handler->checkRight('WFDownCatPerm', $cid, $groups, $mid)) {
	redirect_header(WFDOWNLOADS_URL.'index.php',3, _NOPERM);
}

function reportBroken($lid) {
	echo "<h4>" . _MD_WFD_BROKENFILE . "</h4>\n
		<div>" . _MD_WFD_PLEASEREPORT . "\n
		<a href='".WFDOWNLOADS_URL."brokenfile.php?lid=$lid'>"._MD_WFD_CLICKHERE."</a>\n
		</div>\n";
}

if($agreed == 0) {
	if ($icmsModuleConfig['check_host']) {
		$goodhost = 0;
		$referer = parse_url(xoops_getenv('HTTP_REFERER'));
		$referer_host = $referer['host'];
		foreach($icmsModuleConfig['referers'] as $ref) {
			if(!empty($ref) && preg_match("/".$ref."/i", $referer_host)) {
				$goodhost = '1';
				break;
			}
		}
		if(!$goodhost) {
			redirect_header(WFDOWNLOADS_URL.'/modules/wfdownloads/singlefile.php?cid=$cid&amp;lid=$lid',
							20, _MD_WFD_NOPERMISETOLINK);
		}
	}
}

if($icmsModuleConfig['showDowndisclaimer'] && $agreed == 0) {
	$xoopsOption['template_main'] = 'wfdownloads_disclaimer.html';
	include ICMS_ROOT_PATH.'/header.php';
	
	$xoTheme->addStylesheet(WFDOWNLOADS_URL.'module'.(( defined("_ADM_USE_RTL") && _ADM_USE_RTL )?'_rtl':'').'.css');
	$xoopsTpl->assign('wfdownloads_url', WFDOWNLOADS_URL);
	$xoopsTpl->assign('image_header', wfd_imageheader());
	$xoopsTpl->assign('downdisclaimer', icms_core_DataFilter::checkVar($icmsModuleConfig['downdisclaimer'], 'html', 'output'));
	$xoopsTpl->assign('cancel_location', WFDOWNLOADS_URL.'index.php');
	$xoopsTpl->assign('agree_location', WFDOWNLOADS_URL.'visit.php?agree=1&amp;lid='.$lid.'&amp;cid='.$cid);
	$xoopsTpl->assign('down_disclaimer', true);
	
	include ICMS_ROOT_PATH . '/footer.php';
	exit();
} else {
	$isadmin = (!empty($icmsUser) && $icmsUser->isAdmin($xoopsModule->getVar('mid'))) ? true : false;
	if($isadmin == false) {
		$download_handler->incrementHits($lid);
	}
	//--
		$ip_log_handler = icms_getModuleHandler('ip_log');
		$ip_logObj = $ip_log_handler->create();
		$ip_logObj->setVar('lid', $lid);
		$ip_logObj->setVar('date', time());
		$ip_logObj->setVar('ip_address', getenv("REMOTE_ADDR"));
		$ip_logObj->setVar('uid', is_object($icmsUser) ? $icmsUser->getVar('uid') : 0);
		$ip_log_handler->insert($ip_logObj, true);
	//--
	$full_name = trim($download->getVar('filename'));
	if((!$download->getVar('url') == '' && !$download->getVar('url') == 'http://') || $full_name == '') {
		include ICMS_ROOT_PATH.'/header.php';

		$xoTheme->addStylesheet(WFDOWNLOADS_URL.'module'.(( defined("_ADM_USE_RTL") && _ADM_USE_RTL )?'_rtl':'').'.css');
		$xoopsTpl->assign('wfdownloads_url', WFDOWNLOADS_URL);

		echo "<div align='center'>".wfd_imageheader()."</div>";
		$url = icms_core_DataFilter::htmlSpecialChars(preg_replace('/javascript:/si',
																	'javascript:',
																	$download->getVar('url')),
														ENT_QUOTES);

		echo "<h4><img src='".WFDOWNLOADS_URL."images/icon/downloads.gif' align='middle' alt='' title='"
			. _MD_WFD_DOWNINPROGRESS . "'/> " . _MD_WFD_DOWNINPROGRESS . "</h4>\n
			<div>" . _MD_WFD_DOWNSTARTINSEC . "</div><br />\n
			<div>" . _MD_WFD_DOWNNOTSTART . "\n
			<a href='$url' rel='external'>" . _MD_WFD_CLICKHERE . "</a>.\n
			</div>\n";

		header("Cache-Control: no-store, no-cache, must-revalidate");
		header("Cache-Control: post-check=0, pre-check=0", false);
		// HTTP/1.0
		header("Pragma: no-cache");
		// Date in the past
		header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		// always modified
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("Refresh: 3; url=$url");
	} elseif(!empty($full_name)) {
		$mimeType = $download->getVar('filetype');

		$file = strrev($full_name);
		$temp_name = strtolower(strrev(substr($file,0,strpos($file,"--"))) );
		if($temp_name == '') {
			$file_name = $full_name;
		} else {
			$file_name = $temp_name;
		}
		$filePath = $icmsModuleConfig['uploaddir'].'/'.stripslashes(trim($full_name));

		if(ini_get('zlib.output_compression')) {
			ini_set('zlib.output_compression', 'Off');
		}

		// MSIE Bug fix.
		$header_file = (strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
			? preg_replace('/\./', '%2e', $file_name, substr_count($file_name, '.') - 1) : $file_name;

		header("Pragma: public");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);
//		header("Content-Length: ".filesize($filePath));
		header("Content-Transfer-Encoding: binary");
		if(isset($mimeType)) {
			header("Content-Type: " . $mimeType);
		}
		header("Content-Disposition: attachment; filename=".$header_file);

		if(isset($mimeType) && strstr($mimeType, "text/")) {
			wfd_download($filePath, false, true);
		} else {
			wfd_download($filePath, true, true);
		}
		exit();
	} else {
		include ICMS_ROOT_PATH.'/header.php';
		echo "<br /><div align='center'>".wfd_imageheader()."</div>";
		reportBroken($lid);
	}

	include ICMS_ROOT_PATH.'/footer.php';
}