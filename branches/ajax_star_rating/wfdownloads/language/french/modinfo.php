<?php

/**
 * $Id$
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */

// Module Info
// The name of this module
define("_MI_WFD_NAME","WF-Downloads");

// A brief description of this module
define("_MI_WFD_DESC","Creates a downloads section where users can download/submit/rate various files.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_WFD_BNAME1","Recent WF-Downloads");
define("_MI_WFD_BNAME2","Top WF-Downloads");

// Sub menu titles
define("_MI_WFD_SMNAME1","Soumettre");
define("_MI_WFD_SMNAME2","Populaires");
define("_MI_WFD_SMNAME3","Top 10");

// Names of admin menu items
define("_MI_WFD_BINDEX","Main Index");
define("_MI_WFD_INDEXPAGE","Index Page Management");
define("_MI_WFD_MCATEGORY","Category Management");
define("_MI_WFD_MDOWNLOADS","File Management");
define('_MI_WFD_REVIEWS','Revues');
define("_MI_WFD_MUPLOADS","Image Upload");
define("_MI_WFD_MMIMETYPES","Mimetypes Management");
define("_MI_WFD_PERMISSIONS","Permission Settings");
define("_MI_WFD_MVOTEDATA","Votes");
define("_MI_WFD_MMIRRORS","Mirroirs");

// Title of config items
define('_MI_WFD_POPULAR', 'Download Popular Count');
define('_MI_WFD_POPULARDSC', 'The number of hits before a Download status will be considered as popular.');

//Display Icons
define("_MI_WFD_ICONDISPLAY","Downloads Popular and New:");
define("_MI_WFD_DISPLAYICONDSC", "Select how to display the popular and new icons in download listing.");
define("_MI_WFD_DISPLAYICON1", "Display As Icons");
define("_MI_WFD_DISPLAYICON2", "Display As Text");
define("_MI_WFD_DISPLAYICON3", "Do Not Display");

define("_MI_WFD_DAYSNEW","Downloads Days New:");
define("_MI_WFD_DAYSNEWDSC","The number of days a download status will be considered as new.");
define("_MI_WFD_DAYSUPDATED","Downloads Days Updated:");
define("_MI_WFD_DAYSUPDATEDDSC","The amount of days a download status will be considered as updated.");

define('_MI_WFD_PERPAGE', 'Download Listing Count');
define('_MI_WFD_PERPAGEDSC', 'Number of Downloads to display in each category listing.');

define('_MI_WFD_TEMPLATESET', 'Choisir le set de template');
define('_MI_WFD_TEMPLATESETDSC', 'Choisissez le set de templates � utiliser.<br />Cela vous permettra de choisir comment vos fichiers seront affich�s.');
define('_MI_WFD_TEMPLATESET1', 'Default');
define('_MI_WFD_TEMPLATESET2', 'Professional');
define('_MI_WFD_USESHOTS', 'Display Screenshot Images?');
define('_MI_WFD_USESHOTSDSC', 'Select yes to display screenshot images for each download item');
define('_MI_WFD_SHOTWIDTH', 'Image Display Width');
define('_MI_WFD_SHOTWIDTHDSC', 'Display width for screenshot image');
define('_MI_WFD_SHOTHEIGHT', 'Image Display Height');
define('_MI_WFD_SHOTHEIGHTDSC', 'Display height for screenshot image');
define('_MI_WFD_CHECKHOST', 'Disallow direct download linking? (leeching)');
define('_MI_WFD_REFERERS', 'These sites can directly link to your files <br />Separate with | ');
define("_MI_WFD_ANONPOST","Anonymous User Submission:");
define("_MI_WFD_ANONPOSTDSC","Allow Anonymous users to submit or upload to your website?");
define("_MI_WFD_ANONPOST1","None");
define("_MI_WFD_ANONPOST2","Download Only");
define("_MI_WFD_ANONPOST3","Mirror Only");
define("_MI_WFD_ANONPOST4","Both");
define('_MI_WFD_AUTOAPPROVE','Auto Approve Submitted Downloads');
define('_MI_WFD_AUTOAPPROVEDSC','Select to approve submitted downloads without moderation.');

define('_MI_WFD_MAXFILESIZE','Upload Size (KB)');
define('_MI_WFD_MAXFILESIZEDSC','Maximum file size permitted with file uploads.');
define('_MI_WFD_IMGWIDTH','Upload Image width');
define('_MI_WFD_IMGWIDTHDSC','Maximum image width permitted when uploading image files');
define('_MI_WFD_IMGHEIGHT','Upload Image height');
define('_MI_WFD_IMGHEIGHTDSC','Maximum image height permitted when uploading image files');

define('_MI_WFD_AUTOSUMMARY','Enable Auto Summary');
define('_MI_WFD_AUTOSUMMARYDESC','Automatically create summary based on x amount of characters defined');
define('_MI_WFD_AUTOSUMMARYLENGTH','Summary Length');
define('_MI_WFD_AUTOSUMMARYLENGTHDESC','The maximum amount of characters displayed for the summary');

define('_MI_WFD_UPLOADDIR','Upload Directory (No trailing slash)');
define('_MI_WFD_DOWNLOADMINPOSTS', "Minimum posts required");
define('_MI_WFD_DOWNLOADMINPOSTS_DESC', "Enter the minimum number of posts required to upload/download a file");
define('_MI_WFD_ALLOWSUBMISS','User Submissions:');
define('_MI_WFD_ALLOWSUBMISSDSC','Allow Users to Submit new downloads');
define('_MI_WFD_ALLOWUPLOADS','User Uploads:');
define('_MI_WFD_ALLOWUPLOADSDSC','Allow Users to upload files directly to your website');
define('_MI_WFD_SCREENSHOTS','Screenshots Upload Directory');
define('_MI_WFD_CATEGORYIMG','Category Image Upload Directory');
define('_MI_WFD_MAINIMGDIR','Main Image Directory');
define('_MI_WFD_USETHUMBS', 'Use Thumb Nails:');
define("_MI_WFD_USETHUMBSDSC", "Supported file types: JPG, GIF, PNG.<div style='padding-top: 8px;'>WF-Section will use thumb nails for images. Set to 'No' to use orginal image if the server does not support this option.</div>");
define('_MI_WFD_DATEFORMAT', 'Timestamp:');
define('_MI_WFD_DATEFORMATDSC', 'Default Timestamp for WF-Downloads:');
define('_MI_WFD_SHOWDISCLAIMER', 'Show Disclaimer before User Submission?');
define('_MI_WFD_SHOWDOWNDISCL', 'Show Disclaimer before User Download?');
define('_MI_WFD_DISCLAIMER', 'Enter Submission Disclaimer Text:');
define('_MI_WFD_DOWNDISCLAIMER', 'Enter Download Disclaimer Text:');
define('_MI_WFD_PLATFORM', 'Enter Platforms:');
define('_MI_WFD_SUBCATS', 'Sub-Categories:');
define('_MI_WFD_VERSIONTYPES', 'Version Status:');
define('_MI_WFD_LICENSE', 'Enter License:');
define('_MI_WFD_LIMITS', 'Enter File Limitations:');

define("_MI_WFD_SUBMITART", "Download Submission:");
define("_MI_WFD_SUBMITARTDSC", "Select groups that can submit new downloads.");

define("_MI_WFD_IMGUPDATE", "Update Thumbnails?");
define("_MI_WFD_IMGUPDATEDSC", "If selected Thumbnail images will be updated at each page render, otherwise the first thumbnail image will be used regardless. <br /><br />");
define("_MI_WFD_QUALITY", "Thumb Nail Quality:");
define("_MI_WFD_QUALITYDSC", "Quality Lowest: 0 Highest: 100");
define("_MI_WFD_KEEPASPECT", "Keep Image Aspect Ratio?");
define("_MI_WFD_KEEPASPECTDSC", "");
define("_MI_WFD_ADMINPAGE", "Admin Index Files Count:");
define("_MI_WFD_AMDMINPAGEDSC", "Number of new files to display in module admin area.");
define("_MI_WFD_ARTICLESSORT", "Default download Order:");
define("_MI_WFD_ARTICLESSORTDSC", "Select the default order for the download listings.");
define("_MI_WFD_TITLE", "Title");
define("_MI_WFD_RATING", "Rating");
define("_MI_WFD_WEIGHT", "Weight");
define("_MI_WFD_POPULARITY", "Popularity");
define("_MI_WFD_SUBMITTED2", "Submission Date");
define('_MI_WFD_COPYRIGHT', 'Copyright Notice:');
define('_MI_WFD_COPYRIGHTDSC', 'Select to display a copyright notice on download page.');
// Description of each config items
define('_MI_WFD_PLATFORMDSC', 'List of platforms to enter <br />Separate with | IMPORTANT: Do not change this once the site is Live, Add new to the end of the list!');
define('_MI_WFD_SUBCATSDSC', 'Select Yes to display sub-categories. Selecting No will hide sub-categories from the listings');
define('_MI_WFD_LICENSEDSC', 'List of platforms to enter <br />Separate with |');

// Text for notifications
define('_MI_WFD_GLOBAL_NOTIFY', 'Global');
define('_MI_WFD_GLOBAL_NOTIFYDSC', 'Global downloads notification options.');

define('_MI_WFD_CATEGORY_NOTIFY', 'Category');
define('_MI_WFD_CATEGORY_NOTIFYDSC', 'Notification options that apply to the current file category.');

define('_MI_WFD_FILE_NOTIFY', 'File');
define('_MI_WFD_FILE_NOTIFYDSC', 'Notification options that apply to the current file.');

define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFY', 'Nouvelle cat&eacute;gorie');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notifiez-moi quand une cat�gorie de fichiers est cr��e.');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Notifiez-moi quand une cat�gorie de fichiers est cr��e.');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Nouvelle cat�gorie de fichiers');                              

define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFY', 'Modify File Requested');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYCAP', 'Notifiez-moi de toute demande de modification de fichiers.');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYDSC', 'Notifiez-moi de toute demande de modification de fichiers.');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Demande de modification de fichiers');

define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFY', 'Broken File Submitted');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYCAP', 'Notifiez-moi de tout rapport de fichier manquant.');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYDSC', 'Notifiez-moi de tout rapport de fichier manquant.');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Fichier manquant signal&eacute;');

define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFY', 'File Submitted');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYCAP', 'Notifiez-moi des nouvelles soumissions de fichier (en attente d\'approbation).');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYDSC', 'Notifiez-moi des nouvelles soumissions de fichier (en attente d\'approbation).');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Nouvelle soumission de fichier');

define('_MI_WFD_GLOBAL_NEWFILE_NOTIFY', 'New File');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYCAP', 'Notifiez-moi d�s qu\'un nouveau fichier est publi�.');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYDSC', 'Notifiez-moi d�s qu\'un nouveau fichier est publi�.');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Nouveau fichier');

define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFY', 'File Submitted');
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Notify me when a new file is submitted (awaiting approval) to the current category.');   
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Receive notification when a new file is submitted (awaiting approval) to the current category.');      
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New file submitted in category'); 

define('_MI_WFD_CATEGORY_NEWFILE_NOTIFY', 'New File');
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYCAP', 'Notify me when a new file is posted to the current category.');   
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYDSC', 'Receive notification when a new file is posted to the current category.');      
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New file in category'); 

define('_MI_WFD_FILE_APPROVE_NOTIFY', 'File Approved');
define('_MI_WFD_FILE_APPROVE_NOTIFYCAP', 'Notify me when this file is approved.');
define('_MI_WFD_FILE_APPROVE_NOTIFYDSC', 'Receive notification when this file is approved.');
define('_MI_WFD_FILE_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : File Approved');

define('_MI_WFD_AUTHOR_INFO', "Developer Information");
define('_MI_WFD_AUTHOR_NAME', "Developer");
define('_MI_WFD_AUTHOR_DEVTEAM', "Development Team");
define('_MI_WFD_AUTHOR_WEBSITE', "Developer website");
define('_MI_WFD_AUTHOR_EMAIL', "Developer email");
define('_MI_WFD_AUTHOR_CREDITS', "Credits");
define('_MI_WFD_MODULE_INFO', "Module Development Information");
define('_MI_WFD_MODULE_STATUS', "Development Status");
define('_MI_WFD_MODULE_DEMO', "Demo Site");
define('_MI_WFD_MODULE_SUPPORT', "Official support site");
define('_MI_WFD_MODULE_BUG', "Report a bug for this module");
define('_MI_WFD_MODULE_FEATURE', "Suggest a new feature for this module");
define('_MI_WFD_MODULE_DISCLAIMER', "Disclaimer");
define('_MI_WFD_RELEASE', "Release Date: ");

define('_MI_WFD_MODULE_MAILLIST', "WF-Section Mailing Lists");

define('_MI_WFD_MODULE_MAILANNOUNCEMENTS', "Announcements Mailing List");
define('_MI_WFD_MODULE_MAILBUGS', "Bug Mailing List");
define('_MI_WFD_MODULE_MAILFEATURES', "Features Mailing List");

define('_MI_WFD_MODULE_MAILANNOUNCEMENTSDSC', "Get the latest announcements from WF-Section.");
define('_MI_WFD_MODULE_MAILBUGSDSC', "Bug Tracking and submission mailing list");
define('_MI_WFD_MODULE_MAILFEATURESDSC', "Request New Features mailing list.");

define('_MI_WFD_WARNINGTEXT', "THE SOFTWARE IS PROVIDED BY WF-SECTIONS \"AS IS\" AND \"WITH ALL FAULTS.\"
WF-SECTIONS MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING
THE QUALITY, SAFETY OR SUITABILITY OF THE SOFTWARE, EITHER EXPRESS OR
IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.
FURTHER, ABLEMEDIA MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE TRUTH,
ACCURACY OR COMPLETENESS OF ANY STATEMENTS, INFORMATION OR MATERIALS
CONCERNING THE SOFTWARE THAT IS CONTAINED IN WF-SECTIONS WEBSITE. IN NO
EVENT WILL ABLEMEDIA BE LIABLE FOR ANY INDIRECT, PUNITIVE, SPECIAL,
INCIDENTAL OR CONSEQUENTIAL DAMAGES HOWEVER THEY MAY ARISE AND EVEN IF
WF-SECTIONS HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGES..");

define('_MI_WFD_AUTHOR_CREDITSTEXT',"The WF-Sections Team would like to thank the following people for their help and support during the development phase of this module:<br /><br />
tom, mking, paco1969, mharoun, Talis, m0nty, steenlnielsen, Clubby, Geronimo, bd_csmc, herko, LANG, Stewdio, tedsmith, veggieryan, carnuke, MadFish.
<br /><br />And on a personal note, I would like to thank the special girl in my life who I love dearly and who gives me the strength and support to do all of this.
");
define('_MI_WFD_AUTHOR_BUGFIXES', "Bug Fix History");

define('_MI_WFD_COPYRIGHTIMAGE', "Images copyright WF-Project and may only be used with permission");

?>