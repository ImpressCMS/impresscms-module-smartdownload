<?php
/**
 * $Id$
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */

// uncomment the below line only if you are using Protector 3.x module
// and you trust your users when uploading files, it is recommended to not allow anonymous uploads if you do so!!
//define('PROTECTOR_SKIP_FILESCHECKER', true);

include_once '../../mainfile.php';
include_once ICMS_ROOT_PATH.'/modules/wfdownloads/include/functions.php';
include_once ICMS_ROOT_PATH.'/modules/wfdownloads/include/common.php';

$myts = & MyTextSanitizer :: getInstance(); // MyTextSanitizer object
?>
