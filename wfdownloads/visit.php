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

global $xoopsUser, $xoopsModuleConfig, $myts;

if (is_object($xoopsUser)) {
    if ($xoopsUser->getVar('posts') < $xoopsModuleConfig['download_minposts'] && !$xoopsUser->isAdmin()) {
        redirect_header(WFDOWNLOADS_URL.'index.php',5,_MD_WFD_DOWNLOADMINPOSTS);
        exit();
    }
}
elseif (!is_object($xoopsUser) && ($xoopsModuleConfig['download_minposts'] > 0)) {
    redirect_header(XOOPS_URL . '/user.php', 1, _MD_WFD_MUSTREGFIRST);
    exit();
}

$agreed = (isset($_GET['agree'])) ? intval($_GET['agree']) : 0;

$lid = intval($_GET['lid']);
$download_handler = xoops_getmodulehandler('download');
$download = $download_handler->get($lid);
$cid = intval($download->getVar('cid'));

if ($download->isNew()) {
    redirect_header(WFDOWNLOADS_URL.'index.php', 1, _MD_WFD_NODOWNLOAD);
    exit();
}
if ($download->getVar('published') == 0 || $download->getVar('published') > time() || $download->getVar('offline') == 1 || ($download->getVar('expired') != 0 && $download->getVar('expired') < time()) || $download->getVar('status') == 0) {
    //Download not published, expired or taken offline - redirect
    redirect_header(WFDOWNLOADS_URL.'index.php', 3, _MD_WFD_NODOWNLOAD);
}

$gperm_handler =& xoops_gethandler('groupperm');
$groups = is_object($xoopsUser) ? $xoopsUser->getGroups() : XOOPS_GROUP_ANONYMOUS;

if (!$gperm_handler->checkRight("WFDownCatPerm", $cid,$groups, $xoopsModule->getVar('mid'))) {
    redirect_header(WFDOWNLOADS_URL.'index.php',3, _NOPERM);
    exit();
}

function reportBroken($lid)
{
    echo "
		<h4>" . _MD_WFD_BROKENFILE . "</h4>\n
		<div>" . _MD_WFD_PLEASEREPORT . "\n
		<a href='".WFDOWNLOADS_URL."brokenfile.php?lid=$lid'>" . _MD_WFD_CLICKHERE . "</a>\n
		</div>\n";
}

if ($agreed == 0)
{
    if ($xoopsModuleConfig['check_host'])
    {
        $goodhost = 0;
        $referer = parse_url(xoops_getenv('HTTP_REFERER'));
        $referer_host = $referer['host'];
        foreach ($xoopsModuleConfig['referers'] as $ref)
        {
            if (!empty($ref) && preg_match("/" . $ref . "/i", $referer_host))
            {
                $goodhost = "1";
                break;
            }
        }
        if (!$goodhost)
        {
            redirect_header(WFDOWNLOADS_URL.'/modules/wfdownloads/singlefile.php?cid=$cid&amp;lid=$lid', 20, _MD_WFD_NOPERMISETOLINK);
            exit();
        }
    }
}

if ($xoopsModuleConfig['showDowndisclaimer'] && $agreed == 0)
{
	$xoopsOption['template_main'] = 'wfdownloads_disclaimer.html';
    include XOOPS_ROOT_PATH . '/header.php';
	
	$xoTheme->addStylesheet(WFDOWNLOADS_URL.'module.css');
	$xoTheme->addStylesheet(WFDOWNLOADS_URL.'thickbox.css');
	$xoopsTpl->assign('wfdownloads_url', WFDOWNLOADS_URL);

	
	$xoopsTpl->assign('image_header', wfd_imageheader());
	$xoopsTpl->assign('downdisclaimer', $myts->displayTarea($xoopsModuleConfig['downdisclaimer'], 1, 1, 1, 1, 1));
	$xoopsTpl->assign('cancel_location', WFDOWNLOADS_URL.'index.php');
	$xoopsTpl->assign('agree_location', WFDOWNLOADS_URL.'visit.php?agree=1&amp;lid='.$lid.'&amp;cid='.$cid);
	$xoopsTpl->assign('down_disclaimer', true);

    include XOOPS_ROOT_PATH . '/footer.php';
    exit();
}
else
{
    $isadmin = (!empty($xoopsUser) && $xoopsUser -> isAdmin($xoopsModule -> mid())) ? true : false;
    if ($isadmin == false)
    {
        $download_handler->incrementHits($lid);
    }

    $full_name = trim($download->getVar('filename'));
    if ((!$download->getVar('url') == "" && !$download->getVar('url') == 'http://') || $full_name == '')
    {
        include XOOPS_ROOT_PATH . '/header.php';
		
		$xoTheme->addStylesheet(WFDOWNLOADS_URL.'module.css');
		$xoTheme->addStylesheet(WFDOWNLOADS_URL.'thickbox.css');
		$xoopsTpl->assign('wfdownloads_url', WFDOWNLOADS_URL);

        echo "<div align='center'>" . wfd_imageheader() . "</div>";
        $url = $myts -> htmlSpecialChars(preg_replace('/javascript:/si' , 'javascript:', $download->getVar('url')), ENT_QUOTES);

        echo "
  <h4><img src='".WFDOWNLOADS_URL."images/icon/downloads.gif' align='middle' alt='' title='" . _MD_WFD_DOWNINPROGRESS . "' /> " . _MD_WFD_DOWNINPROGRESS . "</h4>\n
  <div>" . _MD_WFD_DOWNSTARTINSEC . "</div><br />\n
  <div>" . _MD_WFD_DOWNNOTSTART . "\n
  <a href='$url' target='_blank'>" . _MD_WFD_CLICKHERE . "</a>.\n
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
    }
    elseif (!empty($full_name))
    {
        $mimeType = $download->getVar('filetype');

        $file = strrev($full_name);
        $temp_name = strtolower(strrev(substr($file,0,strpos($file,"--"))) );
		if ($temp_name == '') {
			$file_name = $full_name;
		} else {
			$file_name = $temp_name;
		}
        $filePath = $xoopsModuleConfig['uploaddir'].'/'.stripslashes(trim($full_name));

        if(ini_get('zlib.output_compression')) {
            ini_set('zlib.output_compression', 'Off');
        }

		// MSIE Bug fix.
		$header_file = (strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE')) ? preg_replace('/\./', '%2e', $file_name, substr_count($file_name, '.') - 1) : $file_name;
		
        header("Pragma: public");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: private",false);
		header("Content-Length: " .(string)(filesize($filePath)) );
        header("Content-Transfer-Encoding: binary");
        if(isset($mimeType))
        {
            header("Content-Type: " . $mimeType);
        }

        header("Content-Disposition: attachment; filename=" . $header_file);

        if(isset($mimeType) && strstr($mimeType, "text/"))
        {
			wfd_download($filePath, false, true);
        }
        else
        {
			wfd_download($filePath, true, true);
        }
        exit();
    }
    else
    {
        include XOOPS_ROOT_PATH . '/header.php';
        echo "<br /><div align='center'>" . wfd_imageheader() . "</div>";
        reportBroken($lid);
    }

    include XOOPS_ROOT_PATH . '/footer.php';
}

?>