<?php
/**
 * $Id: index.php,v 1.15 2007/09/30 16:14:30 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */

include 'header.php';
include_once XOOPS_ROOT_PATH . '/class/tree.php';

global $xoopsModuleConfig, $xoopsModule, $xoopsUser;

$xoopsOption['template_main'] = 'wfdownloads_index.html';
include XOOPS_ROOT_PATH . '/header.php';

$xoTheme->addStylesheet(WFDOWNLOADS_URL.'module.css');
$xoTheme->addStylesheet(WFDOWNLOADS_URL.'thickbox.css');
$xoopsTpl->assign('wfdownloads_url', WFDOWNLOADS_URL);

$category_handler = xoops_getmodulehandler('category');
$cat_criteria = new CriteriaCompo();
$cat_criteria->setSort('weight ASC, title');
$categories = $category_handler->getObjects($cat_criteria);
unset($cat_criteria);

$mytree = new XoopsObjectTree($categories, "cid", "pid");

/**
 * Begin Main page Heading etc
 */
$sql = "SELECT * FROM " . $xoopsDB->prefix('wfdownloads_indexpage') . " ";
$head_arr = $xoopsDB->fetchArray($xoopsDB->query($sql));
$catarray['imageheader'] = wfd_imageheader();
//$catarray['indexheading'] = $myts->displayTarea($head_arr['indexheading']);
$catarray['indexheaderalign'] = $head_arr['indexheaderalign'];
$catarray['indexfooteralign'] = $head_arr['indexfooteralign'];

$html = ($head_arr['nohtml']) ? 1 : 0;
$smiley = ($head_arr['nosmiley']) ? 1 : 0;
$xcodes = ($head_arr['noxcodes']) ? 1 : 0;
$images = ($head_arr['noimages']) ? 1 : 0;
$breaks = ($head_arr['nobreak']) ? 1 : 0;

$catarray['indexheader'] = $myts->displayTarea($head_arr['indexheader'], $html, $smiley, $xcodes, $images, $breaks);
$catarray['indexfooter'] = $myts->displayTarea($head_arr['indexfooter'], $html, $smiley, $xcodes, $images, $breaks);
$catarray['letters'] = wfd_letters();
$catarray['toolbar'] = wfd_toolbar();
$xoopsTpl->assign('catarray', $catarray);
/**
 * End main page Headers
 */

$chcount = 0;
$countin = 0;

$groups = (is_object($xoopsUser)) ? $xoopsUser->getGroups() : array(0=>XOOPS_GROUP_ANONYMOUS);
$module_id = intval($xoopsModule->getVar('mid'));
$gperm_handler = &xoops_gethandler('groupperm');

/**
 * Begin Main page download info
 */
$allowed_cats = $gperm_handler->getItemIds("WFDownCatPerm", $groups, $module_id);
$listings = wfd_getTotalItems(0, $allowed_cats);
/*
* get total amount of categories
*/
$total_cat = count($allowed_cats);
$cats = $mytree->getFirstChild(0);
$count = 0;
foreach (array_keys($cats) as $i) {
	if (in_array($cats[$i]->getVar('cid'), $allowed_cats)) {
		//Get category indicator image
		$publishdate = isset($listings['published'][$cats[$i]->getVar('cid')]) ? $listings['published'][$cats[$i]->getVar('cid')] : 0;
		$all_subcats = $mytree->getAllChild($cats[$i]->getVar('cid'));
		if (count($all_subcats) > 0) {
		   foreach (array_keys($all_subcats) as $k) {
		      if (in_array($all_subcats[$k]->getVar('cid'), $allowed_cats)) {
		         $publishdate = (isset($listings['published'][$all_subcats[$k]->getVar('cid')]) AND $listings['published'][$all_subcats[$k]->getVar('cid')] > $publishdate) ? $listings['published'][$all_subcats[$k]->getVar('cid')] : $publishdate;
		      }
		   }
		}
		$indicator = wfd_isnewimage($publishdate);
		if (($cats[$i]->getVar('imgurl') != "") && is_file(XOOPS_ROOT_PATH . "/" . $xoopsModuleConfig['catimage'] . "/" . $cats[$i]->getVar('imgurl')))
        {
            if ($xoopsModuleConfig['usethumbs'] && function_exists('gd_info'))
            {
                $imgurl = down_createthumb($cats[$i]->getVar('imgurl'), $xoopsModuleConfig['catimage'],
					"thumbs", $xoopsModuleConfig['cat_imgwidth'], $xoopsModuleConfig['cat_imgheight'],
					$xoopsModuleConfig['imagequality'], $xoopsModuleConfig['updatethumbs'], $xoopsModuleConfig['keepaspect']);
            }
            else
            {
                $imgurl = XOOPS_URL . "/" . $xoopsModuleConfig['catimage'] . "/" . $cats[$i]->getVar('imgurl');
            }
        }
        else
        {
            $imgurl = $indicator['image'];
        }

$subcategories = array();
//Get Subcategories
$count++;
$download_count = isset($listings['count'][$cats[$i]->getVar('cid')]) ? $listings['count'][$cats[$i]->getVar('cid')] : 0;
// modified July 5 2006 by Freeform Solutions (jwe)
// make download count recursive, to include all sub categories that the user has permission to view
//$all_subcats = $mytree->getAllChild($cats[$i]->getVar('cid'));
if (count($all_subcats) > 0) {
   foreach (array_keys($all_subcats) as $k) {
      if (in_array($all_subcats[$k]->getVar('cid'), $allowed_cats)) {
         $download_count += isset($listings['count'][$all_subcats[$k]->getVar('cid')]) ? $listings['count'][$all_subcats[$k]->getVar('cid')] : 0;
         if($xoopsModuleConfig['subcats'] == 1 AND $all_subcats[$k]->getVar('pid') == $cats[$i]->getVar('cid')) { // if we are collecting subcat info for displaying, and this subcat is a first level child...
            $subcategories[] = array("id" => $all_subcats[$k]->getVar('cid'), "title" => $all_subcats[$k]->getVar('title'));
         }
      }
   }
}

if($xoopsModuleConfig['subcats'] != 1) {
		unset($subcategories);
	  
		$xoopsTpl->append('categories', array('image' => $imgurl,
											'id' => intval($cats[$i]->getVar('cid')),
											'title' => $cats[$i]->getVar('title'),
											'summary' => $cats[$i]->getVar('summary'),
											'totaldownloads' => intval($download_count),
											'count' => intval($count),
											'alttext' => $indicator['alttext']));
	 } else {
		$xoopsTpl->append('categories', array('image' => $imgurl,
											'id' => intval($cats[$i]->getVar('cid')),
											'title' => $cats[$i]->getVar('title'),
											'summary' => $cats[$i]->getVar('summary'),
											'subcategories' => $subcategories,
											'totaldownloads' => intval($download_count),
											'count' => intval($count),
											'alttext' => $indicator['alttext']));
	 }
	}
}
$lang_ThereAre = $count != 1 ? _MD_WFD_THEREARE : _MD_WFD_THEREIS;

$xoopsTpl->assign('lang_thereare', sprintf($lang_ThereAre, $count, array_sum($listings['count'])));
$xoopsTpl->assign('module_home', wfdownloads_module_home(false));

if($xoopsModuleConfig['enablerss'] == 1)
{
	$rsslink=sprintf("<a href='%s' title='%s'><img src='%s' border=0 alt='%s' title='%s'></a>",WFDOWNLOADS_URL."rss.php", _MD_WFD_LEGENDTEXTRSS, XOOPS_URL."/".$xoopsModuleConfig['mainimagedir']."/icon/rss.gif",_MD_WFD_LEGENDTEXTRSS, _MD_WFD_LEGENDTEXTRSS);
	$xoopsTpl->assign('full_rssfeed_link', $rsslink);
}

include 'footer.php';
?>