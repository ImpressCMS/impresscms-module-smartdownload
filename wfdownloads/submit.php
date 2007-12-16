<?php
/**
 * $Id: submit.php,v 1.31 2007/09/30 15:46:53 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v3.11
 * Release Date: 26 Sept 2006
 * Author: WF-Sections
 * Licence: GNU
 */

include 'header.php';
include_once XOOPS_ROOT_PATH . '/class/xoopstree.php';

$myts = &MyTextSanitizer::getInstance(); // MyTextSanitizer object
$mytree = new XoopsTree($xoopsDB->prefix('wfdownloads_cat'), "cid", "pid");

global $xoopsModuleConfig, $xoopsUser, $xoopsModule;

$submissions = 0;
if (is_object($xoopsUser) && ($xoopsModuleConfig['submissions'] == 2 || $xoopsModuleConfig['submissions'] == 4))
{
	$groups = $xoopsUser->getGroups();
    if (array_intersect($xoopsModuleConfig['submitarts'], $groups))
    {
	    $submissions = 1;
    }
} else {
	if (!is_object($xoopsUser) && ($xoopsModuleConfig['anonpost'] == 2 || $xoopsModuleConfig['anonpost'] == 4))
    {
		$submissions = 1;
    } else {
	    redirect_header(XOOPS_URL . '/user.php', 5, _MD_WFD_MUSTREGFIRST);
	    exit();
	}
}

if (!$submissions == 1) {
	redirect_header(WFDOWNLOADS_URL.'index.php', 5, _MD_WFD_NOTALLOWESTOSUBMIT);
    exit();
}

if (is_object($xoopsUser) && !$xoopsUser->isAdmin()) {
    if ($xoopsUser->getVar('posts') < $xoopsModuleConfig['upload_minposts']) {
        redirect_header("index.php",5,_MD_WFD_UPLOADMINPOSTS);
        exit();
    }
}

if (isset($_POST['submit']) && !empty($_POST['submit']))
{
    $notify = !empty($_POST['notify']) ? 1 : 0;

    $lid = (!empty($_POST['lid'])) ? intval($_POST['lid']) : 0 ;
    $cid = (!empty($_POST['cid'])) ? intval($_POST['cid']) : 0 ;

    if (empty($_FILES['userfile']['name']))
    {
		if ($_POST["url"] && $_POST["url"] != "" && $_POST["url"] != "http://")
		{
	        $url = ($_POST["url"] != "http://") ? $_POST["url"] : '';
			$filename = '';
			$filetype = '';
		} else {
	        $url = ($_POST["url"] != "http://") ? $_POST["url"] : '';
			$filename = $_POST['filename'];
			$filetype = $_POST['filetype'];
		}
        $size = ((empty($_POST["size"]) || !is_numeric($_POST["size"]))) ? 0 : intval($_POST["size"]);
        $title = trim($_POST["title"]);
    }
    else
    {
        global $_FILES;

        $down = wfd_uploading($_FILES, $xoopsModuleConfig['uploaddir'], "", "index.php", 0, 0, 0);
        $url = ($_POST["url"] != "http://") ? $_POST["url"] : '';
        $size = $down['size'];
        $filename = $down['filename'];
        $filetype = $_FILES['userfile']['type'];
        $title = $_FILES['userfile']['name'];
        $title = rtrim(wfd_strrrchr($title, "."), ".");
        $title = (isset($_POST["title_checkbox"]) && $_POST["title_checkbox"] == 1) ? $title : trim($_POST["title"]);
    }

    if ((isset($_FILES['screenshot']['name']) && !empty($_FILES['screenshot']['name'])))
    {
        $allowed_mimetypes = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/x-png', 'image/png');
        $maxfilesize = $xoopsModuleConfig['maxfilesize'];
        $maxfilewidth = $xoopsModuleConfig['maximgwidth'];
        $maxfileheight = $xoopsModuleConfig['maximgheight'];
        $uploaddir = XOOPS_ROOT_PATH . "/" . $xoopsModuleConfig['screenshots'] . "/";
        $screenshot = strtolower($_FILES['screenshot']['name']);

        include_once WFDOWNLOADS_ROOT_PATH.'class/img_uploader.php';
        $uploader = new XoopsMediaImgUploader($uploaddir, $allowed_mimetypes, $maxfilesize, $maxfilewidth, $maxfileheight);

        if ($uploader->fetchMedia($_POST['xoops_upload_file'][1]))
        {
            if (!$uploader->upload())
            {
                $errors = $uploader->getErrors();
				@unlink($uploaddir.$screenshot);
                redirect_header(WFDOWNLOADS_URL.'index.php?op=downloadsConfigMenu', 1, $errors);
            }
            else
            {
            }
        }
        else
        {
            $errors = $uploader->getErrors();
			@unlink($uploaddir.$screenshot);
            redirect_header(WFDOWNLOADS_URL.'index.php?op=downloadsConfigMenu', 1, $errors);
        }
    }
	else
	{
		$screenshot = '';
	}

if ($xoopsModuleConfig['max_screenshot'] >= 2)
{
    if ((isset($_FILES['screenshot2']['name']) && !empty($_FILES['screenshot2']['name'])))
    {
        $allowed_mimetypes = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/x-png', 'image/png');
        $maxfilesize = $xoopsModuleConfig['maxfilesize'];
        $maxfilewidth = $xoopsModuleConfig['maximgwidth'];
        $maxfileheight = $xoopsModuleConfig['maximgheight'];
        $uploaddir = XOOPS_ROOT_PATH . "/" . $xoopsModuleConfig['screenshots'] . "/";
        $screenshot2 = strtolower($_FILES['screenshot2']['name']);

        include_once WFDOWNLOADS_ROOT_PATH.'class/img_uploader.php';
        $uploader = new XoopsMediaImgUploader($uploaddir, $allowed_mimetypes, $maxfilesize, $maxfilewidth, $maxfileheight);

        if ($uploader->fetchMedia($_POST['xoops_upload_file'][2]))
        {
            if (!$uploader->upload())
            {
                $errors = $uploader->getErrors();
				@unlink($uploaddir.$screenshot2);
                redirect_header(WFDOWNLOADS_URL.'index.php?op=downloadsConfigMenu', 1, $errors);
            }
            else
            {
            }
        }
        else
        {
            $errors = $uploader->getErrors();
			@unlink($uploaddir.$screenshot2);
            redirect_header(WFDOWNLOADS_URL.'index.php?op=downloadsConfigMenu', 1, $errors);
        }
    }
	else
	{
		$screenshot2 = '';
	}
}
else
{
	$screenshot2 = '';
}

if ($xoopsModuleConfig['max_screenshot'] >= 3)
{
    if ((isset($_FILES['screenshot3']['name']) && !empty($_FILES['screenshot3']['name'])))
    {
        $allowed_mimetypes = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/x-png', 'image/png');
        $maxfilesize = $xoopsModuleConfig['maxfilesize'];
        $maxfilewidth = $xoopsModuleConfig['maximgwidth'];
        $maxfileheight = $xoopsModuleConfig['maximgheight'];
        $uploaddir = XOOPS_ROOT_PATH . "/" . $xoopsModuleConfig['screenshots'] . "/";
        $screenshot3 = strtolower($_FILES['screenshot3']['name']);

        include_once WFDOWNLOADS_ROOT_PATH.'class/img_uploader.php';
        $uploader = new XoopsMediaImgUploader($uploaddir, $allowed_mimetypes, $maxfilesize, $maxfilewidth, $maxfileheight);

        if ($uploader->fetchMedia($_POST['xoops_upload_file'][3]))
        {
            if (!$uploader->upload())
            {
                $errors = $uploader->getErrors();
				@unlink($uploaddir.$screenshot3);
                redirect_header(WFDOWNLOADS_URL.'index.php?op=downloadsConfigMenu', 1, $errors);
            }
            else
            {
            }
        }
        else
        {
            $errors = $uploader->getErrors();
			@unlink($uploaddir.$screenshot3);
            redirect_header(WFDOWNLOADS_URL.'index.php?op=downloadsConfigMenu', 1, $errors);
        }
    }
	else
	{
		$screenshot3 = '';
	}
}
else
{
	$screenshot3 = '';
}

if ($xoopsModuleConfig['max_screenshot'] >= 4)
{
    if ((isset($_FILES['screenshot4']['name']) && !empty($_FILES['screenshot4']['name'])))
    {
        $allowed_mimetypes = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/x-png', 'image/png');
        $maxfilesize = $xoopsModuleConfig['maxfilesize'];
        $maxfilewidth = $xoopsModuleConfig['maximgwidth'];
        $maxfileheight = $xoopsModuleConfig['maximgheight'];
        $uploaddir = XOOPS_ROOT_PATH . "/" . $xoopsModuleConfig['screenshots'] . "/";
        $screenshot4 = strtolower($_FILES['screenshot4']['name']);

        include_once WFDOWNLOADS_ROOT_PATH.'class/img_uploader.php';
        $uploader = new XoopsMediaImgUploader($uploaddir, $allowed_mimetypes, $maxfilesize, $maxfilewidth, $maxfileheight);

        if ($uploader->fetchMedia($_POST['xoops_upload_file'][4]))
        {
            if (!$uploader->upload())
            {
                $errors = $uploader->getErrors();
				@unlink($uploaddir.$screenshot4);
                redirect_header(WFDOWNLOADS_URL.'index.php?op=downloadsConfigMenu', 1, $errors);
            }
            else
            {
            }
        }
        else
        {
            $errors = $uploader->getErrors();
			@unlink($uploaddir.$screenshot4);
            redirect_header(WFDOWNLOADS_URL.'index.php?op=downloadsConfigMenu', 1, $errors);
        }
    }
	else
	{
		$screenshot4 = '';
	}
}
else
{
	$screenshot4 = '';
}


    $download_handler = xoops_getmodulehandler('download');
    if ($lid > 0) {
    	$thisIsANewRecord = false; /* Added by Lankford on 2007/3/21 */
    	
        if ($xoopsModuleConfig['autoapprove'] == 2 || $xoopsModuleConfig['autoapprove'] == 4)
        {
            $download = $download_handler->get($lid);
        }
        else {
            $modification_handler = xoops_getmodulehandler('modification');
            $download = $modification_handler->create();
            $download->setVar('lid', $lid);
        }
    }
    else {
   	    $thisIsANewRecord = true; /* Added by Lankford on 2007/3/21 */
   	    
        $download = $download_handler->create();
        if ($xoopsModuleConfig['autoapprove'] == 2 || $xoopsModuleConfig['autoapprove'] == 4)
        {
            $download->setVar("published", time());
            $download->setVar("status", 1);
        }
        else {
            $download->setVar('published', 0);
            $download->setVar('status', 0);
        }
    }


    // added - start - March 4 2006 - jpc
    // Now that the $download object has been instantiated, handle the Formulize part of the submission...

	    $category_handler = xoops_getmodulehandler('category');
	    $category = $category_handler->get($cid);
	    $fid = $category->getVar('formulize_fid');
		if($fid) {
		    global $xoopsUser;
       	    include_once XOOPS_ROOT_PATH . "/modules/formulize/include/formread.php";
       	    include_once XOOPS_ROOT_PATH . "/modules/formulize/include/functions.php";

       	    $formulize_mgr =& xoops_getmodulehandler('elements', 'formulize');

       	    if ($lid) {
       		    $entries[$fid][0] = $download->getVar('formulize_idreq');
       		    $owner = getEntryOwner($entries[$fid][0]);
       		    $cid = $download->getVar('cid');
       	    }	else {
       		    $entries[$fid][0] = "";
       		    $owner = "";
        	    }
		    $member_handler =& xoops_gethandler('member');
		    $owner_groups =& $member_handler->getGroupsByUser($owner, FALSE);
       	    $uid = !empty($xoopsUser) ? $xoopsUser->getVar('uid') : 0;
       	    $groups = $xoopsUser ? $xoopsUser->getGroups() : XOOPS_GROUP_ANONYMOUS;

       	    $entries = handleSubmission($formulize_mgr, $entries, $uid, $owner, $fid, $owner_groups, $groups, "new"); // "new" causes xoops token check to be skipped, since WF-downloads should be doing that

       	    if (!$lid)
       	    {
       	        $id_req = $entries[$fid][0]; 
       	        $download->setVar('formulize_idreq', $id_req);
       	    }
		}
    // added - end - March 4 2006 - jpc

    if (!empty($_POST["homepage"]) || $_POST["homepage"] != "http://")
    {
        $download->setVar('homepage', formatURL(trim($_POST["homepage"])));
        $download->setVar('homepagetitle', trim($_POST["homepagetitle"]));
    }
    $download->setVar('title', $title);
    $download->setVar('url', $url);
    $download->setVar('cid', $cid);
    $download->setVar('filename', $filename);
    $download->setVar('filetype', $filetype);
    
    /* Added by Lankford on 2007/3/21 */
    // Here, I want to know if:
    //    a) Are they actually changing the value of version, or is it the same?
    //    b) Are they actually modifying the record, or is this a new one?
    //  If both conditions are true, then trigger all three notifications related to modified records.
    $version = (!empty($_POST["version"])) ? trim($_POST["version"]) : 0;

    if (!$thisIsANewRecord and ($download->getVar('version') != $version)) {
    	// Trigger the three events related to modified files (one for the file, category, and global event categories respectively)
        $notification_handler = &xoops_gethandler('notification');
        $tags = array();
        $tags['FILE_NAME'] = $title;
        $tags['FILE_URL'] = WFDOWNLOADS_URL.'singlefile.php?cid=' . $cid . '&amp;lid=' . $lid;
        $category_handler = xoops_getmodulehandler('category');
        $category = $category_handler->get($cid);
		$tags['FILE_VERSION'] = $version;
        $tags['CATEGORY_NAME'] = $category->getVar('title');
        $tags['CATEGORY_URL'] = WFDOWNLOADS_URL.'viewcat.php?cid=' . $cid;

        if ($xoopsModuleConfig['autoapprove'] == 2 || $xoopsModuleConfig['autoapprove'] == 4)
        { // Then this change will be automatically approved, so the notification needs to go out.
            $notification_handler->triggerEvent('global', 0, 'filemodified', $tags);
            $notification_handler->triggerEvent('category', $cid, 'filemodified', $tags);
            $notification_handler->triggerEvent('file', $lid, 'filemodified', $tags);
        }
    }
    /* End add block */
    
    $download->setVar('version', $_POST["version"]);
    $download->setVar('size', $size);
    $download->setVar('platform', $_POST["platform"]);
	$download->setVar('screenshot', $screenshot);
	$download->setVar('screenshot2', $screenshot2);
	$download->setVar('screenshot3', $screenshot3);
	$download->setVar('screenshot4', $screenshot4);
    $download->setVar('summary', $_POST["summary"]);
    $download->setVar('description', $_POST["description"]);
    $submitter = !empty($xoopsUser) ? $xoopsUser->getVar('uid') : 0;
    $download->setVar('submitter', $submitter);
    $download->setVar('publisher', trim($_POST["publisher"]));
    $download->setVar('price', trim($_POST["price"]));
    $download->setVar('mirror', isset($_POST["mirror"]) ? formatURL(trim($_POST["mirror"])) : '');
    $download->setVar('license', trim($_POST["license"]));
    $paypalemail = '';
    $download->setVar('features', trim($_POST["features"]));
    $download->setVar('requirements', trim($_POST["requirements"]));
    $forumid = (isset($_POST["forumid"]) && $_POST["forumid"] > 0) ? intval($_POST["forumid"]) : 0;
    $download->setVar('forumid', $forumid);
    $limitations = (isset($_POST["limitations"])) ? $myts->addslashes($_POST["limitations"]) : '';
    $download->setVar('limitations', $limitations);
    $versiontypes = (isset($_POST["versiontypes"])) ? $myts->addslashes($_POST["versiontypes"]) : '';
    $download->setVar('versiontypes', $versiontypes);
    $dhistory = (isset($_POST["dhistory"])) ? $myts->addslashes($_POST["dhistory"]) : '';
    $dhistoryhistory = (isset($_POST["dhistoryaddedd"])) ? $myts->addslashes($_POST["dhistoryaddedd"]) : '';
    if ($lid > 0 && !empty($dhistoryhistory))
    {
        $dhistory = $dhistory . "\n\n";
        $time = time();
        $dhistory .= "<b>" . formatTimestamp($time, $xoopsModuleConfig['dateformat']) . "</b>\n\n";
        $dhistory .= $dhistoryhistory;
    }
    $download->setVar('dhistory', $dhistory);
    $offline = (isset($_POST['offline']) && $_POST['offline'] == 1) ? 1 : 0;
    $download->setVar('offline', $offline);
    $download->setVar('date', time());

    $screenshot = '';
    $screenshot2 = '';
    $screenshot3 = '';
    $screenshot4 = '';

    if ($lid == 0)
    {
        $notifypub = (isset($_POST['notifypub']) && $_POST['notifypub'] == 1) ? 1 : 0;
        $download->setVar('notifypub', $notifypub);
        $download->setVar('ipaddress', $_SERVER['REMOTE_ADDR']);

        if (!$download_handler->insert($download))
        {
            $error = _MD_WFD_INFONOSAVEDB;
            trigger_error($error, E_USER_ERROR);
        }
        $newid = $download->getVar('lid');
        $groups = array(1, 2);
        /*
        *  Notify of new link (anywhere) and new link in category
        */
        $notification_handler = &xoops_gethandler('notification');
        $tags = array();
        $tags['FILE_NAME'] = $title;
        $tags['FILE_URL'] = WFDOWNLOADS_URL.'singlefile.php?cid=' . $cid . '&amp;lid=' . $newid;
        $category_handler = xoops_getmodulehandler('category');
        $category = $category_handler->get($cid);

        $tags['CATEGORY_NAME'] = $category->getVar('title');
        $tags['CATEGORY_URL'] = WFDOWNLOADS_URL.'viewcat.php?cid=' . $cid;

        if ($xoopsModuleConfig['autoapprove'] == 2 || $xoopsModuleConfig['autoapprove'] == 4)
        {
            $notification_handler->triggerEvent('global', 0, 'new_file', $tags);
            $notification_handler->triggerEvent('category', $cid, 'new_file', $tags);
            redirect_header('index.php', 2, _MD_WFD_ISAPPROVED . "");
        }
        else
        {
            $tags['WAITINGFILES_URL'] = WFDOWNLOADS_URL.'admin/newdownloads.php';
            $notification_handler->triggerEvent('global', 0, 'file_submit', $tags);
            $notification_handler->triggerEvent('category', $cid, 'file_submit', $tags);
            if ($notify)
            {
                include_once XOOPS_ROOT_PATH . '/include/notification_constants.php';
                $notification_handler->subscribe('file', $newid, 'approve', XOOPS_NOTIFICATION_MODE_SENDONCETHENDELETE);
            }
            redirect_header(WFDOWNLOADS_URL.'index.php', 2, _MD_WFD_THANKSFORINFO);
        }
        exit();
    }
    else
    {
        if ($xoopsModuleConfig['autoapprove'] == 2 || $xoopsModuleConfig['autoapprove'] == 4)
        {
            $notifypub = (isset($_POST['notifypub']) && $_POST['notifypub'] == 1) ? 1 : 0;
            $download->setVar('notifypub', $notifypub);
            $download->setVar('ipaddress', $_SERVER['REMOTE_ADDR']);

            $updated = time();
            $download->setVar('updated', $updated);
            $download_handler->insert($download);

            $notification_handler = &xoops_gethandler('notification');
            $tags = array();
            $tags['FILE_NAME'] = $title;
            $tags['FILE_URL'] = WFDOWNLOADS_URL.'singlefile.php?cid=' . $cid . '&amp;lid=' . $lid;

            $category_handler = xoops_getmodulehandler('category');
            $category = $category_handler->get($cid);
            $tags['CATEGORY_NAME'] = $category->getVar('title');
            $tags['CATEGORY_URL'] = WFDOWNLOADS_URL.'viewcat.php?cid=' . $cid;
        }
        else
        {
            $updated = (isset($_POST['up_dated']) && $_POST['up_dated'] == 0) ? 0 : time();
            $download->setVar('updated', $updated);
            $download->setVar('modifysubmitter', $xoopsUser->uid());
            $download->setVar('requestdate', time());
            if (!$modification_handler->insert($download))
            {
				$error = _MD_WFD_INFONOSAVEDB;
                trigger_error($error, E_USER_ERROR);
            }
            $tags = array();
            $tags['MODIFYREPORTS_URL'] = WFDOWNLOADS_URL.'admin/index.php?op=listModReq';
            $notification_handler = &xoops_gethandler('notification');
            $notification_handler->triggerEvent('global', 0, 'file_modify', $tags);
        }
        redirect_header(WFDOWNLOADS_URL.'index.php', 2, _MD_WFD_THANKSFORINFO);
        exit();
    }
}
else
{
    global $_FILES, $xoopsModuleConfig, $xoopsConfig;

    if ($xoopsModuleConfig['showdisclaimer'] && !isset($_GET['agree']))
    {
		$xoopsOption['template_main'] = 'wfdownloads_disclaimer.html';
	    include XOOPS_ROOT_PATH . '/header.php';
		
		$xoTheme->addStylesheet(WFDOWNLOADS_URL.'module.css');
		$xoTheme->addStylesheet(WFDOWNLOADS_URL.'thickbox.css');
		$xoopsTpl->assign('wfdownloads_url', WFDOWNLOADS_URL);

		$xoopsTpl->assign('image_header', wfd_imageheader());
		$xoopsTpl->assign('disclaimer', $myts->displayTarea($xoopsModuleConfig['disclaimer'], 1, 1, 1, 1, 1));
		$xoopsTpl->assign('cancel_location', WFDOWNLOADS_URL.'index.php');
		$xoopsTpl->assign('down_disclaimer', false);
		if (!isset($_REQUEST['lid'])) {
			$xoopsTpl->assign('agree_location', WFDOWNLOADS_URL.'submit.php?agree=1');
		}
		elseif (isset($_REQUEST['lid'])) {
			$lid = intval($_REQUEST['lid']);
			$xoopsTpl->assign('agree_location', WFDOWNLOADS_URL.'submit.php?agree=1&amp;lid='.$lid);
		}

        include XOOPS_ROOT_PATH . '/footer.php';
        exit();
	}

    include XOOPS_ROOT_PATH . '/header.php';

    // changed - start - March 4 2006 - jpc, jwe April 22, 2006

    $category_handler = xoops_getmodulehandler('category');
    $download_handler = xoops_getmodulehandler('download');
    if (isset($_REQUEST['lid']) && is_object($xoopsUser))
    {
        $user_id = $xoopsUser->uid();
		$lid = intval($_REQUEST['lid']);
		$download = $download_handler->get($lid);
		if ($user_id !== $download->getVar('submitter')) {
			redirect_header("index.php",5, _MD_WFD_NOTALLOWEDTOMOD);
	        exit();
		}
	  $cid = $download->getVar('cid');
	  
    }
    else
    {
        $lid = 0;
        $download = $download_handler->create();
	  $cid = (!empty($_POST['cid'])) ? intval($_POST['cid']) : 0 ;
	  $download->setVar('cid', $cid);
    }

    echo "
		<p><div align = 'center'>" . wfd_imageheader() . "</div></p>\n
		<div>" . _MD_WFD_SUB_SNEWMNAMEDESC . "</div>\n";



	if (isset($_POST['submit_category']) && !empty($_POST['submit_category']))
    {
		  $category = $category_handler->get($cid);
	        $fid = $category->getVar('formulize_fid');
		  $customArray = array();
	        if($fid)
	        {
			global $xoopsUser;
			include_once XOOPS_ROOT_PATH . "/modules/formulize/include/formdisplay.php";
			include_once XOOPS_ROOT_PATH . "/modules/formulize/include/functions.php";
			
			$customArray['fid'] = $fid;
			$customArray['formulize_mgr'] =& xoops_getmodulehandler('elements', 'formulize');
			$customArray['groups'] = $xoopsUser ? $xoopsUser->getGroups() : XOOPS_GROUP_ANONYMOUS;			
			$customArray['prevEntry'] = getEntryValues($download->getVar('formulize_idreq'), $customArray['formulize_mgr'], $customArray['groups'], $fid);
			$customArray['entry'] = $download->getVar('formulize_idreq');
			$customArray['go_back'] = "";
			$customArray['parentLinks'] = "";

			$owner = getEntryOwner($entry); 
			$member_handler =& xoops_gethandler('member');
			$owner_groups =& $member_handler->getGroupsByUser($owner, FALSE);			

			$customArray['owner_groups'] = $owner_groups;
	        }
		$sform = $download->getForm($customArray);
	}
	elseif(file_exists(XOOPS_ROOT_PATH . "/modules/formulize/include/functions.php")) 
	{
	      $sform = $download->getCategoryForm();
	} 
	else 
	{
		$sform = $download->getForm($title);
	}
	$sform->display();

    // changed - end - March 4 2006 - jpc


    include XOOPS_ROOT_PATH . '/footer.php';
}

?>