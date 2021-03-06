<?php
/**
 * $Id: index.php,v 1.23 2007/09/30 12:39:13 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */

include 'admin_header.php';
include_once XOOPS_ROOT_PATH . '/class/xoopsformloader.php';
include_once XOOPS_ROOT_PATH . '/class/xoopsform/grouppermform.php';
include_once WFDOWNLOADS_ROOT_PATH.'class/wfd_lists.php';
include_once XOOPS_ROOT_PATH.'/class/tree.php';
include_once XOOPS_ROOT_PATH.'/class/xoopstree.php';

$mytree = new XoopsTree($xoopsDB -> prefix('wfdownloads_cat'), "cid", "pid");

function Download()
{

    $lid = isset($_REQUEST['lid']) ? intval($_REQUEST['lid']) : 0;

    $category_handler = xoops_getmodulehandler('category');
    $numrows = $category_handler->getCount();
    if ($numrows)
    {
        wfdownloads_xoops_cp_header();

        wfdownloads_adminMenu(3, _AM_WFD_MDOWNLOADS);

        echo "<fieldset><legend style='font-weight: bold; color: #900;'>" . _AM_WFD_FILE_ALLOWEDAMIME . "</legend>\n
		<div style='padding: 8px;'>\n";

        $mime_handler = xoops_getmodulehandler('mimetype');
        $criteria = new Criteria("mime_admin", 1);
        $mimetypes = $mime_handler->getList($criteria);
        $allowmimetypes = implode(' | ', $mimetypes);
        echo $allowmimetypes;
        echo "</div>\n
		</fieldset><br />\n
		";

        $download_handler = xoops_getmodulehandler('download');
        if ($lid)
        {
            $download = $download_handler->get($lid);
			$title = _AM_WFD_FILE_MODIFYFILE;
		// added - start - March 4 2006 - jpc
		$cid = intval($download->getVar('cid'));
		$category = $category_handler->get($cid);
		// added - end - March 4 2006 - jpc

		// changed - start - April 22 2006 - jwe
            //$title = _AM_WFD_FILE_MODIFYFILE;
		$title = ereg_replace("{category}", $category->getVar('title'), _AM_WFD_FFS_EDITDOWNLOADTITLE);
		// changed - end - April 22 2006 - jwe

        }
        else
        {
            $download = $download_handler->create();
			$title = _AM_WFD_FILE_CREATENEWFILE;
		// added - start - March 4 2006 - jpc
		$cid = (!empty($_POST['cid'])) ? intval($_POST['cid']) : 0 ;
		$download->setVar('cid', $cid);
		$category = $category_handler->get($cid);
		// added - end - March 4 2006 - jpc

		// changed - start - April 22 2006 - jwe
		//$title = _AM_WFD_FILE_CREATENEWFILE;
		$title = ereg_replace("{category}", $category->getVar('title'), _AM_WFD_FFS_DOWNLOADTITLE);
		// changed - end - April 22 2006 - jwe

        }

	    // changed - start - March 4 2006 - jpc
	    if ((isset($_POST['submit_category']) && !empty($_POST['submit_category'])) || $lid)
	    {
	        
	        $fid = $category->getVar('formulize_fid');
		  $customArray = array();
	        if($fid)
	        {
			global $xoopsUser;
			include_once XOOPS_ROOT_PATH . "/modules/formulize/include/formdisplay.php";
			include_once XOOPS_ROOT_PATH . "/modules/formulize/include/functions.php";
			
			$customArray['fid'] = $fid;
			$customArray['formulize_mgr'] =& xoops_getmodulehandler('elements', 'formulize');
			$customArray['groups'] = $xoopsUser ? $xoopsUser->getGroups() : array(0=>XOOPS_GROUP_ANONYMOUS);			
			$customArray['prevEntry'] = getEntryValues($download->getVar('formulize_idreq'), $customArray['formulize_mgr'], $customArray['groups'], $fid);
			$customArray['entry'] = $download->getVar('formulize_idreq');
			$customArray['go_back'] = "";
			$customArray['parentLinks'] = "";

			$owner = getEntryOwner($entry); 
			$member_handler =& xoops_gethandler('member');
			$owner_groups =& $member_handler->getGroupsByUser($owner, FALSE);			

			$customArray['owner_groups'] = $owner_groups;
	        }
		$sform = $download->getAdminForm($title, $customArray);
	    }
	    elseif(file_exists(XOOPS_ROOT_PATH . "/modules/formulize/include/functions.php")) 
	    {
	        $sform = $download->getCategoryForm();
	    } 
	    else 
	    {
		  $sform = $download->getAdminForm($title);
  	    }
	    $sform->display();
	    // changed - end - March 4 2006 - jpc
    }
    else
    {
        redirect_header(WFDOWNLOADS_URL.'admin/category.php?', 1, _AM_WFD_CCATEGORY_NOEXISTS);
        exit();
    }

    if ($lid)
    {
        global $imagearray;
        // Vote data
        $rating_handler = xoops_getmodulehandler('rating');
        $totalvotes = $rating_handler->getCount();

        $reg_criteria = new CriteriaCompo(new Criteria('lid', $lid));
        $reg_criteria->add(new Criteria("ratinguser", 0, ">"));
        $votesreg = $rating_handler->getCount($reg_criteria);
        $reg_criteria->setSort("ratingtimestamp");
        $reg_criteria->setOrder("DESC");
        $regvotes = $rating_handler->getObjects($reg_criteria);

        $anon_criteria = new CriteriaCompo(new Criteria('lid', $lid));
        $anon_criteria->add(new Criteria("ratinguser", 0, ">"));
        $votesanon = $rating_handler->getCount($anon_criteria);
        $anon_criteria->setSort("ratingtimestamp");
        $anon_criteria->setOrder("DESC");

        echo "
		<fieldset><legend style='font-weight: bold; color: #900;'>" . _AM_WFD_VOTE_RATINGINFOMATION . "</legend>\n
		<div style='padding: 8px;'><b>" . _AM_WFD_VOTE_TOTALVOTES . "</b>" . $totalvotes . "<br /><br />\n
		";

        printf(_AM_WFD_VOTE_REGUSERVOTES, $votesreg);

        echo "<br />";

        printf(_AM_WFD_VOTE_ANONUSERVOTES, $votesanon);

        echo "
		</div>\n
		<table width='100%' cellspacing='1' cellpadding='2' class='outer'>\n
		<tr>\n
		<th align='center'>" . _AM_WFD_VOTE_USER . "</td>\n
		<th align='center'>" . _AM_WFD_VOTE_IP . "</td>\n
		<th align='center'>" . _AM_WFD_VOTE_RATING . "</td>\n
		<th align='center'>" . _AM_WFD_VOTE_USERAVG . "</td>\n
		<th align='center'>" . _AM_WFD_VOTE_TOTALRATE . "</td>\n
		<th align='center'>" . _AM_WFD_VOTE_DATE . "</td>\n
		<th align='center'>" . _AM_WFD_MINDEX_ACTION . "</td>\n
		</tr>\n
		";

        if ($votesreg == 0)
        {
            echo "<tr><td align='center' colspan='7' class='even'><b>" . _AM_WFD_VOTE_NOREGVOTES . "</b></td></tr>";
        }
        else {
            foreach (array_keys($regvotes) as $i) {
                $uids[] = $regvotes[$i]->getVar('ratinguser');
            }

            $criteria = new Criteria("uid", "(".implode(',', $uids).")", "IN");
            $criteria->setGroupby("uid");
            $userratings = $rating_handler->getUserAverage($criteria);


            foreach (array_keys($regvotes) as $i) {
                $formatted_date = formatTimestamp($regvotes[$i]->getVar('ratingtimestamp'), $xoopsModuleConfig['dateformat']);
                $useravgrating = isset($userratings[$regvotes[$i]->getVar('ratinguser')]) ? $userratings[$regvotes[$i]->getVar('ratinguser')]["avg"] : 0;
                $uservotes = isset($userratings[$regvotes[$i]->getVar('ratinguser')]) ? $userratings[$regvotes[$i]->getVar('ratinguser')]["count"] : 0;
                $ratinguname = XoopsUser :: getUnameFromId($regvotes[$i]->getVar('ratinguser'));

                echo "
            		<tr><td align='center' class='head'>$ratinguname</td>\n
            		<td align='center' class='even'>".$regvotes[$i]->getVar('ratinghostname')."</th>\n
            		<td align='center' class='even'>".$regvotes[$i]->getVar('rating')."</th>\n
            		<td align='center' class='even'>$useravgrating</th>\n
            		<td align='center' class='even'>$uservotes</th>\n
            		<td align='center' class='even'>$formatted_date</th>\n
            		<td align='center' class='even'>\n
            		<a href='".WFDOWNLOADS_URL."admin/index.php?op=delVote&amp;lid=" . $lid . "&amp;rid=" . $regvotes[$i]->getVar('ratingid') . "'>" . $imagearray['deleteimg'] . "</a>\n
            		</th></tr>\n
            		";
            }
        }
        echo "
		</table>\n
		<br />\n
		<table width='100%' cellspacing='1' cellpadding='2' class='outer'>\n
		<tr>\n
		<th align='center'>" . _AM_WFD_VOTE_USER . "</td>\n
		<th align='center'>" . _AM_WFD_VOTE_IP . "</td>\n
		<th align='center'>" . _AM_WFD_VOTE_RATING . "</td>\n
		<th align='center'>" . _AM_WFD_VOTE_USERAVG . "</td>\n
		<th align='center'>" . _AM_WFD_VOTE_TOTALRATE . "</td>\n
		<th align='center'>" . _AM_WFD_VOTE_DATE . "</td>\n
		<th align='center'>" . _AM_WFD_MINDEX_ACTION . "</td>\n
		</tr>\n
		";
        if ($votesanon == 0)
        {
            echo "<tr><td colspan='7' align='center' class='even'><b>" . _AM_WFD_VOTE_NOUNREGVOTES . "</b></td></tr>";
        }
        else {
            $criteria = new Criteria("uid", 0);
            $userratings = $rating_handler->getUserAverage($criteria);


            foreach (array_keys($regvotes) as $i) {
                $formatted_date = formatTimestamp($regvotes[$i]->getVar('ratingtimestamp'), $xoopsModuleConfig['dateformat']);
                $useravgrating = isset($userratings['avg']) ? $userratings["avg"] : 0;
                $uservotes = isset($userratings['count']) ? $userratings["count"] : 0;

                $ratinguname = $GLOBALS['xoopsConfig']['anonymous'];

                echo "
            		<tr><td align='center' class='head'>$ratinguname</td>\n
            		<td align='center' class='even'>".$regvotes[$i]->getVar('ratinghostname')."</th>\n
            		<td align='center' class='even'>".$regvotes[$i]->getVar('rating')."</th>\n
            		<td align='center' class='even'>$useravgrating</th>\n
            		<td align='center' class='even'>$uservotes</th>\n
            		<td align='center' class='even'>$formatted_date</th>\n
            		<td align='center' class='even'>\n
            		<a href='".WFDOWNLOADS_URL."admin/index.php?op=delVote&amp;lid=" . $lid . "&amp;rid=" . $regvotes[$i]->getVar('ratingid') . "'>" . $imagearray['deleteimg'] . "</a>\n
            		</th></tr>\n
            		";
            }
        }
        echo "
		</table>\n
		</fieldset>\n
		";
    }
    xoops_cp_footer();
}

function delVote()
{
    global $_GET;
    $rating_handler = xoops_getmodulehandler('rating');
    $rating = $rating_handler->get($_GET['rid']);
    if ($rating_handler->delete($rating, true)) {
        wfd_updaterating(intval($rating->getVar('lid')));
    }
    redirect_header(WFDOWNLOADS_URL.'admin/index.php', 1, _AM_WFD_VOTE_VOTEDELETED);
}

function addDownload()
{
    global $xoopsUser, $xoopsModuleConfig;

    $lid = (!empty($_POST['lid'])) ? intval($_POST['lid']) : 0;
    $cid = (!empty($_POST['cid'])) ? intval($_POST['cid']) : 0;
    $status = (!empty($_POST['status'])) ? intval($_POST['status']) : 2;

    $download_handler = xoops_getmodulehandler('download');
    if ($lid > 0) {
    	$thisIsANewRecord = false; /* Added by Lankford on 2007/3/21 */
    	
        $download = $download_handler->get($lid);
    }
    else {
    	$thisIsANewRecord = true; /* Added by Lankford on 2007/3/21 */
    	
        $download = $download_handler->create();
    }

    /**
     * Define URL
     */
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
        $download->setVar('filename', $filename);
        $download->setVar('filetype', $filetype);
    }
    else
    {
        global $_FILES;

        $down = wfd_uploading($_FILES, $xoopsModuleConfig['uploaddir'], "", "index.php", 0, 0);
        $url = ($_POST["url"] != "http://") ? $_POST["url"] : '';
        $size = $down['size'];
        $title = $_FILES['userfile']['name'];
        $ext = rtrim(strrchr($title, '.'), '.');
        $title = str_replace($ext, '', $title);
        $title = (isset($_POST["title_checkbox"]) && $_POST["title_checkbox"] == 1) ? $title : trim($_POST["title"]);

		$filename = $down['filename'];
		$filetype = $_FILES['userfile']['type'];
        $download->setVar('filename', $filename);
        $download->setVar('filetype', $filetype);
    }

    /**
     * Get data from form
     */
    $screenshot = ($_POST["screenshot"] != "blank.png") ? $_POST["screenshot"] : '';
    $screenshot2 = ($_POST["screenshot2"] != "blank.png") ? $_POST["screenshot2"] : '';
    $screenshot3 = ($_POST["screenshot3"] != "blank.png") ? $_POST["screenshot3"] : '';
    $screenshot4 = ($_POST["screenshot4"] != "blank.png") ? $_POST["screenshot4"] : '';

    if (!empty($_POST["homepage"]) || $_POST["homepage"] != "http://")
    {
        $download->setVar('homepage', trim($_POST["homepage"]));
        $download->setVar('homepagetitle', trim($_POST["homepagetitle"]));
    }

    $version = (!empty($_POST["version"])) ? trim($_POST["version"]) : 0;

    /* Added by Lankford on 2007/3/21 */
    // Here, I want to know if:
    //    a) Are they actually changing the value of version, or is it the same?
    //    b) Are they actually modifying the record, or is this a new one?
    //  If both conditions are true, then trigger all three notifications related to modified records.
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
   
    $download->setVar('version', $version);
    $download->setVar('url', $url);
    $download->setVar('cid', $cid);
    $download->setVar('title', $title);
    $download->setVar('status', $status);
    $download->setVar('size', $size);
    $download->setVar('screenshot', $screenshot);
    $download->setVar('screenshot2', $screenshot2);
    $download->setVar('screenshot3', $screenshot3);
    $download->setVar('screenshot4', $screenshot4);
    $download->setVar('platform', trim($_POST["platform"]));
    $download->setVar('summary', trim($_POST["summary"]));
    $download->setVar('description', trim($_POST["description"]));
    $download->setVar('submitter', trim($_POST["submitter"]));
    $download->setVar('publisher', trim($_POST["publisher"]));
    $download->setVar('price', trim($_POST["price"]));
	if (!$xoopsModuleConfig['enable_mirrors']) {
	    $download->setVar('mirror', formatURL(trim($_POST["mirror"])));
	}
    $download->setVar('license', trim($_POST["license"]));
    $download->setVar('features', trim($_POST["features"]));
    $download->setVar('requirements', trim($_POST["requirements"]));
    $limitations = (isset($_POST["limitations"])) ? $_POST["limitations"] : '';
    $download->setVar('limitations', $limitations);
    $versiontypes = (isset($_POST["versiontypes"])) ? $_POST["versiontypes"] : '';
    $download->setVar('versiontypes', $versiontypes);

    $dhistory = (isset($_POST["dhistory"])) ? $_POST["dhistory"] : '';
    $dhistoryhistory = (isset($_POST["dhistoryaddedd"])) ? $_POST["dhistoryaddedd"] : '';

    if ($lid > 0 && !empty($dhistoryhistory))
    {
        $dhistory = $dhistory . "\n\n";
        $time = time();
        $dhistory .= _AM_WFD_FILE_HISTORYVERS . $version . _AM_WFD_FILE_HISTORDATE . formatTimestamp($time, $xoopsModuleConfig['dateformat']) . "\n\n";
        $dhistory .= $dhistoryhistory;
    }
    $download->setVar('dhistory', $dhistory);
    $download->setVar('dhistoryhistory', $dhistoryhistory);

    $updated = (isset($_POST['was_published']) && $_POST['was_published'] == 0) ? 0 : time();

    if ($_POST['up_dated'] == 0) {
        $updated = 0;
    }
    $download->setVar('updated', $updated);

    $offline = ($_POST['offline'] == 1) ? 1 : 0;
    $download->setVar('offline', $offline);
    $approved = (isset($_POST['approved']) && $_POST['approved'] == 1) ? 1 : 0;
    $notifypub = (isset($_POST['notifypub']) && $_POST['notifypub'] == 1);

    $expiredate = 0;
    if (!$lid)
    {
        $publishdate = time();
    }
    else
    {
        $publishdate = $_POST['was_published'];
        $expiredate = $_POST['was_expired'];
    }

    if ($approved == 1 && empty($publishdate))
    {
        $publishdate = time();
    }

    if (isset($_POST['publishdateactivate']))
    {
        $publishdate = strtotime($_POST['published']['date']) + $_POST['published']['time'];
    }
    if ($_POST['clearpublish'])
    {
        $publishdate = $download->getVar('published');
    }

    if (isset($_POST['expiredateactivate']))
    {
        $expiredate = strtotime($_POST['expired']['date']) + $_POST['expired']['time'];
    }
    if ($_POST['clearexpire'])
    {
        $expiredate = '0';
    }

    $download->setVar('expired', $expiredate);
    $download->setVar('published', $publishdate);
	$download->setVar('date', time());
    /**
     * Update or insert download data into database
     */
    if (!$lid)
    {
        $download->setVar('ipaddress', $_SERVER['REMOTE_ADDR']);
    }


    // added - start - March 4 2006 - jpc
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
  if($entries[$fid][0]) {
    $owner = getEntryOwner($entries[$fid][0]);
  } else {
    print "no idreq";
    $entries[$fid][0] = "";
    $owner = "";
  }
       		    $cid = $download->getVar('cid');
       	    }	else {
       		    $entries[$fid][0] = "";
       		    $owner = "";
        	    }
		    $member_handler =& xoops_gethandler('member');
		    $owner_groups =& $member_handler->getGroupsByUser($owner, FALSE);
       	    $uid = !empty($xoopsUser) ? $xoopsUser->getVar('uid') : 0;
       	    $groups = $xoopsUser ? $xoopsUser->getGroups() : array(0=>XOOPS_GROUP_ANONYMOUS);
       	    $entries = handleSubmission($formulize_mgr, $entries, $uid, $owner, $fid, $owner_groups, $groups, "new"); // "new" causes xoops token check to be skipped, since WF-downloads should be doing that

       	    //if (!$lid)
            if(!$owner)
       	    {
       	        $id_req = $entries[$fid][0]; 
       	        $download->setVar('formulize_idreq', $id_req);
       	    }
		}
    // added - end - March 4 2006 - jpc


    $download_handler->insert($download);
    $newid = intval($download->getVar('lid'));
    /**
     * Send notifications
     */
    if (!$lid)
    {
        $tags = array();
        $tags['FILE_NAME'] = $title;
        $tags['FILE_URL'] = WFDOWNLOADS_URL.'singlefile.php?cid=' . $cid . '&amp;lid=' . $newid;

	    // changed - start - March 4 2006 - jpc
        //$category_handler = xoops_getmodulehandler('category');
        //$category = $category_handler->get($cid);
	    // changed - end - March 4 2006 - jpc
        $tags['CATEGORY_NAME'] = $category->getVar('title');
        $tags['CATEGORY_URL'] = WFDOWNLOADS_URL.'viewcat.php?cid=' . $cid;
        $notification_handler = & xoops_gethandler('notification');
        $notification_handler -> triggerEvent('global', 0, 'new_file', $tags);
        $notification_handler -> triggerEvent('category', $cid, 'new_file', $tags);
    }
    if ($lid && $approved && $notifypub)
    {
        $tags = array();
        $tags['FILE_NAME'] = $title;
        $tags['FILE_URL'] = WFDOWNLOADS_URL.'singlefile.php?cid=' . $cid . '&amp;lid=' . $lid;
        $category_handler = xoops_getmodulehandler('category');
        $category = $category_handler->get($cid);
        $tags['CATEGORY_NAME'] = $category->getVar('title');
        $tags['CATEGORY_URL'] = WFDOWNLOADS_URL.'viewcat.php?cid=' . $cid;
        $notification_handler = & xoops_gethandler('notification');
        $notification_handler -> triggerEvent('global', 0, 'new_file', $tags);
        $notification_handler -> triggerEvent('category', $cid, 'new_file', $tags);
        $notification_handler -> triggerEvent('file', $lid, 'approve', $tags);
    }
    $message = (!$lid) ? _AM_WFD_FILE_NEWFILEUPLOAD : _AM_WFD_FILE_FILEMODIFIEDUPDATE ;
    $message = ($lid && !$_POST['was_published'] && $approved) ? _AM_WFD_FILE_FILEAPPROVED : $message;

    redirect_header(WFDOWNLOADS_URL.'admin/index.php', 1, $message);
}
// Page start here

$op = isset($_REQUEST['op']) ? $_REQUEST['op'] : 'main';

switch ($op)
{
    case "addDownload":
    addDownload();
    break;

    case "Download":
    Download();
    break;

    case "delDownload":

    global $xoopsModule, $xoopsModuleConfig;
    $confirm = (isset($_REQUEST['confirm'])) ? 1 : 0;
    $lid = (isset($_GET['lid'])) ? intval($_GET['lid']) : 0;
    $lid = (isset($_POST['lid'])) ? intval($_POST['lid']) : $lid;
    $download_handler = xoops_getmodulehandler('download');
    $download = $download_handler->get($lid);
    $title = $download->getVar('title');
    if ($confirm)
    {
        $file = $xoopsModuleConfig['uploaddir'] . "/" . $download->getVar('filename');
        if (is_file($file))
        {
            @chmod($file, 0777);
			@unlink($file);
        }
        $download_handler->delete($download);
        redirect_header(WFDOWNLOADS_URL.'admin/index.php', 1, sprintf(_AM_WFD_FILE_FILEWASDELETED, $title));
        exit();
    }
    else
    {
        wfdownloads_xoops_cp_header();
        xoops_confirm(array('op' => 'delDownload', 'lid' => $lid, 'confirm' => 1, 'title' => $title), 'index.php', _AM_WFD_FILE_REALLYDELETEDTHIS . "<br /><br>" . $title, _DELETE);
        xoops_cp_footer();
    }
    break;
    case "delVote":
    delVote();
    break;

	// added - start - March 4 2006 - jpc
    case "patch_formulize":
	patch_formulize();
	break;
	// added - end - March 4 2006 - jpc
    case 'main':
    default:

    global $xoopsUser, $xoopsDB, $xoopsConfig;
    include_once XOOPS_ROOT_PATH . '/class/pagenav.php';
    $start = isset($_GET['start']) ? intval($_GET['start']) : 0;
    $start1 = isset($_GET['start1']) ? intval($_GET['start1']) : 0;
    $start2 = isset($_GET['start2']) ? intval($_GET['start2']) : 0;
    $start3 = isset($_GET['start3']) ? intval($_GET['start3']) : 0;
    $start4 = isset($_GET['start4']) ? intval($_GET['start4']) : 0;
    $totalcats = wfd_totalcategory();

    $report_handler = xoops_getmodulehandler('report');
    $review_handler = xoops_getmodulehandler('review');
    $mirror_handler = xoops_getmodulehandler('mirror');
    $modification_handler = xoops_getmodulehandler('modification');
    $download_handler = xoops_getmodulehandler('download');

    $totalbrokendownloads = $report_handler->getCount();
    $totalmodrequests = $modification_handler->getCount();
    $newreviews = $review_handler->getCount();
    $newmirrors = $mirror_handler->getCount();
    $totalnewdownloads = $download_handler->getCount(new Criteria("published", 0));
    $totaldownloads = $download_handler->getCount(new Criteria("published", 0, ">"));

    wfdownloads_xoops_cp_header();
    wfdownloads_adminMenu(0, _AM_WFD_BINDEX);

    echo "
		<fieldset><legend style='font-weight: bold; color: #900;'>" . _AM_WFD_MINDEX_DOWNSUMMARY . "</legend>\n
		<div style='padding: 8px;'><small>\n
		<a href='category.php'>" . _AM_WFD_SCATEGORY . "</a><b>" . $totalcats . "</b> | \n
		<a href='index.php'>" . _AM_WFD_SFILES . "</a><b>" . $totaldownloads . "</b> | \n
		<a href='newdownloads.php'>" . _AM_WFD_SNEWFILESVAL . "</a><b>" . $totalnewdownloads . "</b> | \n
		<a href='modifications.php'>" . _AM_WFD_SMODREQUEST . "</a><b>" . $totalmodrequests . "</b> | \n
		<a href='brokendown.php'>" . _AM_WFD_SBROKENSUBMIT . "</a><b>" . $totalbrokendownloads . "</b> | \n
		<a href='review.php'>" . _AM_WFD_SREVIEWS . "</a><b>" . $newreviews . "</b> | \n
		<a href='mirror.php'>" . _AM_WFD_SMIRRORS . "</a><b>" . $newmirrors . "</b>\n
		</small></div></fieldset><br />\n
		";
    wfd_serverstats();

    if ($totaldownloads > 0)
    {
        $criteria = new CriteriaCompo();
        $criteria->setLimit($xoopsModuleConfig['admin_perpage']);
        $criteria->setStart($start);
		$criteria->setSort("published");
		$criteria->setOrder("DESC");
        $published_array = $download_handler->getActiveDownloads($criteria);
        $published_array_count = $download_handler->getActiveCount();

        wfd_downlistheader(_AM_WFD_MINDEX_PUBLISHEDDOWN);
        if ($published_array_count > 0)
        {
            foreach (array_keys($published_array) as $i)
            {
                wfd_downlistbody($published_array[$i]->toArray());
            }
        }
        else
        {
            wfd_downlistfooter();
        }
        wfd_downlistpagenav($published_array_count, $start, 'art');
        /**
         * Auto Publish
         */
        $criteria = new Criteria("published", time(), ">");
        $auto_publish_count = $download_handler->getCount($criteria);
        $criteria->setSort("published");
        $criteria->setOrder("ASC");
        $criteria->setLimit($xoopsModuleConfig['admin_perpage']);
        $criteria->setStart($start2);
        $auto_published_array = $download_handler->getObjects($criteria);

        wfd_downlistheader(_AM_WFD_MINDEX_AUTOPUBLISHEDDOWN);
        if ($auto_publish_count > 0)
        {
            foreach (array_keys($auto_published_array) as $i)
            {
                wfd_downlistbody($auto_published_array[$i]->toArray());
            }
        }
        else
        {
            wfd_downlistfooter();
        }
        wfd_downlistpagenav($auto_publish_count, $start2, 'art2');
        /**
         * Expired downloads
         */
        $criteria = new CriteriaCompo();
        $criteria->add(new Criteria("expired", time(), "<"), 'AND');
        $criteria->add(new Criteria("expired", 0, "<>"), 'AND');
        $expired_count = $download_handler->getCount($criteria);
        $criteria->setSort("expired");
        $criteria->setOrder("ASC");
        $criteria->setLimit($xoopsModuleConfig['admin_perpage']);
        $criteria->setStart($start3);
        $expired_array = $download_handler->getObjects($criteria);

        wfd_downlistheader("Expired");
        if ($expired_count > 0)
        {
            foreach (array_keys($expired_array) as $i)
            {
                wfd_downlistbody($expired_array[$i]->toArray());
            }
        }
        else
        {
            wfd_downlistfooter();
        }
        wfd_downlistpagenav($expired_count, $start3, 'art3');
        /**
         * Offline download
         */

        $criteria = new Criteria("offline", 1);
        $offline_count = $download_handler->getCount($criteria);
        $criteria->setSort("published");
        $criteria->setOrder("ASC");
        $criteria->setLimit($xoopsModuleConfig['admin_perpage']);
        $criteria->setStart($start4);
        $offline_array = $download_handler->getObjects($criteria);

        wfd_downlistheader(_AM_WFD_MINDEX_OFFLINEDOWN);
        if ($offline_count > 0)
        {
            foreach (array_keys($offline_array) as $i)
            {
                wfd_downlistbody($offline_array[$i]->toArray());
            }
        }
        else
        {
            wfd_downlistfooter();
        }
        wfd_downlistpagenav($offline_count, $start4, 'art4');
    }
    xoops_cp_footer();
    break;
}



// added - start - March 4 2006 - jpc
function patch_formulize()
{
	if(!isset($_POST['patch_formulize'])) {
		print "<form action=\"index.php?op=patch_formulize\" method=post>";
		print "<input type = submit name=patch_formulize value=\"Apply Patch for Formulize\">";
		print "</form>";
	} else {
	    global $xoopsDB;

	    $sqls[] = "ALTER TABLE " . $xoopsDB->prefix("wfdownloads_cat") . " ADD formulize_fid int(5) NOT NULL default '0';";
	    $sqls[] = "ALTER TABLE " . $xoopsDB->prefix("wfdownloads_downloads") . " ADD formulize_idreq int(5) NOT NULL default '0';";

		foreach($sqls as $sql)
	        if(!$result = $xoopsDB->queryF($sql))
	            exit("Error patching for Formulize.<br>SQL dump:<br>" . $sql . "<br>Please contact <a href=support@freeformsolutions.ca>Freeform Solutions</a> for assistance.");

	    print "Patching for Formulize completed.";
	}      
}
// added - end - March 4 2006 - jpc
?>