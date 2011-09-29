<?php

/**
* $Id$
* Module: WF-Downloads
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
if (!defined("ICMS_ROOT_PATH")) { 
 	die("XOOPS root path not defined");
}


// This must contain the name of the folder in which reside WF-Downloads
if( !defined("WFDOWNLOADS_DIRNAME") ){
	define("WFDOWNLOADS_DIRNAME", 'wfdownloads');
}

if( !defined("WFDOWNLOADS_URL") ){
	define("WFDOWNLOADS_URL", ICMS_URL.'/modules/'.WFDOWNLOADS_DIRNAME.'/');
}
if( !defined("WFDOWNLOADS_ROOT_PATH") ){
	define("WFDOWNLOADS_ROOT_PATH", ICMS_ROOT_PATH.'/modules/'.WFDOWNLOADS_DIRNAME.'/');
}

// Find if the user is admin of the module
$wfdownloads_isAdmin = wfdownloads_userIsAdmin();

?>