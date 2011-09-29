<?php
// ========================================================
// Conversion file for any version before wf-downloads 3
// ========================================================
// This file contains 3 functions to do necessary updates either when
// converting from mydownloads to wf-downloads or upgrading any
// 2.x version of wf-downloads to version 3.
//
// Starting with WF-Downloads 3.00 we will have a different procedure
// since version information will be stored in the database of WF-Downloads
//
//      function import_mydownloads_to_wfdownloads
//         This one is needed to import data from mydownloads to wf-downloads
//
//      function import_pddownloads_to_wfdownloads
//         This one is needed to import data from pddownloads to wf-downloads
//
//      function import_wmpdownloads_to_wfdownloads
//         This one is needed to import data from wmpdownloads to wf-downloads
//
//      function update_tables_to_300
//         This function will convert any WF-Downloads 2.x format to 3.00 format
//
//      function invert_nohtm_dohtml_values
//         In WF-Downloads 3.00 some fieldnames have been changed and the namechange
//         comes along with a change of logic (0=yes;1=no --> 0=no;1=yes)
//         So the values need to be changed accordingly which is what this
//         function is doing. It needs to be run before "convert_tables_2x_to_300"
//         since it is based on the old fieldnamessince


include_once('admin_header.php');
include_once(WFDOWNLOADS_ROOT_PATH."include/update.php");
wfdownloads_icms_cp_header();
wfdownloads_adminMenu(-1, "Import");

// =========================================================================================
// This function imports data from mydownloads into wf-downloads
// =========================================================================================
function import_wmpdownloads_to_wfdownloads()
{
    global $xoopsDB;

    echo "<br /><B>Importing Data</B><br />";
    $wfdownloads = array("cat" => $xoopsDB -> prefix("wfdownloads_cat"),
                         "downloads" => $xoopsDB -> prefix("wfdownloads_downloads"),
                         "broken" => $xoopsDB -> prefix("wfdownloads_broken"),
                         "mod" => $xoopsDB -> prefix("wfdownloads_mod"),
                         "votes" => $xoopsDB -> prefix("wfdownloads_votedata"));

    $wmpdownloads = array("cat" => $xoopsDB -> prefix("wmpdownloads_cat"),
                         "downloads" => $xoopsDB -> prefix("wmpdownloads_downloads"),
                         "broken" => $xoopsDB -> prefix("wmpdownloads_broken"),
                         "mod" => $xoopsDB -> prefix("wmpdownloads_mod"),
                         "votes" => $xoopsDB -> prefix("wmpdownloads_votedata"),
                         "text" => $xoopsDB -> prefix("wmpdownloads_text"));

    //Add temporary field to category table
    $xoopsDB->query("ALTER TABLE ".$wfdownloads['cat']." ADD `old_cid` int NOT NULL default 0");
    $xoopsDB->query("ALTER TABLE ".$wfdownloads['cat']." ADD `old_pid` int NOT NULL default 0");

    //Add temporary fields to downloads table
    $xoopsDB->query("ALTER TABLE ".$wfdownloads['downloads']." ADD `old_lid` int NOT NULL default 0,
                                                               ADD `old_cid` int NOT NULL default 0");

    //Get latest mod request ID to determine which records will need an updated lid value afterwards
    $result = $xoopsDB->query("SELECT MAX(requestid) FROM ".$wfdownloads['mod']);
    list($max_requestid) = $xoopsDB->fetchRow($result);
    //Get latest report ID to determine, which records will need an updated lid value afterwards
    $result = $xoopsDB->query("SELECT MAX(reportid) FROM ".$wfdownloads['broken']);
    list($max_reportid) = $xoopsDB->fetchRow($result);
    //Get latest vote ID to determine which records will need an updated lid value afterwards
    $result = $xoopsDB->query("SELECT MAX(ratingid) FROM ".$wfdownloads['votes']);
    list($max_ratingid) = $xoopsDB->fetchRow($result);

    //Import data into category table
    $xoopsDB->query("INSERT INTO ".$wfdownloads['cat']." (`old_cid`, `old_pid`, `title`, `imgurl`, `summary`) SELECT `cid`, `pid`, `title`, `imgurl`, '' FROM ".$wmpdownloads['cat']);
    echo "Imported ".$xoopsDB->getAffectedRows()." categories into ".$wfdownloads['cat']."<br />";
    //Import data into downloads table
    $xoopsDB->query("INSERT INTO ".$wfdownloads['downloads']." (`cid`, `old_lid`, `old_cid`, `title`, `url`, `homepage`, `version`, `size`, `platform`, `screenshot`, `submitter`, `status`, `published`, `hits`, `rating`, `votes`, `comments`, `features`, `requirements`, `dhistory`, `summary`, `description`)
                    SELECT 0,`lid`, `cid`, `title`, `url`, `homepage`, `version`, `size`, `platform`, `logourl`, `submitter`, `status`, `date`, `hits`, `rating`, `votes`, `comments`, '', '','','', '' FROM ".$wmpdownloads['downloads']);
    echo "Imported ".$xoopsDB->getAffectedRows()." downloads into ".$wfdownloads['downloads']."<br />";
    //Import data into brokens table
    $xoopsDB->query("INSERT INTO ".$wfdownloads['broken']." (`lid`, `sender`, `ip`)
                     SELECT `lid`, `sender`, `ip` FROM ".$wmpdownloads['broken']);
    echo "Imported ".$xoopsDB->getAffectedRows()." broken reports into ".$wfdownloads['broken']."<br />";
    //Import data into votedata table
    $xoopsDB->query("INSERT INTO ".$wfdownloads['votes']." (`lid`, `ratinguser`, `rating`, `ratinghostname`, `ratingtimestamp`)
                     SELECT `lid`, `ratinguser`, `rating`, `ratinghostname`, `ratingtimestamp` FROM ".$wmpdownloads['votes']);
    echo "Imported ".$xoopsDB->getAffectedRows()." votes into ".$wfdownloads['votes']."<br />";
    //Import data into mod request table
    $xoopsDB->query("INSERT INTO ".$wfdownloads['mod']." (`lid`, `cid`, `title`, `url`, `homepage`, `version`, `size`, `platform`, `screenshot`, `description`, `modifysubmitter`,`features`, `requirements`, `publisher`, `dhistory`, `summary`)
                     SELECT `lid`, `cid`, `title`, `url`, `homepage`, `version`, `size`, `platform`, `logourl`, `description`, `modifysubmitter`,'','','','','' FROM ".$wmpdownloads['mod']);
    echo "Imported ".$xoopsDB->getAffectedRows()." modification requests into ".$wfdownloads['mod']."<br />";


    //Update category ID to new value
    $xoopsDB->query("UPDATE ".$wfdownloads['downloads']." d, ".$wfdownloads['cat']." c SET d.cid=c.cid WHERE d.old_cid=c.old_cid AND d.old_cid != 0");
    $xoopsDB->query("UPDATE ".$wfdownloads['cat']." c1, ".$wfdownloads['cat']." c2 SET c1.pid=c2.cid WHERE c1.old_pid=c2.old_cid AND c1.old_pid != 0");
    if ($max_requestid) {
        $xoopsDB->query("UPDATE ".$wfdownloads['mod']." m, ".$wfdownloads['cat']." c SET m.cid=c.cid WHERE m.requestid > ".$max_requestid." AND c.old_cid=m.cid");
        //Update lid values in mod table
        $xoopsDB->query("UPDATE ".$wfdownloads['mod']." m, ".$wfdownloads['downloads']." d SET m.lid=d.lid WHERE m.requestid > ".$max_requestid." AND m.lid=d.old_lid");
    }
    if ($max_ratingid) {
        //Update lid values in votedata table
        $xoopsDB->query("UPDATE ".$wfdownloads['votes']." v, ".$wfdownloads['downloads']." d SET v.lid=d.lid WHERE v.ratingid > ".$max_ratingid." AND v.lid=d.old_lid");
    }
    if ($max_reportid) {
    //Update lid values in brokens table
    $xoopsDB->query("UPDATE ".$wfdownloads['broken']." b, ".$wfdownloads['downloads']." d SET b.lid=d.lid WHERE b.reportid > ".$max_reportid." AND b.lid=d.old_lid");
    }
    //Update description
    $xoopsDB->query("UPDATE ".$wfdownloads['downloads']." d, ".$mydownloads['text']." t SET d.description=t.description WHERE t.lid=d.old_lid");

    //Remove temporary fields
    $xoopsDB->query("ALTER TABLE .".$wfdownloads['cat']." DROP `old_cid`");
    $xoopsDB->query("ALTER TABLE .".$wfdownloads['cat']." DROP `old_pid`");
    $xoopsDB->query("ALTER TABLE .".$wfdownloads['downloads']." DROP `old_cid`");
    $xoopsDB->query("ALTER TABLE .".$wfdownloads['downloads']." DROP `old_lid`");

}


// =========================================================================================
// This function imports data from pd-downloads into wf-downloads
// =========================================================================================
function import_pddownloads_to_wfdownloads()
{
    global $xoopsDB;

    echo "<br /><B>Importing Data</B><br />";
    $wfdownloads = array("cat" => $xoopsDB -> prefix("wfdownloads_cat"),
                         "downloads" => $xoopsDB -> prefix("wfdownloads_downloads"),
                         "broken" => $xoopsDB -> prefix("wfdownloads_broken"),
                         "mod" => $xoopsDB -> prefix("wfdownloads_mod"),
                         "votes" => $xoopsDB -> prefix("wfdownloads_votedata"));

    $PDdownloads = array("cat" => $xoopsDB -> prefix("PDdownloads_cat"),
                         "downloads" => $xoopsDB -> prefix("PDdownloads_downloads"),
                         "broken" => $xoopsDB -> prefix("PDdownloads_broken"),
                         "mod" => $xoopsDB -> prefix("PDdownloads_mod"),
                         "votes" => $xoopsDB -> prefix("PDdownloads_votedata"));

    //Add temporary field to category table
    $xoopsDB->query("ALTER TABLE ".$wfdownloads['cat']." ADD `old_cid` int NOT NULL default 0");
    $xoopsDB->query("ALTER TABLE ".$wfdownloads['cat']." ADD `old_pid` int NOT NULL default 0");

    //Add temporary fields to downloads table
    $xoopsDB->query("ALTER TABLE ".$wfdownloads['downloads']." ADD `old_lid` int NOT NULL default 0,
                                                               ADD `old_cid` int NOT NULL default 0");

    //Get latest mod request ID to determine which records will need an updated lid value afterwards
    $result = $xoopsDB->query("SELECT MAX(requestid) FROM ".$wfdownloads['mod']);
    list($max_requestid) = $xoopsDB->fetchRow($result);
    //Get latest report ID to determine, which records will need an updated lid value afterwards
    $result = $xoopsDB->query("SELECT MAX(reportid) FROM ".$wfdownloads['broken']);
    list($max_reportid) = $xoopsDB->fetchRow($result);
    //Get latest vote ID to determine which records will need an updated lid value afterwards
    $result = $xoopsDB->query("SELECT MAX(ratingid) FROM ".$wfdownloads['votes']);
    list($max_ratingid) = $xoopsDB->fetchRow($result);

    //Import data into category table
    $xoopsDB->query("INSERT INTO ".$wfdownloads['cat']." (`old_cid`, `old_pid`, `title`, `imgurl`, `description`, `total`, `weight`)
					 SELECT `cid`, `pid`, `title`, `imgurl`, `description`, `total`, `weight` 
					 FROM ".$PDdownloads['cat']);
    echo "Imported ".$xoopsDB->getAffectedRows()." categories into ".$wfdownloads['cat']."<br />";
    //Import data into downloads table
    $xoopsDB->query("INSERT INTO ".$wfdownloads['downloads']." (`cid`, `old_lid`, `old_cid`, `title`, `url`, `homepage`, `homepagetitle`, `version`, `size`, `platform`, `screenshot`, `submitter`, `publisher`, `status`, `date`, `hits`, `rating`, `votes`, `comments`, `features`, `forumid`, `dhistory`, `published`, `expired`, `updated`, `offline`, `description`, `ipaddress`, `notifypub`)
                     SELECT 0,`lid`, `cid`, `title`, `url`, `homepage`, `homepagetitle`, `version`, `size`, `platform`, `screenshot`, `submitter`, `publisher`, `status`, `date`, `hits`, `rating`, `votes`, `comments`, `features`, `forumid`, `dhistory`, `published`, `expired`, `updated`, `offline`, `description`, `ipaddress`, `notifypub` 
					 FROM ".$PDdownloads['downloads']);
    echo "Imported ".$xoopsDB->getAffectedRows()." downloads into ".$wfdownloads['downloads']."<br />";
    //Import data into brokens table
    $xoopsDB->query("INSERT INTO ".$wfdownloads['broken']." (`reportid`, `lid`, `sender`, `ip`, `date`, `confirmed`, `acknowledged`)
                     SELECT `reportid`, `lid`, `sender`, `ip`, `date`, `confirmed`, `acknowledged` 
					 FROM ".$PDdownloads['broken']);
    echo "Imported ".$xoopsDB->getAffectedRows()." broken reports into ".$wfdownloads['broken']."<br />";
    //Import data into votedata table
    $xoopsDB->query("INSERT INTO ".$wfdownloads['votes']." (`ratingid`, `lid`, `ratinguser`, `rating`, `ratinghostname`, `ratingtimestamp`)
                     SELECT `ratingid`, `lid`, `ratinguser`, `rating`, `ratinghostname`, `ratingtimestamp` 
					 FROM ".$PDdownloads['votes']);
    echo "Imported ".$xoopsDB->getAffectedRows()." votes into ".$wfdownloads['votes']."<br />";
    //Import data into mod request table
    $xoopsDB->query("INSERT INTO ".$wfdownloads['mod']." (`lid`, `cid`, `title`, `url`, `homepage`, `homepagetitle`, `version`, `size`, `platform`, `screenshot`, `submitter`, `publisher`, `status`, `date`, `hits`, `rating`, `votes`, `comments`, `features`, `forumid`, `dhistory`, `published`, `expired`, `updated`, `offline`, `description`, `modifysubmitter`, `requestdate`)
                     SELECT `lid`, `cid`, `title`, `url`, `homepage`, `homepagetitle`, `version`, `size`, `platform`, `screenshot`, `submitter`, `publisher`, `status`, `date`, `hits`, `rating`, `votes`, `comments`, `features`, `forumid`, `dhistory`, `published`, `expired`, `updated`, `offline`, `description`, `modifysubmitter`, `requestdate` 
					 FROM ".$PDdownloads['mod']);
    echo "Imported ".$xoopsDB->getAffectedRows()." modification requests into ".$wfdownloads['mod']."<br />";

    //Update category ID to new value
    $xoopsDB->query("UPDATE ".$wfdownloads['downloads']." d, ".$wfdownloads['cat']." c SET d.cid=c.cid WHERE d.old_cid=c.old_cid AND d.old_cid != 0");
    $xoopsDB->query("UPDATE ".$wfdownloads['cat']." c1, ".$wfdownloads['cat']." c2 SET c1.pid=c2.cid WHERE c1.old_pid=c2.old_cid AND c1.old_pid != 0");
    if ($max_requestid) {
        $xoopsDB->query("UPDATE ".$wfdownloads['mod']." m, ".$wfdownloads['cat']." c SET m.cid=c.cid WHERE m.requestid > ".$max_requestid." AND c.old_cid=m.cid");
        //Update lid values in mod table
        $xoopsDB->query("UPDATE ".$wfdownloads['mod']." m, ".$wfdownloads['downloads']." d SET m.lid=d.lid WHERE m.requestid > ".$max_requestid." AND m.lid=d.old_lid");
    }
    if ($max_ratingid) {
        //Update lid values in votedata table
        $xoopsDB->query("UPDATE ".$wfdownloads['votes']." v, ".$wfdownloads['downloads']." d SET v.lid=d.lid WHERE v.ratingid > ".$max_ratingid." AND v.lid=d.old_lid");
    }
    if ($max_reportid) {
    //Update lid values in brokens table
    $xoopsDB->query("UPDATE ".$wfdownloads['broken']." b, ".$wfdownloads['downloads']." d SET b.lid=d.lid WHERE b.reportid > ".$max_reportid." AND b.lid=d.old_lid");
    }

    //Remove temporary fields
    $xoopsDB->query("ALTER TABLE .".$wfdownloads['cat']." DROP `old_cid`");
    $xoopsDB->query("ALTER TABLE .".$wfdownloads['cat']." DROP `old_pid`");
    $xoopsDB->query("ALTER TABLE .".$wfdownloads['downloads']." DROP `old_cid`");
    $xoopsDB->query("ALTER TABLE .".$wfdownloads['downloads']." DROP `old_lid`");

}


// =========================================================================================
// This function imports data from mydownloads into wf-downloads
// =========================================================================================
function import_mydownloads_to_wfdownloads()
{
    global $xoopsDB;

    echo "<br /><B>Importing Data</B><br />";
    $wfdownloads = array("cat" => $xoopsDB -> prefix("wfdownloads_cat"),
                         "downloads" => $xoopsDB -> prefix("wfdownloads_downloads"),
                         "broken" => $xoopsDB -> prefix("wfdownloads_broken"),
                         "mod" => $xoopsDB -> prefix("wfdownloads_mod"),
                         "votes" => $xoopsDB -> prefix("wfdownloads_votedata"));

    $mydownloads = array("cat" => $xoopsDB -> prefix("mydownloads_cat"),
                         "downloads" => $xoopsDB -> prefix("mydownloads_downloads"),
                         "broken" => $xoopsDB -> prefix("mydownloads_broken"),
                         "mod" => $xoopsDB -> prefix("mydownloads_mod"),
                         "votes" => $xoopsDB -> prefix("mydownloads_votedata"),
                         "text" => $xoopsDB -> prefix("mydownloads_text"));

    //Add temporary field to category table
    $xoopsDB->query("ALTER TABLE ".$wfdownloads['cat']." ADD `old_cid` int NOT NULL default 0");
    $xoopsDB->query("ALTER TABLE ".$wfdownloads['cat']." ADD `old_pid` int NOT NULL default 0");

    //Add temporary fields to downloads table
    $xoopsDB->query("ALTER TABLE ".$wfdownloads['downloads']." ADD `old_lid` int NOT NULL default 0,
                                                               ADD `old_cid` int NOT NULL default 0");

    //Get latest mod request ID to determine which records will need an updated lid value afterwards
    $result = $xoopsDB->query("SELECT MAX(requestid) FROM ".$wfdownloads['mod']);
    list($max_requestid) = $xoopsDB->fetchRow($result);
    //Get latest report ID to determine, which records will need an updated lid value afterwards
    $result = $xoopsDB->query("SELECT MAX(reportid) FROM ".$wfdownloads['broken']);
    list($max_reportid) = $xoopsDB->fetchRow($result);
    //Get latest vote ID to determine which records will need an updated lid value afterwards
    $result = $xoopsDB->query("SELECT MAX(ratingid) FROM ".$wfdownloads['votes']);
    list($max_ratingid) = $xoopsDB->fetchRow($result);

    //Import data into category table
    $xoopsDB->query("INSERT INTO ".$wfdownloads['cat']." (`old_cid`, `old_pid`, `title`, `imgurl`, `summary`) SELECT `cid`, `pid`, `title`, `imgurl`, '' FROM ".$mydownloads['cat']);
    echo "Imported ".$xoopsDB->getAffectedRows()." categories into ".$wfdownloads['cat']."<br />";
    //Import data into downloads table
    $xoopsDB->query("INSERT INTO ".$wfdownloads['downloads']." (`cid`, `old_lid`, `old_cid`, `title`, `url`, `homepage`, `version`, `size`, `platform`, `screenshot`, `submitter`, `status`, `published`, `hits`, `rating`, `votes`, `comments`, `features`, `requirements`, `dhistory`, `summary`, `description`)
                    SELECT 0,`lid`, `cid`, `title`, `url`, `homepage`, `version`, `size`, `platform`, `logourl`, `submitter`, `status`, `date`, `hits`, `rating`, `votes`, `comments`, '', '','','', '' FROM ".$mydownloads['downloads']);
    echo "Imported ".$xoopsDB->getAffectedRows()." downloads into ".$wfdownloads['downloads']."<br />";
    //Import data into brokens table
    $xoopsDB->query("INSERT INTO ".$wfdownloads['broken']." (`lid`, `sender`, `ip`)
                     SELECT `lid`, `sender`, `ip` FROM ".$mydownloads['broken']);
    echo "Imported ".$xoopsDB->getAffectedRows()." broken reports into ".$wfdownloads['broken']."<br />";
    //Import data into votedata table
    $xoopsDB->query("INSERT INTO ".$wfdownloads['votes']." (`lid`, `ratinguser`, `rating`, `ratinghostname`, `ratingtimestamp`)
                     SELECT `lid`, `ratinguser`, `rating`, `ratinghostname`, `ratingtimestamp` FROM ".$mydownloads['votes']);
    echo "Imported ".$xoopsDB->getAffectedRows()." votes into ".$wfdownloads['votes']."<br />";
    //Import data into mod request table
    $xoopsDB->query("INSERT INTO ".$wfdownloads['mod']." (`lid`, `cid`, `title`, `url`, `homepage`, `version`, `size`, `platform`, `screenshot`, `description`, `modifysubmitter`,`features`, `requirements`, `publisher`, `dhistory`, `summary`)
                     SELECT `lid`, `cid`, `title`, `url`, `homepage`, `version`, `size`, `platform`, `logourl`, `description`, `modifysubmitter`,'','','','','' FROM ".$mydownloads['mod']);
    echo "Imported ".$xoopsDB->getAffectedRows()." modification requests into ".$wfdownloads['mod']."<br />";


    //Update category ID to new value
    $xoopsDB->query("UPDATE ".$wfdownloads['downloads']." d, ".$wfdownloads['cat']." c SET d.cid=c.cid WHERE d.old_cid=c.old_cid AND d.old_cid != 0");
    $xoopsDB->query("UPDATE ".$wfdownloads['cat']." c1, ".$wfdownloads['cat']." c2 SET c1.pid=c2.cid WHERE c1.old_pid=c2.old_cid AND c1.old_pid != 0");
    if ($max_requestid) {
        $xoopsDB->query("UPDATE ".$wfdownloads['mod']." m, ".$wfdownloads['cat']." c SET m.cid=c.cid WHERE m.requestid > ".$max_requestid." AND c.old_cid=m.cid");
        //Update lid values in mod table
        $xoopsDB->query("UPDATE ".$wfdownloads['mod']." m, ".$wfdownloads['downloads']." d SET m.lid=d.lid WHERE m.requestid > ".$max_requestid." AND m.lid=d.old_lid");
    }
    if ($max_ratingid) {
        //Update lid values in votedata table
        $xoopsDB->query("UPDATE ".$wfdownloads['votes']." v, ".$wfdownloads['downloads']." d SET v.lid=d.lid WHERE v.ratingid > ".$max_ratingid." AND v.lid=d.old_lid");
    }
    if ($max_reportid) {
    //Update lid values in brokens table
    $xoopsDB->query("UPDATE ".$wfdownloads['broken']." b, ".$wfdownloads['downloads']." d SET b.lid=d.lid WHERE b.reportid > ".$max_reportid." AND b.lid=d.old_lid");
    }
    //Update description
    $xoopsDB->query("UPDATE ".$wfdownloads['downloads']." d, ".$mydownloads['text']." t SET d.description=t.description WHERE t.lid=d.old_lid");

    //Remove temporary fields
    $xoopsDB->query("ALTER TABLE .".$wfdownloads['cat']." DROP `old_cid`");
    $xoopsDB->query("ALTER TABLE .".$wfdownloads['cat']." DROP `old_pid`");
    $xoopsDB->query("ALTER TABLE .".$wfdownloads['downloads']." DROP `old_cid`");
    $xoopsDB->query("ALTER TABLE .".$wfdownloads['downloads']." DROP `old_lid`");

}

$op = isset($_REQUEST['op']) ? intval($_REQUEST['op']) : 0;
switch ($op) {
    case 1:
        // Make sure that nohtml is properly changed to dohtml
        invert_nohtm_dohtml_values();
        // Ensure that the proper tables are present
        update_tables_to_300();
        // Import data from MyDownloads
        import_mydownloads_to_wfdownloads();
        break;

    case 2:
        // Make sure that nohtml is properly changed to dohtml
        invert_nohtm_dohtml_values();
        // Ensure that the proper tables are present
        update_tables_to_300();
        // Import data from PD-Downloads
        import_pddownloads_to_wfdownloads();
        break;

    case 3:
        // Make sure that nohtml is properly changed to dohtml
        invert_nohtm_dohtml_values();
        // Ensure that the proper tables are present
        update_tables_to_300();
        // Import data from wmpownloads
        import_wmpdownloads_to_wfdownloads();
        break;

    default:
        //ask what to do
        include XOOPS_ROOT_PATH."/class/xoopsformloader.php";
        $form = new icms_form_Theme('Importing',"form", $_SERVER['REQUEST_URI']);

        //Is MyDownloads installed?
        $module_handler = xoops_gethandler('module');
        $mydownloadsModule = $module_handler->getByDirname("mydownloads");
        $got_options = false;
        if (is_object($mydownloadsModule)) {
            $mydownloadsButton = new icms_form_elements_Button("Import data from MyDownloads", "myd_button", "Import", "submit");
            $mydownloadsButton->setExtra("onclick='document.forms.form.op.value=\"1\"'");
            $form->addElement($mydownloadsButton);
        } else {
            $mydownloadsLabel = new icms_form_elements_Label("Import data from MyDownloads", "Module MyDownloads not found on this site.");
            $form->addElement($mydownloadsLabel);
        }

        //Is PD-Downloads installed?
        $module_handler = xoops_gethandler('module');
        $PDdownloadsModule = $module_handler->getByDirname("PDdownloads");
        $got_options = false;
        if (is_object($PDdownloadsModule)) {
            $pddownloadsButton = new icms_form_elements_Button("Import data from PD-Downloads", "pd_button", "Import", "submit");
            $pddownloadsButton->setExtra("onclick='document.forms.form.op.value=\"2\"'");
            $form->addElement($pddownloadsButton);
        } else {
            $pddownloadsLabel = new icms_form_elements_Label("Import data from PD-Downloads", "Module PD-Downloads not found on this site.");
            $form->addElement($pddownloadsLabel);
        }

        //Is wmpownloads installed?
        $module_handler = xoops_gethandler('module');
        $wmpdownloadsModule = $module_handler->getByDirname("wmpdownloads");
        $got_options = false;
        if (is_object($wmpdownloadsModule)) {
            $wmpdownloadsButton = new icms_form_elements_Button("Import data from wmpownloads", "wmp_button", "Import", "submit");
            $wmpdownloadsButton->setExtra("onclick='document.forms.form.op.value=\"3\"'");
            $form->addElement($wmpdownloadsButton);
        } else {
            $wmpdownloadsLabel = new icms_form_elements_Label("Import data from wmpownloads", "Module wmpownloads not found on this site.");
            $form->addElement($wmpdownloadsLabel);
        }

        $form->addElement(new icms_form_elements_Hidden('op', 0));
        $form->display();
        break;
}
wfdownloads_modFooter();
icms_cp_footer();
?>