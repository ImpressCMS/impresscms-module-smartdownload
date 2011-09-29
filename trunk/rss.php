<?php
// $Id: rss.php,v 1.2 2006/12/03 14:41:01 m0nty_ Exp $
###############################################################################
##                    XOOPS - PHP Content Management System                  ##
##                       Copyright (c) 2000 XOOPS.org                        ##
##                          <http://www.xoops.org/>                          ##
###############################################################################
##  This program is free software; you can redistribute it and/or modify     ##
##  it under the terms of the GNU General Public License as published by     ##
##  the Free Software Foundation; either version 2 of the License, or        ##
##  (at your option) any later version.                                      ##
##                                                                           ##
##  You may not change or alter any portion of this comment or credits       ##
##  of supporting developers from this source code or any supporting         ##
##  source code which is considered copyrighted (c) material of the          ##
##  original comment or credit authors.                                      ##
##                                                                           ##
##  This program is distributed in the hope that it will be useful,          ##
##  but WITHOUT ANY WARRANTY; without even the implied warranty of           ##
##  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            ##
##  GNU General Public License for more details.                             ##
##                                                                           ##
##  You should have received a copy of the GNU General Public License        ##
##  along with this program; if not, write to the Free Software              ##
##  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA ##
###############################################################################

include "../../mainfile.php";

if (function_exists('mb_http_output')) {
    mb_http_output('pass');
}

$feed_type = 'rss';
$contents = ob_get_clean();
header ('Content-Type:text/xml; charset=utf-8');
$xoopsOption['template_main'] = 'system_' . $feed_type . '.html';
//error_reporting(0);


include_once(XOOPS_ROOT_PATH."/class/template.php");
//$icms_view_Tpl = new icms_view_Tpl();

// Find case
$case = "all";
$category_handler = icms_getModuleHandler('category');
$category = $category_handler->get(intval($_REQUEST['cid']));

$groups = (is_object($xoopsUser)) ? $xoopsUser->getGroups() : array(0=>XOOPS_GROUP_ANONYMOUS);
$gperm_handler = icms::handler('icms_member_groupperm');;
$allowed_cats = $gperm_handler->getItemIds("WFDownCatPerm", $groups, intval($xoopsModule->getVar('mid')));

if (!$category->isNew()) {
    if (!in_array($category->getVar('cid'), $allowed_cats)) {
        exit();
    }
    $case = "category";
}

switch ($case) {
    // Set cache_prefix
    default:
    case "all":
        $cache_prefix = 'wfd|feed|' . $feed_type;
        break;

    case "category":
        $cache_prefix = 'wfd|catfeed|' . $feed_type. '|'.intval($category->getVar('cid'));
        break;
}


$xoopsTpl->caching = true;
$xoopsTpl->cache_lifetime = $xoopsConfig['module_cache'][intval($xoopsModule->getVar('mid'))];
if( ! $xoopsTpl->is_cached('db:'.$xoopsOption['template_main'], $cache_prefix) ) {
    // Get content
    $item_handler = icms_getModuleHandler('download');
    $limit = 30;
    
    $criteria = new icms_db_criteria_Compo(new icms_db_criteria_Item('offline', 0));
    $criteria->setSort("published");
    $criteria->setOrder("DESC");
    $criteria->setLimit($limit);
    
    switch ($case) {
        default:
        case "all":
            $shorthand = "all";
            $title = $xoopsConfig['sitename'] . ' - ' . htmlspecialchars($xoopsModule->getVar('name'), ENT_QUOTES);
            $desc = $xoopsConfig['slogan'] ;
            $channel_url = XOOPS_URL . '/modules/wfdownloads/rss.php';

            $criteria->add(new icms_db_criteria_Item("cid", "(".implode(',', $allowed_cats).")", "IN"));
            $items = $item_handler->getObjects($criteria);
            $id = 0;
            break;

        case "category":
            $shorthand = "cat";
            $title = $xoopsConfig['sitename'] . ' - ' . htmlspecialchars($category->getVar('title'), ENT_QUOTES);
            $desc = $xoopsConfig['slogan'] . ' - ' . htmlspecialchars($category->getVar('title'), ENT_QUOTES);
            $channel_url = XOOPS_URL . '/modules/wfdownloads/rss.php?cid='.intval($category->getVar('cid'));
            
            $criteria->add(new icms_db_criteria_Item("cid", intval($category->getVar('cid'))));
            $items = $item_handler->getObjects($criteria);
            $id = $category->getVar('categoryid');
            break;
    }

    /*
    * Assign feed-specific vars
    */

    $xoopsTpl->assign('channel_title', xoops_utf8_encode($title, 'n'));
    $xoopsTpl->assign('channel_desc', xoops_utf8_encode($desc, 'n'));
    $xoopsTpl->assign('channel_link', $channel_url);
    $xoopsTpl->assign('channel_lastbuild', formatTimestamp(time(), $feed_type));
    $xoopsTpl->assign('channel_webmaster', $xoopsConfig['adminmail']);
    $xoopsTpl->assign('channel_editor', $xoopsConfig['adminmail']);
    $xoopsTpl->assign('channel_editor_name', $xoopsConfig['sitename']);
    $xoopsTpl->assign('channel_category', $xoopsModule->getVar('name', 'e'));
    $xoopsTpl->assign('channel_generator', 'PHP');
    $xoopsTpl->assign('channel_language', _LANGCODE);

    /**
     * Assign items to template style array
     */

    $url = XOOPS_URL.'/modules/wfdownloads/';
    if(count($items) > 0){
        // Get users for items
        $uids = array();
        foreach(array_keys($items) AS $i){
            $uids[] = $items[$i]->getVar('submitter');
        }
        if (count($uids) > 0) {
            $member_handler = icms::handler('icms_member');
            $users = $member_handler->getUserList(new icms_db_criteria_Item('uid', "(".implode(',', array_unique($uids)).")", "IN"));
        }
        
        //Assign items to template
        foreach(array_keys($items) AS $i){
            $item = $items[$i];
            $link = $url.'singlefile.php?lid='.intval($item->getVar('lid'));
            $title = htmlspecialchars($item->getVar('title', 'n'));
            $teaser = htmlspecialchars($item->getVar('summary', 'n'));
            $author = isset($users[$item->getVar('submitter')]) ? isset($users[$item->getVar('submitter')]) : $xoopsConfig['anonymous'];

            $xoopsTpl->append('items', array(
                                'title' => xoops_utf8_encode($title),
                                'author' => xoops_utf8_encode($author),
                                'link' => $link,
                                'guid' => $link,
                                'is_permalink'=>false,
                                'pubdate' => formatTimestamp($item->getVar('published'), $feed_type),
                                'dc_date' => formatTimestamp($item->getVar('published'), 'd/m H:i'), 
                                'description' => xoops_utf8_encode($teaser)
                                ));
        }
    } else {
        $excuse_title = 'No items!';
        $excuse = 'There are no items for this feed!';
        $art_title = htmlspecialchars($excuse_title, ENT_QUOTES);
        $art_teaser = htmlspecialchars($excuse, ENT_QUOTES);
        $xoopsTpl->append('items', array('title' => xoops_utf8_encode($art_title), 
                                         'link' => $url, 
                                         'guid' => $url, 
                                         'pubdate' => formatTimestamp(time(), $feed_type), 
                                         'dc_date' => formatTimestamp(time(), 'd/m H:i'), 
                                         'description' => xoops_utf8_encode($art_teaser)));
    }
}

$xoopsTpl->display('db:'.$xoopsOption['template_main'], $cache_prefix);
?>