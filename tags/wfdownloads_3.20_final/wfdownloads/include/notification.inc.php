<?php
/* $Id: notification.inc.php,v 1.2 2007/09/30 12:39:14 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */

function wfdownloads_notify_iteminfo($category, $item_id)
{
	global $xoopsModule, $xoopsModuleConfig, $xoopsConfig;

	if (empty($xoopsModule) || $xoopsModule->getVar('dirname') != 'wfdownloads') {	
		$module_handler = xoops_gethandler('module');
		$module = $module_handler->getByDirname('wfdownloads');
		$config_handler = xoops_gethandler('config');
		$config = $config_handler->getConfigsByCat(0,intval($module->getVar('mid')));
	} else {
		$module = $xoopsModule;
		$config = $xoopsModuleConfig;
	}

	if ($category=='global') {
		$item['name'] = '';
		$item['url'] = '';
		return $item;
	}

	global $xoopsDB;
	if ($category=='category') {
		// Assume we have a valid category id
		$sql = "SELECT title FROM " . $xoopsDB->prefix('wfdownloads_cat') . " WHERE cid = '".intval($item_id)."'";
		$result = $xoopsDB->query($sql); // TODO: error check
		$result_array = $xoopsDB->fetchArray($result);
		$item['name'] = $result_array['title'];
		$item['url'] = WFDOWNLOADS_URL . 'viewcat.php?cid=' . intval($item_id);
		return $item;
	}

	if ($category=='file') {
		// Assume we have a valid file id
		$sql = "SELECT cid,title FROM ".$xoopsDB->prefix('wfdownloads_downloads') . " WHERE lid = '" . intval($item_id)."'";
		$result = $xoopsDB->query($sql); // TODO: error check
		$result_array = $xoopsDB->fetchArray($result);
		$item['name'] = $result_array['title'];
		$item['url'] = WFDOWNLOADS_URL . 'singlefile.php?cid=' . intval($result_array['cid']) . '&amp;lid=' . intval($item_id);
		return $item;
	}
}
?>