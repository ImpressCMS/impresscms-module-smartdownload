<?php
/**
 * $Id: modifications.php,v 1.9 2007/09/30 12:39:14 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */

include 'admin_header.php';

if (!isset($_POST['op']))
{
    $op = isset($_GET['op']) ? $_GET['op'] : 'main';
}
else
{
    $op = $_POST['op'];
}

switch ($op)
{
    case "listModReqshow":

        include XOOPS_ROOT_PATH . '/class/xoopsformloader.php';

        global $xoopsDB, $myts, $mytree, $xoopsModuleConfig, $xoopsUser;

        wfdownloads_icms_cp_header();
        wfdownloads_adminMenu(3, _AM_WFD_MOD_MODREQUESTS);

        $requestid = intval($_GET['requestid']);
        $modification_handler = icms_getModuleHandler('modification');
        $download_handler = icms_getModuleHandler('download');
        $category_handler = icms_getModuleHandler('category');

        $modification = $modification_handler->get($requestid);
        $download = $download_handler->get($modification->getVar('lid'));

        $orig_user = new XoopsUser($download->getVar('submitter'));
        $submittername = xoops_getLinkedUnameFromId($download->getVar('submitter')); // $orig_user->getvar("uname");
        $submitteremail = $orig_user->getVar("email");

        echo "<div><b>" . _AM_WFD_MOD_MODPOSTER . "</b> $submittername</div>";
        $not_allowed = array("lid", "submitter", "requestid", "modifysubmitter");

        $sform = new icms_form_Theme(_AM_WFD_MOD_ORIGINAL, "storyform", "index.php");

        $keys = $download->getVars();
        foreach (array_keys($keys) as $key)
        {
            if (in_array($key , $not_allowed))
            {
                continue;
            }
            $lang_def = constant("_AM_WFD_MOD_" . strtoupper($key));

            $content = $download->getVar($key, 'e');
            switch ($key) {
                case "platform":
                case "license":
                case "limitations":
				case "versiontypes":
                $content = $xoopsModuleConfig[$key][$download->getVar($key)];
                break;

                case "cid":
                $category_list = $category_handler->getObjects(new icms_db_criteria_Item("cid", $download->getVar($key)));
                if (!isset($category_list[0])) {
                    continue;
                }
                $content = $category_list[0]->getVar('title', 'e');
                break;

                case "screenshot":
                if ($content != "") {
                    $content = "<img src='" . XOOPS_URL . "/" . $xoopsModuleConfig['screenshots'] . "/" . $content . "' width='" . $xoopsModuleConfig['shotwidth'] . "' alt='' title='' />";
                }
                break;

                case "screenshot2":
                if ($content != "") {
                    $content = "<img src='" . XOOPS_URL . "/" . $xoopsModuleConfig['screenshots'] . "/" . $content . "' width='" . $xoopsModuleConfig['shotwidth'] . "' alt='' title='' />";
                }
                break;

                case "screenshot3":
                if ($content != "") {
                    $content = "<img src='" . XOOPS_URL . "/" . $xoopsModuleConfig['screenshots'] . "/" . $content . "' width='" . $xoopsModuleConfig['shotwidth'] . "' alt='' title='' />";
                }
                break;

                case "screenshot4":
                if ($content != "") {
                    $content = "<img src='" . XOOPS_URL . "/" . $xoopsModuleConfig['screenshots'] . "/" . $content . "' width='" . $xoopsModuleConfig['shotwidth'] . "' alt='' title='' />";
                }
                break;

                case "features":
                case "requirements":
                if ($content != '')
                {
                    $downrequirements = explode('|', trim($content));
                    foreach ($downrequirements as $bi)
                    {
                        $content = "<li>" . $bi;
                    }
                }
                break;

                case "dhistory":
	            $content = $myts->displayTarea($content, 1, 0, 0, 0, 1);
	            break;
            }
            $sform->addElement(new icms_form_elements_Label($lang_def, $content));
        }
        $sform->display();

        $modify_user = new XoopsUser($modification->getVar('modifysubmitter'));
        $modifyname = xoops_getLinkedUnameFromId(intval($modify_user->getVar('uid')));
        $modifyemail = $modify_user->getVar("email");

        echo "<div><b>" . _AM_WFD_MOD_MODIFYSUBMITTER . "</b> $modifyname</div>";
        $sform = new icms_form_Theme(_AM_WFD_MOD_PROPOSED, "storyform", "modifications.php");
        $keys = $modification->getVars();
        foreach (array_keys($keys) as $key)
        {
            if (in_array($key , $not_allowed))
            {
                continue;
            }
            $lang_def = constant("_AM_WFD_MOD_" . strtoupper($key));

            $content = $modification->getVar($key, 'e');
            switch ($key) {
                case "platform":
                case "license":
                case "limitations":
				case "versiontypes":
                $content = $xoopsModuleConfig[$key][$modification->getVar($key)];
                break;

                case "cid":
                $category_list = $category_handler->getObjects(new icms_db_criteria_Item("cid", $modification->getVar($key)));
                if (!isset($category_list[0])) {
                    continue;
                }
                $content = $category_list[0]->getVar('title', 'e');
                break;

                case "screenshot":
                if ($content != "") {
                    $content = "<img src='" . XOOPS_URL . "/" . $xoopsModuleConfig['screenshots'] . "/" . $content . "' width='" . $xoopsModuleConfig['shotwidth'] . "' alt='' title='' />";
                }
                break;

                case "screenshot2":
                if ($content != "") {
                    $content = "<img src='" . XOOPS_URL . "/" . $xoopsModuleConfig['screenshots'] . "/" . $content . "' width='" . $xoopsModuleConfig['shotwidth'] . "' alt='' title='' />";
                }
                break;

                case "screenshot3":
                if ($content != "") {
                    $content = "<img src='" . XOOPS_URL . "/" . $xoopsModuleConfig['screenshots'] . "/" . $content . "' width='" . $xoopsModuleConfig['shotwidth'] . "' alt='' title='' />";
                }
                break;

                case "screenshot4":
                if ($content != "") {
                    $content = "<img src='" . XOOPS_URL . "/" . $xoopsModuleConfig['screenshots'] . "/" . $content . "' width='" . $xoopsModuleConfig['shotwidth'] . "' alt='' title='' />";
                }
                break;

                case "features":
                case "requirements":
                if ($content != '')
                {
                    $downrequirements = explode('|', trim($content));
                    foreach ($downrequirements as $bi)
                    {
                        $content = "<li>" . $bi;
                    }
                }
                break;

                case "dhistory":
	            $content = $myts->displayTarea($content, 1, 0, 0, 0, 1);
	            break;
            }
            $sform->addElement(new icms_form_elements_Label($lang_def, $content));
        }

        $button_tray = new icms_form_elements_Tray('', '');
        $button_tray->addElement(new icms_form_elements_Hidden('requestid', $requestid));
        $button_tray->addElement(new icms_form_elements_Hidden('lid', intval($modification->getVar('lid'))));
        $hidden = new icms_form_elements_Hidden('op', 'changeModReq');
        $button_tray->addElement($hidden);
        if (!$modification->isNew())
        {
            $butt_dup = new icms_form_elements_Button('', '', _AM_WFD_BAPPROVE, 'submit');
            $butt_dup->setExtra('onclick="this.form.elements.op.value=\'changeModReq\'"');
            $button_tray->addElement($butt_dup);
        }
        $butt_dupct2 = new icms_form_elements_Button('', '', _AM_WFD_BIGNORE, 'submit');
        $butt_dupct2->setExtra('onclick="this.form.elements.op.value=\'ignoreModReq\'"');
        $button_tray->addElement($butt_dupct2);
        $sform->addElement($button_tray);
        $sform->display();

        icms_cp_footer();
        exit();
        break;

    case "changeModReq":

		/* Added by Lankford on 2007/3/21 */
    	//Get a pointer to the download record and the modification record, then compare
        //their 'versions' to see if they are different.  If they are, then raise filemodify 
        //events.
        $requestid = intval($_POST['requestid']);
        $modification_handler = icms_getModuleHandler('modification');
        $download_handler = icms_getModuleHandler('download');

        $modification = $modification_handler->get($requestid);
        $download = $download_handler->get($modification->getVar('lid'));
        
        if ($modification->getVar('version') == $download->getVar('version')) {
        	$raiseModifyEvents = false;
        } else {
        	$raiseModifyEvents = true;
        }
        /* end add block */

        $modification_handler = icms_getModuleHandler('modification');
        $modification_handler->approveModification($_POST['requestid']);

	$cid = intval($download->getVar('cid'));
	$lid = intval($download->getVar('lid'));
        
		/* Added by lankford on 2007/3/21 */
        if ($raiseModifyEvents) {
    	// Trigger the three events related to modified files (one for the file, category, and global event categories respectively)
        $notification_handler = xoops_gethandler('notification');
        $tags = array();
        $tags['FILE_NAME'] = $download->getVar('title');
        $tags['FILE_URL'] = WFDOWNLOADS_URL.'singlefile.php?cid=' . $cid . '&amp;lid=' . $lid;
        $category_handler = icms_getModuleHandler('category');
        $category = $category_handler->get($cid);
		$tags['FILE_VERSION'] = $download->getVar('version');
        $tags['CATEGORY_NAME'] = $category->getVar('title');
        $tags['CATEGORY_URL'] = WFDOWNLOADS_URL.'viewcat.php?cid=' . $cid;

        $notification_handler->triggerEvent('global', 0, 'filemodified', $tags);
        $notification_handler->triggerEvent('category', $cid, 'filemodified', $tags);
        $notification_handler->triggerEvent('file', $lid, 'filemodified', $tags);
		}
        /* end add block */
		
        redirect_header(WFDOWNLOADS_URL.'admin/index.php', 1, _AM_WFD_MOD_REQUPDATED);
        break;

    case "ignoreModReq":
	    $criteria = new icms_db_criteria_Item('requestid', intval($_POST['requestid']));
	    $modification_handler = icms_getModuleHandler('modification');
	    $modification_handler->deleteAll($criteria, true);
        redirect_header(WFDOWNLOADS_URL.'admin/index.php', 1, _AM_WFD_MOD_REQDELETED);
        break;

    case 'main':
    default:

        /*	Not Needed Anymore Icms 1.3 	include_once XOOPS_ROOT_PATH . '/class/xoopstree.php';	*/

        global $xoopsModuleConfig;
        $start = isset($_GET['start']) ? intval($_GET['start']) : 0;

        $modification_handler = icms_getModuleHandler('modification');
        $criteria = new icms_db_criteria_Compo();
        $criteria->setLimit($xoopsModuleConfig['admin_perpage']);
        $criteria->setStart($start);
        $criteria->setSort("requestdate");
        $modifications = $modification_handler->getObjects($criteria);
        $totalmodrequests = $modification_handler->getCount();

        wfdownloads_icms_cp_header();
        wfdownloads_adminMenu(3, _AM_WFD_MOD_MODREQUESTS);
	echo "
		<fieldset><legend style='font-weight: bold; color: #900;'>" . _AM_WFD_MOD_MODREQUESTSINFO . "</legend>\n
		<div style='padding: 8px;'>" . _AM_WFD_MOD_TOTMODREQUESTS . " <b>$totalmodrequests</></div>\n
		</fieldset><br />\n

		<table width='100%' cellspacing='1' cellpadding='2' border='0' class='outer'>\n
		<tr>\n
		<th align='center'><b>" . _AM_WFD_MOD_MODID . "</b></th>\n
		<th><b>" . _AM_WFD_MOD_MODTITLE . "</b></th>\n
		<th align='center'><b>" . _AM_WFD_MOD_MODIFYSUBMIT . "</b></th>\n
		<th align='center'><b>" . _AM_WFD_MOD_DATE . "</b></th>\n
		<th align='center'><b>" . _AM_WFD_MINDEX_ACTION . "</b></th>\n
		</tr>\n";
        if ($totalmodrequests > 0)
        {
            foreach ($modifications as $modification)
            {
                $submitter = xoops_getLinkedUnameFromId($modification->getVar('modifysubmitter'));
                $requestdate = formatTimestamp($modification->getVar('requestdate'), $xoopsModuleConfig['dateformat']);
	            echo "
            		<tr>\n
            		<td class='head' align='center'>" . intval($modification->getVar('requestid')) . "</td>\n
            		<td class='even'>" . $modification->getVar('title') . "</td>\n
            		<td class='even' align='center'>" . $submitter . "</td>\n
            		<td class='even' align='center'>" . $requestdate . "</td>\n
            		<td class='even' align='center'> <a href='".WFDOWNLOADS_URL."admin/modifications.php?op=listModReqshow&amp;requestid=" . intval($modification->getVar('requestid')). "'>"._AM_WFD_MOD_VIEW."</a></td>\n
            		</tr>\n";
            }
        }
        else
        {
            echo "<tr><td class='head' align='center' colspan='7'>" . _AM_WFD_MOD_NOMODREQUEST . "</td></tr>";
        }
        echo "</table>\n";

        include_once XOOPS_ROOT_PATH . '/class/pagenav.php';
        $page = ($totalmodrequests > $xoopsModuleConfig['admin_perpage']) ? _AM_WFD_MINDEX_PAGE : '';
        $pagenav = new icms_view_PageNav($totalmodrequests, $xoopsModuleConfig['admin_perpage'], $start, 'start');
        echo "<div align='"._GLOBAL_RIGHT."' style='padding: 8px;'>" . $page . '' . $pagenav->renderNav() . '</div>';
        icms_cp_footer();
}

?>