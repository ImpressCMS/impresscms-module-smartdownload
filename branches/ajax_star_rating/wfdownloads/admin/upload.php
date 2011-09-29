<?php
/**
 * $Id$
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */

include 'admin_header.php';

include_once ICMS_ROOT_PATH . '/class/tree.php';
include_once ICMS_ROOT_PATH."/class/xoopstree.php";

$op = isset($_REQUEST['op']) ?$_REQUEST['op'] : "default";

$rootpath = (isset($_GET['rootpath'])) ? intval($_GET['rootpath']) : 0;

switch ($op)
{
    case "upload":

        global $_POST, $_FILES;

        if ($_FILES['uploadfile']['name'] != "")
        {
            if (file_exists(ICMS_ROOT_PATH . "/" . $_POST['uploadpath'] . "/" . $_FILES['uploadfile']['name']))
            {
                redirect_header(WFDOWNLOADS_URL.'admin/upload.php', 2, _AM_WFD_DOWN_IMAGEEXIST);
            }

	        $allowed_mimetypes = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/x-png', 'image/png');
	        $maxfilesize = $xoopsModuleConfig['maxfilesize'];
	        $maxfilewidth = $xoopsModuleConfig['maximgwidth'];
	        $maxfileheight = $xoopsModuleConfig['maximgheight'];
	        $uploaddir = ICMS_ROOT_PATH."/".$_POST['uploadpath'];
	        $screenshot = strtolower($_FILES['uploadfile']['name']);
	        wfd_uploading($screenshot, ICMS_ROOT_PATH."/".$_POST['uploadpath'], $allowed_mimetypes, "upload.php", 1, 0, true);

	        include_once WFDOWNLOADS_ROOT_PATH.'class/img_uploader.php';
	        $uploader = new XoopsMediaImgUploader($uploaddir."/", $allowed_mimetypes, $maxfilesize, $maxfilewidth, $maxfileheight);

            redirect_header(WFDOWNLOADS_URL.'admin/upload.php', 2 , _AM_WFD_DOWN_IMAGEUPLOAD);
            exit();

        }
        else
        {
            redirect_header(WFDOWNLOADS_URL.'admin/upload.php', 2 , _AM_WFD_DOWN_NOIMAGEEXIST);
            exit();
        }
        break;

    case "delfile":

        if (isset($_POST['confirm']) && $_POST['confirm'] == 1)
        {
            $filetodelete = ICMS_ROOT_PATH . "/" . $_POST['uploadpath'] . "/" . $_POST['downfile'];
            if (file_exists($filetodelete))
            {
                chmod($filetodelete, 0666);
                if (@unlink($filetodelete))
                {
                    redirect_header(WFDOWNLOADS_URL.'admin/upload.php', 1, _AM_WFD_DOWN_FILEDELETED);
                }
                else
                {
                    redirect_header(WFDOWNLOADS_URL.'admin/upload.php', 1, _AM_WFD_DOWN_FILEERRORDELETE);
                }
            }
            exit();
        }
        else
        {
            if (empty($_POST['downfile']))
            {
                redirect_header(WFDOWNLOADS_URL.'admin/upload.php', 1, _AM_WFD_DOWN_NOFILEERROR);
                exit();
            }
            wfdownloads_xoops_cp_header();
            xoops_confirm(array('op' => 'delfile', 'uploadpath' => $_POST['uploadpath'], 'downfile' => $_POST['downfile'], 'confirm' => 1),
            'upload.php', _AM_WFD_DOWN_DELETEFILE . "<br /><br />" . $_POST['downfile'], _AM_WFD_BDELETE);
        }
        break;

    case "default":
    default:
        include_once WFDOWNLOADS_ROOT_PATH.'class/wfd_lists.php';

        $displayimage = '';
        wfdownloads_xoops_cp_header();

        Global $xoopsUser, $xoopsDB, $xoopsModuleConfig;

        $dirarray = array(1 => $xoopsModuleConfig['catimage'], 2 => $xoopsModuleConfig['screenshots'], 3 => $xoopsModuleConfig['mainimagedir']);
        $namearray = array(1 => _AM_WFD_DOWN_CATIMAGE , 2 => _AM_WFD_DOWN_SCREENSHOTS, 3 => _AM_WFD_DOWN_MAINIMAGEDIR);
        $listarray = array(1 => _AM_WFD_DOWN_FCATIMAGE , 2 => _AM_WFD_DOWN_FSCREENSHOTS, 3 => _AM_WFD_DOWN_FMAINIMAGEDIR);

        wfdownloads_adminMenu(6, _AM_WFD_MUPLOADS);
        wfd_serverstats();
        if ($rootpath > 0)
        {
            echo "
<div><b>" . _AM_WFD_DOWN_FUPLOADPATH . "</b> " . ICMS_ROOT_PATH . "/" . $dirarray[$rootpath] . "</div>\n
<div><b>" . _AM_WFD_DOWN_FUPLOADURL . "</b> " . ICMS_URL . "/" . $dirarray[$rootpath] . "</div><br />\n";
        }
        $pathlist = (isset($listarray[$rootpath])) ? $namearray[$rootpath] : '';
        $namelist = (isset($listarray[$rootpath])) ? $namearray[$rootpath] : '';

        $iform = new XoopsThemeForm(_AM_WFD_DOWN_FUPLOADIMAGETO . $pathlist, "op", xoops_getenv('PHP_SELF'));
        $iform->setExtra('enctype="multipart/form-data"');

        ob_start();
        $iform->addElement(new XoopsFormHidden('dir', $rootpath));
        wfd_getDirSelectOption($namelist, $dirarray, $namearray);
        $iform->addElement(new XoopsFormLabel(_AM_WFD_DOWN_FOLDERSELECTION, ob_get_contents()));
        ob_end_clean();

        if ($rootpath > 0)
        {
            $graph_array = &WfsLists::getListTypeAsArray(ICMS_ROOT_PATH . "/" . $dirarray[$rootpath], $type = "images");
            $indeximage_select = new XoopsFormSelect('', 'downfile', '');
            $indeximage_select->addOptionArray($graph_array);
            $indeximage_select->setExtra("onchange='showImgSelected(\"image\", \"downfile\", \"" . $dirarray[$rootpath] . "\", \"\", \"" . ICMS_URL . "\")'");
            $indeximage_tray = new XoopsFormElementTray(_AM_WFD_DOWN_FSHOWSELECTEDIMAGE, '&nbsp;');
            $indeximage_tray->addElement($indeximage_select);
            if (!empty($_REQUEST['downfile']))
            {
                $indeximage_tray->addElement(new XoopsFormLabel('', "<br /><br /><img src='" . ICMS_URL . "/" . $dirarray[$rootpath] . "/" . $_REQUEST['downfile'] . "' name='image' id='image' alt='' title='image' />"));
            }
            else
            {
                $indeximage_tray->addElement(new XoopsFormLabel('', "<br /><br /><img src='" . ICMS_URL . "/uploads/blank.gif' name='image' id='image' alt='' title='image' />"));
            }
            $iform->addElement($indeximage_tray);

            $iform->addElement(new XoopsFormFile(_AM_WFD_DOWN_FUPLOADIMAGE, 'uploadfile', 0));
            $iform->addElement(new XoopsFormHidden('uploadpath', $dirarray[$rootpath]));
            $iform->addElement(new XoopsFormHidden('rootnumber', $rootpath));

            $dup_tray = new XoopsFormElementTray('', '');
            $dup_tray->addElement(new XoopsFormHidden('op', 'upload'));
            $butt_dup = new XoopsFormButton('', '', _AM_WFD_BUPLOAD, 'submit');
            $butt_dup->setExtra('onclick="this.form.elements.op.value=\'upload\'"');
            $dup_tray->addElement($butt_dup);

            $butt_dupct = new XoopsFormButton('', '', _AM_WFD_BDELETEIMAGE, 'submit');
            $butt_dupct->setExtra('onclick="this.form.elements.op.value=\'delfile\'"');
            $dup_tray->addElement($butt_dupct);
            $iform->addElement($dup_tray);
        }
        $iform->display();
}
xoops_cp_footer();

?>