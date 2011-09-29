<?php

/**
* $Id: common.php,v 1.3 2007/09/30 12:39:14 m0nty_ Exp $
* Module: WF-Downloads
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
if (!defined("XOOPS_ROOT_PATH")) { 
 	die("XOOPS root path not defined");
}


// This must contain the name of the folder in which reside WF-Downloads
if( !defined("WFDOWNLOADS_DIRNAME") ){
	define("WFDOWNLOADS_DIRNAME", 'wfdownloads');
}

if( !defined("WFDOWNLOADS_URL") ){
	define("WFDOWNLOADS_URL", XOOPS_URL.'/modules/'.WFDOWNLOADS_DIRNAME.'/');
}
if( !defined("WFDOWNLOADS_ROOT_PATH") ){
	define("WFDOWNLOADS_ROOT_PATH", XOOPS_ROOT_PATH.'/modules/'.WFDOWNLOADS_DIRNAME.'/');
}

// Find if the user is admin of the module
$wfdownloads_isAdmin = wfdownloads_userIsAdmin();

?>