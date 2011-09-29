<?php
/**
 * $Id: category.php,v 1.11 2007/09/30 12:39:13 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */
include 'admin_header.php';
include_once XOOPS_ROOT_PATH . '/class/xoopsform/grouppermform.php';
include_once XOOPS_ROOT_PATH . '/class/tree.php';

$op = '';

function createcat($cid = 0)
{
    include_once WFDOWNLOADS_ROOT_PATH.'class/wfd_lists.php';
    include_once XOOPS_ROOT_PATH . '/class/xoopsformloader.php';

    $category_handler = icms_getModuleHandler('category');

    $heading = _AM_WFD_CCATEGORY_CREATENEW;

    if ($cid > 0)
    {
        $category = $category_handler->get($cid);
        $heading = _AM_WFD_CCATEGORY_MODIFY;
    } else {
        $category = $category_handler->create();
	}

	$sform = $category->getForm($heading);
	$sform -> display();
}

$op = isset($_REQUEST['op']) ? $_REQUEST['op'] : 'main';

switch ($op)
{
    case "move":
        if (!isset($_POST['ok']))
        {
            $cid = (isset($_POST['cid'])) ? intval($_POST['cid']) : intval($_GET['cid']);

            wfdownloads_icms_cp_header();
            wfdownloads_adminMenu(2, _AM_WFD_MCATEGORY);

            include_once XOOPS_ROOT_PATH . '/class/xoopsformloader.php';
            $sform = new icms_form_Theme(_AM_WFD_CCATEGORY_MOVE, "move", xoops_getenv('PHP_SELF'));

            $category_handler = icms_getModuleHandler('category');
            $categories = $category_handler->getObjects();
            $mytree = new icms_ipf_Tree($categories, "cid", "pid");
            $sform->addElement(new icms_form_elements_Label(_AM_WFD_BMODIFY, $mytree->makeSelBox('target', 'title')));

            $create_tray = new icms_form_elements_Tray('', '');
            $create_tray -> addElement(new icms_form_elements_Hidden('source', $cid));
            $create_tray -> addElement(new icms_form_elements_Hidden('ok', 1));
            $create_tray -> addElement(new icms_form_elements_Hidden('op', 'move'));
            $butt_save = new icms_form_elements_Button('', '', _AM_WFD_BMOVE, 'submit');
            $butt_save -> setExtra('onclick="this.form.elements.op.value=\'move\'"');
            $create_tray -> addElement($butt_save);
            $butt_cancel = new icms_form_elements_Button('', '', _AM_WFD_BCANCEL, 'submit');
            $butt_cancel -> setExtra('onclick="this.form.elements.op.value=\'cancel\'"');
            $create_tray -> addElement($butt_cancel);
            $sform -> addElement($create_tray);
            $sform -> display();
            icms_cp_footer();
        }
        else
        {
            global $xoopsDB;

            $source = intval($_POST['source']);
            $target = intval($_POST['target']);
            if ($target == $source)
            {
                redirect_header(WFDOWNLOADS_URL.'admin/category.php?op=move&amp;ok=0&amp;cid=$source', 5, _AM_WFD_CCATEGORY_MODIFY_FAILED);
            }

            if (!$target)
            {
                redirect_header(WFDOWNLOADS_URL.'admin/category.php?op=move&amp;ok=0&amp;cid=$source', 5, _AM_WFD_CCATEGORY_MODIFY_FAILEDT);
            }
            $download_handler = icms_getModuleHandler('download');
            $result = $download_handler->updateAll("cid", $target, new icms_db_criteria_Item("cid", intval($source)), true);
            if (!$result)
            {
                $error = _AM_WFD_DBERROR;
                trigger_error($error, E_USER_ERROR);
            }
            redirect_header(WFDOWNLOADS_URL.'admin/category.php?op=default', 1, _AM_WFD_CCATEGORY_MODIFY_MOVED);
            exit();
        }
        break;

    case "addCat":

        global $xoopsDB, $myts, $_FILES, $xoopsModuleConfig;

        $cid = (isset($_POST["cid"])) ? intval($_POST["cid"]) : 0;
        $groups = isset($_POST['groups']) ? $_POST['groups'] : array();
        $pid = (isset($_POST["pid"])) ? intval($_POST["pid"]) : 0;
        $weight = (isset($_POST["weight"]) && $_POST["weight"] > 0) ? intval($_POST["weight"]) : 0;
        $spotlighthis = (isset($_POST["lid"])) ? intval($_POST["lid"]) : 0;
        $spotlighttop = (isset($_POST["spotlighttop"]) && ($_POST["spotlighttop"] == 1)) ? 1 : 0;
        $imgurl = ($_POST["imgurl"] && $_POST["imgurl"] != "blank.png") ? $myts -> addslashes($_POST["imgurl"]) : "";

        $dohtml = isset($_POST['dohtml']);
        $dosmiley = isset($_POST['dosmiley']);
        $doxcode = isset($_POST['doxcode']);
        $doimage = isset($_POST['doimage']);
        $dobr = isset($_POST['dobr']);

        $category_handler = icms_getModuleHandler('category');
        if (!$cid)
        {
            $category = $category_handler->create();
        }
        else {
            $category = $category_handler->get($cid);
            $childcats = $category_handler->getChildCats($category);
            if ($pid == $cid || in_array($pid, array_keys($childcats))) {
                $category->setErrors(_AM_WFD_CCATEGORY_CHILDASPARENT);
            }
        }

		// added - start - March 4 2006 - jpc
        $formulize_fid = (isset($_POST["formulize_fid"])) ? intval($_POST["formulize_fid"]) : 0;
		// added - end - March 4 2006 - jpc

        $category->setVar('title', $_POST["title"]);
        $category->setVar('description', $_POST["description"]);
        $category->setVar('summary', $_POST["summary"]);
        $category->setVar('dohtml', $dohtml);
        $category->setVar('dosmiley', $dosmiley);
        $category->setVar('doxcode', $doxcode);
        $category->setVar('dobr', $dobr);
        $category->setVar('doimage', $doimage);
        $category->setVar('pid', $pid);
        $category->setVar('weight', $weight);
        $category->setVar('spotlighthis', $spotlighthis);
        $category->setVar('spotlighttop', $spotlighttop);
        $category->setVar('imgurl', $imgurl);

		// added - start - March 4 2006 - jpc
        $category->setVar('formulize_fid', $formulize_fid);
		// added - end - March 4 2006 - jpc

        $result = $category_handler->insert($category);
        if (!$result) {
            echo $category->getHtmlErrors();
        }
        if (!$cid)
        {
            if ($cid == 0) {
                $newid = intval($category->getVar('cid'));
            }
            wfd_save_Permissions($groups, $newid, 'WFDownCatPerm');
            /**
             * Notify of new category
             */
            global $xoopsModule;
            $tags = array();
            $tags['CATEGORY_NAME'] = $_POST['title'];
            $tags['CATEGORY_URL'] = WFDOWNLOADS_URL.'viewcat.php?cid=' . $newid;
            $notification_handler = xoops_gethandler('notification');
            $notification_handler -> triggerEvent('global', 0, 'new_category', $tags);
            $database_mess = _AM_WFD_CCATEGORY_CREATED;
        }
        else
        {
            $database_mess = _AM_WFD_CCATEGORY_MODIFIED;
            wfd_save_Permissions($groups, $cid, 'WFDownCatPerm');
        }
        redirect_header(WFDOWNLOADS_URL.'admin/category.php', 1, $database_mess);
        break;

    case "del":

        global $xoopsDB, $xoopsModule;

        $cid = (isset($_POST['cid']) && is_numeric($_POST['cid'])) ? intval($_POST['cid']) : intval($_GET['cid']);
        $ok = (isset($_POST['ok']) && $_POST['ok'] == 1) ? intval($_POST['ok']) : 0;
        $category_handler = icms_getModuleHandler('category');
        $categories = $category_handler->getObjects();
        $mytree = new icms_ipf_Tree($categories, "cid", "pid");

        if ($ok == 1)
        {
            // get all subcategories under the specified category
            $arr = $mytree -> getAllChild($cid);

           foreach($arr as $child)
            {
                // get all category ids
                $cids[] = $child->getVar('cid');
            }
            $cids[] = $cid;

            $criteria = new icms_db_criteria_Item("cid", "(".implode(',', $cids).")", "IN");

            $download_handler = icms_getModuleHandler('download');
            //get list of downloads in these subcategories
            $downloads = $download_handler->getList($criteria);

            $download_criteria = new icms_db_criteria_Item("lid", "(".implode(',', array_keys($downloads)).")", "IN");

            $rating_handler = icms_getModuleHandler('rating');
            $report_handler = icms_getModuleHandler('report');

            // now for each download, delete the text data and vote data associated with the download
            $rating_handler->deleteAll($download_criteria);
            $report_handler->deleteAll($download_criteria);
            $download_handler->deleteAll($download_criteria);
            foreach (array_keys($downloads) as $lid) {
                xoops_comment_delete($xoopsModule->getVar('mid'), intval($lid));
            }

            // all downloads for each category is deleted, now delete the category data
            $category_handler->deleteAll($criteria);
            $error = _AM_WFD_DBERROR;

            foreach ($cids as $cid) {
                xoops_groupperm_deletebymoditem (intval($xoopsModule->getVar('mid')), 'WFDownCatPerm', $cid);
            }

            redirect_header(WFDOWNLOADS_URL.'admin/category.php', 1, _AM_WFD_CCATEGORY_DELETED);
            exit();
        }
        else
        {
            wfdownloads_icms_cp_header();
            xoops_confirm(array('op' => 'del', 'cid' => $cid, 'ok' => 1), 'category.php', _AM_WFD_CCATEGORY_AREUSURE);
            icms_cp_footer();
        }
        break;

    case "modCat":
        $cid = (isset($_POST['cid'])) ? intval($_POST['cid']) : 0;
        wfdownloads_icms_cp_header();
        wfdownloads_adminMenu(2, _AM_WFD_MCATEGORY);
        createcat($cid);
        icms_cp_footer();
        break;

    case 'main':
    default:

        wfdownloads_icms_cp_header();
        wfdownloads_adminMenu(2, _AM_WFD_MCATEGORY);

        include_once XOOPS_ROOT_PATH . '/class/xoopsformloader.php';
        $totalcats = wfd_totalcategory();

        if ($totalcats > 0)
        {
            $sform = new icms_form_Theme(_AM_WFD_CCATEGORY_MODIFY, "category", $_SERVER['REQUEST_URI']);
            $category_handler = icms_getModuleHandler('category');
            $categories = $category_handler->getObjects();
            $mytree = new icms_ipf_Tree($categories, "cid", "pid");
            $sform->addElement(new icms_form_elements_Label(_AM_WFD_CCATEGORY_MODIFY_TITLE, $mytree->makeSelBox('cid', 'title')));

            $dup_tray = new icms_form_elements_Tray('', '');
            $dup_tray -> addElement(new icms_form_elements_Hidden('op', 'modCat'));
            $butt_dup = new icms_form_elements_Button('', '', _AM_WFD_BMODIFY, 'submit');
            $butt_dup -> setExtra('onclick="this.form.elements.op.value=\'modCat\'"');
            $dup_tray -> addElement($butt_dup);
            $butt_move = new icms_form_elements_Button('', '', _AM_WFD_BMOVE, 'submit');
            $butt_move -> setExtra('onclick="this.form.elements.op.value=\'move\'"');
            $dup_tray -> addElement($butt_move);
            $butt_dupct = new icms_form_elements_Button('', '', _AM_WFD_BDELETE, 'submit');
            $butt_dupct -> setExtra('onclick="this.form.elements.op.value=\'del\'"');
            $dup_tray -> addElement($butt_dupct);
            $sform -> addElement($dup_tray);
            $sform -> display();
        }

        createcat(0);
        icms_cp_footer();
        break;
}

?>