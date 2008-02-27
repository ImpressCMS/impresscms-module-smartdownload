<?php
/**
 * $Id: singlefile.php,v 1.17 2007/09/30 12:52:44 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */

include 'header.php';
include_once XOOPS_ROOT_PATH . '/class/xoopstree.php';

$lid = intval($_GET['lid']);
$xoopsOption['template_main'] = 'wfdownloads_singlefile.html';

$download_handler = xoops_getmodulehandler('download');
$download = $download_handler->get($lid);
$cid = intval($download->getVar('cid'));
$mid = intval($xoopsModule->getVar('mid'));

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

if ($groups == XOOPS_GROUP_ANONYMOUS) {
    if (!$gperm_handler->checkRight("WFDownCatPerm", $cid, $groups, $mid)) {
        redirect_header(XOOPS_URL.'/user.php',3,_MD_WFD_NEEDLOGINVIEW);
        exit();
    }
} else {
    if (!$gperm_handler->checkRight("WFDownCatPerm", $cid, $groups, $mid)) {
        redirect_header(WFDOWNLOADS_URL.'index.php',3, _NOPERM);
        exit();
    }
}

include XOOPS_ROOT_PATH . '/header.php';

$xoTheme->addStylesheet(WFDOWNLOADS_URL.'module.css');
$xoTheme->addStylesheet(WFDOWNLOADS_URL.'thickbox.css');
$xoopsTpl->assign('wfdownloads_url', WFDOWNLOADS_URL);

$category_handler = xoops_getmodulehandler('category');
$category = $category_handler->get($cid);

// Making the category image and title available in the template
if (($category->getVar('imgurl') != "") && is_file(XOOPS_ROOT_PATH . "/" . $xoopsModuleConfig['catimage'] . "/" . $category->getVar('imgurl')))
{
	if ($xoopsModuleConfig['usethumbs'] && function_exists('gd_info'))
	{
		$imgurl = down_createthumb($category->getVar('imgurl'), $xoopsModuleConfig['catimage'],
		"thumbs", $xoopsModuleConfig['cat_imgwidth'], $xoopsModuleConfig['cat_imgheight'],
		$xoopsModuleConfig['imagequality'], $xoopsModuleConfig['updatethumbs'], $xoopsModuleConfig['keepaspect']);
	}
	else
	{
		$imgurl = XOOPS_URL . "/" . $xoopsModuleConfig['catimage'] . "/" . $category->getVar('imgurl');
	}
}
else
{
	$imgurl = XOOPS_URL . "/" . $xoopsModuleConfig['catimage'] . "/blank.gif";
}
$xoopsTpl->assign('category_title', $category->getVar('title'));
$xoopsTpl->assign('category_image', $imgurl);


// added - start - March 6 2006, March 8, 2006 - jpc
$formulize_idreq = $download->getVar('formulize_idreq');
if($formulize_idreq) {
	$xoopsTpl->assign('custom_form', 1);
      include_once XOOPS_ROOT_PATH . "/modules/formulize/include/extract.php";
      // get the form id and id_req of the user's entry
      global $xoopsDB;
      $module_handler =& xoops_gethandler('module');
      $formulizeModule =& $module_handler->getByDirname("formulize");
      $formulizeConfig =& $config_handler->getConfigsByCat(0, $formulizeModule->getVar('mid'));

      $formulize_fid = $category->getVar('formulize_fid');

      if($formulize_fid)
      {
      	$formulize_formq = "SELECT desc_form FROM " . $xoopsDB->prefix("formulize_id") . " WHERE id_form = '$formulize_fid'";
      	$formulize_formres = $xoopsDB->query($formulize_formq);
      	if($formulize_formarray = $xoopsDB->fetchArray($formulize_formres)) {
      	    $desc_form = $formulize_formarray['desc_form'];

      	    // query the form for its data
      	    $data = getData("", $formulize_fid, $formulize_idreq);
      	    // include only elements that are visible to the user's groups in the DB query below
      	    $groups = $xoopsUser ? $xoopsUser->getGroups() : XOOPS_GROUP_ANONYMOUS;
      	    $start = 1;
      	    foreach($groups as $thisgroup) {
      	        if($start) {
      	            $groups_query = "ele_display LIKE '%,$thisgroup,%'";
      	            $start = 0;
      	        } else {
      	            $groups_query .= " OR ele_display LIKE '%,$thisgroup,%'";
      	        }
      	    }
      	    // collect the element id numbers for use in a DB query, and apply the groups filter to each
      	    $start = 1;
      	    foreach($data[0][$desc_form][$formulize_idreq] as $ele_id=>$values) {
      	        if($start) {
      	            $ele_id_query = "(ele_id='$ele_id' AND (ele_display=1 OR ($groups_query)))";
      	            $start = 0;
      	        } else {
      	            $ele_id_query .= " OR (ele_id='$ele_id' AND (ele_display=1 OR ($groups_query)))";
      	        }
      	    }
      	        // get the captions for the elements that are visible to the user's groups
      	    $captionq = "SELECT ele_caption, ele_id, ele_display FROM " . $xoopsDB->prefix("formulize") . " WHERE ($ele_id_query) AND ele_type <> 'ib' AND ele_type <> 'sep' AND ele_type <> 'areamodif' ORDER BY ele_order";
      	    $captionres = $xoopsDB->query($captionq);
      	    // collect the captions and their values into an array for passing to the template
      	    $indexer = 0;
      	    while($captionarray = $xoopsDB->fetchArray($captionres)) {
      	        $formulize_download[$indexer]['caption'] = $captionarray['ele_caption'];
      		  if(count($data[0][$desc_form][$formulize_idreq][$captionarray['ele_id']]) > 1) {
      			$formulize_download[$indexer]['values'][] = implode(", ", $data[0][$desc_form][$formulize_idreq][$captionarray['ele_id']]);
        	        } else {
      	            $formulize_download[$indexer]['values'][] = $data[0][$desc_form][$formulize_idreq][$captionarray['ele_id']][0];
      	        }
      	        $indexer++;
      	    }
      	    $xoopsTpl->assign('formulize_download', $formulize_download);
      	}
      }
} else {
	$xoopsTpl->assign('custom_form', 0);
}
// added - end - March 8 2006 - jpc

$use_mirrors = $xoopsModuleConfig['enable_mirrors'];
$add_mirror = 0;
if (!is_object($xoopsUser) && $use_mirrors == 1 && ($xoopsModuleConfig['anonpost'] == 3 || $xoopsModuleConfig['anonpost'] == 4) && ($xoopsModuleConfig['submissions'] == 3 || $xoopsModuleConfig['submissions'] == 4))
{
	$add_mirror = 1;
}
elseif (is_object($xoopsUser) && $use_mirrors == 1 && ($xoopsModuleConfig['submissions'] == 3 || $xoopsModuleConfig['submissions'] == 4 || $xoopsUser->isAdmin()))
{
	$add_mirror = 1;
}

$down = $download->getDownloadInfo();
$xoopsTpl->assign('categoryPath', $down['path'] . " > " . $down['title']);
$xoopsTpl->assign('lang_dltimes', sprintf(_MD_WFD_DLTIMES, $down['hits']));
$xoopsTpl->assign('lang_subdate' , $down['is_updated']);
$xoopsTpl->append('file', $down);

$xoopsTpl->assign('show_screenshot', false);
if (isset($xoopsModuleConfig['screenshot']) && $xoopsModuleConfig['screenshot'] == 1)
{
    $xoopsTpl->assign('shots_dir', $xoopsModuleConfig['screenshots']);
    $xoopsTpl->assign('shotwidth', $xoopsModuleConfig['shotwidth']);
    $xoopsTpl->assign('shotheight', $xoopsModuleConfig['shotheight']);
    $xoopsTpl->assign('show_screenshot', true);
}
/**
 * Show other author downloads
 */

$criteria = new CriteriaCompo(new Criteria("submitter", $download->getVar('submitter')));
$criteria->add(new Criteria('lid', $lid, '!='));
$criteria->setLimit(20);
$criteria->setSort("published");
$criteria->setOrder("DESC");

$downloads = $download_handler->getActiveDownloads($criteria);
foreach (array_keys($downloads) as $i)
{
    $downuid['title'] = $downloads[$i]->getVar('title');
    $downuid['lid'] = $downloads[$i]->getVar('lid');
    $downuid['cid'] = $downloads[$i]->getVar('cid');
    $downuid['published'] = formatTimestamp($downloads[$i]->getVar('published'), $xoopsModuleConfig['dateformat']);
    $xoopsTpl->append('down_uid', $downuid);
}

$cid = intval($download->getVar('cid'));
$lid = intval($download->getVar('lid'));

/**
 * User reviews
 */
$review_handler = xoops_getmodulehandler('review');
$criteria = new CriteriaCompo(new Criteria("lid", $lid));
$criteria->add(new Criteria("submit", 1));
$review_amount = $review_handler->getCount($criteria);

if ($review_amount > 0)
{
    $user_reviews = "op=list&amp;cid=" . $cid . "&amp;lid=" . $lid . "\">" . _MD_WFD_USERREVIEWS;
}
else
{
    $user_reviews = "cid=" . $cid . "&amp;lid=" . $lid . "\">" . _MD_WFD_NOUSERREVIEWS;
}
$xoopsTpl->assign('lang_user_reviews', $xoopsConfig['sitename'] . " " . _MD_WFD_USERREVIEWSTITLE);
$xoopsTpl->assign('lang_UserReviews', sprintf($user_reviews, $download->getVar('title')));

/**
 * User mirrors
 */
$down['add_mirror'] = $add_mirror;

$mirror_handler = xoops_getmodulehandler('mirror');
$criteria = new CriteriaCompo(new Criteria("lid", $lid));
$criteria->add(new Criteria("submit", 1));
$mirror_amount = $mirror_handler->getCount($criteria);

if ($mirror_amount > 0)
{
    $user_mirrors = "op=list&amp;cid=" . $cid . "&amp;lid=" . $lid . "\">" . _MD_WFD_USERMIRRORS;
}
else
{
    $user_mirrors = "cid=" . $cid . "&amp;lid=" . $lid . "\">" . _MD_WFD_NOUSERMIRRORS;
}
$xoopsTpl->assign('lang_user_mirrors', $xoopsConfig['sitename'] . " " . _MD_WFD_USERMIRRORSTITLE);
$xoopsTpl->assign('lang_UserMirrors', sprintf($user_mirrors, $download->getVar('title')));

if (isset($xoopsModuleConfig['copyright']) && $xoopsModuleConfig['copyright'] == 1)
{
    $xoopsTpl->assign('lang_copyright', "" . $download->getVar('title') . " � " . _MD_WFD_COPYRIGHT . " " . date("Y") . " " . XOOPS_URL);
}
$xoopsTpl->assign('down', $down);

include XOOPS_ROOT_PATH . '/include/comment_view.php';

$xoopsTpl->assign('com_rule', $xoopsModuleConfig['com_rule']);
$xoopsTpl->assign('module_home', wfdownloads_module_home(true));
include 'footer.php';
?>