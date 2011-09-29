<?php
/**
 * $Id: viewcat.php,v 1.28 2007/09/30 16:15:40 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */

include 'header.php';

global $icmsModuleConfig, $icmsModule, $icmsUser;

$start = isset($_GET['start']) ? (int) $_GET['start'] : 0;
$orderby = isset($_GET['orderby']) ? convertorderbyin($_GET['orderby']) : $icmsModuleConfig['filexorder'];
$cid = (isset($_GET['cid']) && $_GET['cid'] > 0) ? (int) $_GET['cid'] : 0;
$mid = (int) $icmsModule->getVar('mid');

$gperm_handler = icms::handler('icms_member_groupperm');;
$groups = is_object($icmsUser) ? $icmsUser->getGroups() : array(0 => XOOPS_GROUP_ANONYMOUS);

if (in_array(ICMS_GROUP_ANONYMOUS, $groups)) {
    if (!$gperm_handler->checkRight("WFDownCatPerm", $cid, $groups, $mid)) {
        redirect_header(ICMS_URL.'/user.php',3,_MD_WFD_NEEDLOGINVIEW);
    }
} else {
    if (!$gperm_handler->checkRight("WFDownCatPerm", $cid, $groups, $mid)) {
        redirect_header(WFDOWNLOADS_URL.'index.php',3, _NOPERM);
    }
}

$xoopsOption['template_main'] = 'wfdownloads_viewcat.html';
include ICMS_ROOT_PATH . '/header.php';


/*****************************************
***************by bleekk******************
******compatible with impresscms 1.2*****/
$xoTheme->addStylesheet(WFDOWNLOADS_URL.'include/js/facebox.css');
$xoTheme->addScript(WFDOWNLOADS_URL.'include/js/facebox.js');
$xoTheme->addScript(WFDOWNLOADS_URL.'include/js/preload.js');
/****************************************/


$xoTheme->addStylesheet(WFDOWNLOADS_URL.'module'.(( defined("_ADM_USE_RTL") && _ADM_USE_RTL )?'_rtl':'').'.css');
$xoopsTpl->assign('wfdownloads_url', WFDOWNLOADS_URL);

// added - start - March 4 2006 - jpc
// $category instantiation moved from above 'Breadcrumb' comment
$category_handler = icms_getModuleHandler('category');
$category = $category_handler->get($cid);

/**
 * Retreiving the top parent category
 */
if (!isset($_GET['list']) && !isset($_GET['selectdate'])) {
	$allSubcatsTopParentCid = $category_handler->getAllSubcatsTopParentCid();
	$topCategory = $category_handler->allCategories[$allSubcatsTopParentCid[$cid]];
	$xoopsTpl->assign('topcategory_title', $topCategory->getVar('title'));
	$xoopsTpl->assign('topcategory_image', $topCategory->getVar('imgurl'));
	$xoopsTpl->assign('topcategory_cid', $topCategory->getVar('cid'));
}

$formulize_fid = $category->getVar('formulize_fid');
if($formulize_fid) {
	$xoopsTpl->assign('custom_form', 1);
} else {
	$xoopsTpl->assign('custom_form', 0);
}
// added - start - March 4 2006 - jpc

$catarray['imageheader'] = wfd_imageheader();
$catarray['letters'] = wfd_letters();
$catarray['toolbar'] = wfd_toolbar();
$xoopsTpl->assign('catarray', $catarray);


/**
 * Breadcrumb
 */
$pathstring = $category_handler->getNicePath($cid);
$xoopsTpl->assign('categoryPath', $pathstring);
$xoopsTpl->assign('category_id', $cid);

$criteria = new icms_db_criteria_Compo();
$criteria->setSort("weight ASC, title");
$categories = $category_handler->getObjects($criteria, true);
include_once ICMS_ROOT_PATH."/class/tree.php";
$mytree = new icms_ipf_Tree($categories, "cid", "pid");
$arr = $mytree->getFirstChild($cid);

/**
 * Display Sub-categories for selected Category
 */
if (is_array($arr) > 0 && !isset($_GET['list']) && !isset($_GET['selectdate'])) {
	$allowed_cats = $gperm_handler->getItemIds("WFDownCatPerm", $groups, $mid);
    $listings = wfd_getTotalItems(0, $allowed_cats);
    $scount = 1;
    foreach(array_keys($arr) as $i) {
        $ele = $arr[$i];
        if (!in_array($ele->getVar('cid'), $allowed_cats)) {
            continue;
        }

        $infercategories = array();
        $catdowncount = isset($listings["count"][$ele->getVar('cid')]) ? $listings["count"][$ele->getVar('cid')] : 0;
		$subcats = $mytree->getAllChild($ele->getVar('cid'));

		// ----- added for subcat images -----
		if (($ele->getVar('imgurl') != "")
			&& is_file(ICMS_ROOT_PATH . "/" . $icmsModuleConfig['catimage'] . "/" . $ele->getVar('imgurl'))) {
			if ($icmsModuleConfig['usethumbs'] && function_exists('gd_info')) {
				$imgurl = down_createthumb($ele->getVar('imgurl'),
											$icmsModuleConfig['catimage'],
											"thumbs",
											$icmsModuleConfig['cat_imgwidth'],
											$icmsModuleConfig['cat_imgheight'],
											$icmsModuleConfig['imagequality'],
											$icmsModuleConfig['updatethumbs'],
											$icmsModuleConfig['keepaspect']
										);
			} else {
				$imgurl = ICMS_URL . "/" . $icmsModuleConfig['catimage'] . "/" . $ele->getVar('imgurl');
			}
		} else {
			$imgurl = ICMS_URL . "/" . $icmsModuleConfig['catimage'] . "/blank.gif";
		}
		// ----- end subcat images -----

		if (count($subcats) > 0) {
			foreach (array_keys($subcats) as $k) {
				if (in_array($subcats[$k]->getVar('cid'), $allowed_cats)) {
					$download_count += isset($listings["count"][$subcats[$k]->getVar('cid')])
						? $listings["count"][$subcats[$k]->getVar('cid')] : 0;
					$infercategories[] = array("id" => $subcats[$k]->getVar('cid'),
												"title" => $subcats[$k]->getVar('title'),
												"image" => $imgurl,
												"count" => $download_count
											);
				}
			}
		} else {
            $download_count = 0;
            $infercategories = array();
        }
        $catdowncount += $download_count;
		$download_count = 0;

        $xoopsTpl->append('subcategories', array('title' => $ele->getVar('title'),
													'image' => $imgurl,
													'id' => $ele->getVar('cid'),
													'infercategories' => $infercategories,
													'totallinks' => $catdowncount,
													'count' => $scount
												));
        $scount++;
    }
}
if (isset($cid) && $cid > 0 && isset($categories[$cid])) {
    $xoopsTpl->assign('description', $categories[$cid]->getVar('description'));

    // Making the category image and title available in the template
	if (($categories[$cid]->getVar('imgurl') != "")
		&& is_file(ICMS_ROOT_PATH . "/" . $icmsModuleConfig['catimage'] . "/" . $categories[$cid]->getVar('imgurl'))) {
		if ($icmsModuleConfig['usethumbs'] && function_exists('gd_info')) {
			$imgurl = down_createthumb($categories[$cid]->getVar('imgurl'),
										$icmsModuleConfig['catimage'],
										"thumbs",
										$icmsModuleConfig['cat_imgwidth'],
										$icmsModuleConfig['cat_imgheight'],
										$icmsModuleConfig['imagequality'],
										$icmsModuleConfig['updatethumbs'],
										$icmsModuleConfig['keepaspect']
									);
		} else {
			$imgurl = ICMS_URL . "/" . $icmsModuleConfig['catimage'] . "/" . $categories[$cid]->getVar('imgurl');
		}
	} else {
		$imgurl = '';
	}

    $xoopsTpl->assign('xoops_pagetitle', $categories[$cid]->getVar('title').' | '.$icmsModule->getVar('name'));
    $xoopsTpl->assign('category_image', $imgurl);
}

/**
 * Extract Download information from database
 */
$xoopsTpl->assign('show_categort_title', true);

$download_handler = icms_getModuleHandler('download');
if (isset($_GET['selectdate'])) {
    $criteria->add(new icms_db_criteria_Item('',
												"TO_DAYS(FROM_UNIXTIME(".(int) $_GET['selectdate']."))",
												"=",
												"",
												"TO_DAYS(FROM_UNIXTIME(published))"
											));

} elseif (isset($_GET['list'])) {
	$criteria->setSort($orderby.", title");
	$criteria->add(new icms_db_criteria_Item("title", icms_core_DataFilter::addSlashes($_GET['list'])."%", "LIKE"));
	$xoopsTpl->assign('categoryPath', sprintf(_MD_WFD_DOWNLOADS_LIST, htmlspecialchars($_GET['list'])));
} else {
	$criteria->setSort($orderby.", title");
	$criteria->add(new icms_db_criteria_Item("cid", $cid));
    $xoopsTpl->assign('show_categort_title', false);
}
$total_numrows = $download_handler->getActiveCount($criteria);
$criteria->setLimit($icmsModuleConfig['perpage']);
$criteria->setStart($start);
$downloads = $download_handler->getActiveDownloads($criteria);

/**
 * Show Downloads by file
 */
if ($total_numrows > 0) {
	foreach (array_keys($downloads) as $i) {
		$down = $downloads[$i]->getDownloadInfo();
		$xoopsTpl->assign('lang_dltimes', sprintf(_MD_WFD_DLTIMES, $down['hits']));
		$xoopsTpl->assign('lang_subdate' , $down['is_updated']);
		$xoopsTpl->append('file', $down);
	}

    /**
     * Show order box
     */
    $xoopsTpl->assign('show_links', false);
    if ($total_numrows > 1 && $cid != 0) {
        $xoopsTpl->assign('show_links', true);
        $orderbyTrans = convertorderbytrans($orderby);
        $xoopsTpl->assign('lang_cursortedby', sprintf(_MD_WFD_CURSORTBY, convertorderbytrans($orderby)));
        $orderby = convertorderbyout($orderby);
    }
    /**
     * Screenshots display
     */
    $xoopsTpl->assign('show_screenshot', false);
    if (isset($icmsModuleConfig['screenshot']) && $icmsModuleConfig['screenshot'] == 1) {
        $xoopsTpl->assign('shots_dir', $icmsModuleConfig['screenshots']);
        $xoopsTpl->assign('shotwidth', $icmsModuleConfig['shotwidth']);
        $xoopsTpl->assign('shotheight', $icmsModuleConfig['shotheight']);
		$xoopsTpl->assign('viewcat', true);
        $xoopsTpl->assign('show_screenshot', true);
    }

    /**
     * Nav page render
     */
    include_once ICMS_ROOT_PATH . '/class/pagenav.php';
    if (isset($_GET['selectdate'])) {
        $pagenav = new icms_view_PageNav($total_numrows,
											$icmsModuleConfig['perpage'],
											$start,
											'start',
											'list=' . urlencode($_GET['selectdate'])
										);
    } elseif (isset($_GET['list'])) {
    	$pagenav = new icms_view_PageNav($total_numrows,
											$icmsModuleConfig['perpage'],
											$start,
											'start',
											'list=' . urlencode($_GET['list'])
										);
    } else {
        $pagenav = new icms_view_PageNav($total_numrows,
											$icmsModuleConfig['perpage'],
											$start,
											'start',
											'cid=' . $cid
										);
    }
    $page_nav = $pagenav->renderNav();
    $istrue = (isset($page_nav) && !empty($page_nav)) ? true : false;
    $xoopsTpl->assign('page_nav', $istrue);
    $xoopsTpl->assign('pagenav', $page_nav);
}

if($icmsModuleConfig['enablerss'] == 1 && $total_numrows > 0) {
	$rsslink=sprintf("<a href='%s' title='%s'><img src='%s' border='0' alt='%s' title='%s' /></a>",
						WFDOWNLOADS_URL."rss.php?cid=".(int) $cid,
						_MD_WFD_LEGENDTEXTCATRSS,
						ICMS_URL."/".$icmsModuleConfig['mainimagedir']."/icon/rss.gif",
						_MD_WFD_LEGENDTEXTCATRSS,
						_MD_WFD_LEGENDTEXTCATRSS
					);
	$xoopsTpl->assign('cat_rssfeed_link', $rsslink);
}

$xoopsTpl->assign('module_home', wfdownloads_module_home(true));
include 'footer.php';