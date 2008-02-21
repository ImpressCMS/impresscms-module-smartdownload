<?php
$lid = isset($_GET['lid']) && $_GET['lid'] != '' ? $_GET['lid'] : 0;
if(!$lid){
	header('Location index.php');
}
include 'admin_header.php';
wfdownloads_xoops_cp_header();
wfdownloads_adminMenu(0, _AM_WFD_BINDEX);

$member_handler =& xoops_gethandler('member');
$ip_log_handler = xoops_getmodulehandler('ip_log');
$download_handler = xoops_getmodulehandler('download');

$download = $download_handler->get($lid);
$criteria = new CriteriaCompo();
$criteria->add(new Criteria('lid', $lid));
$criteria->setSort('date');
$criteria->setOrder('DESC');

$ip_logsObj = $ip_log_handler->getObjects($criteria);
unset($criteria);
$uidArray = array();
foreach($ip_logsObj as $ip_logObj){
	if($ip_logObj->getVar('uid')!= 0 && $ip_logObj->getVar('uid') != ''){
		$uidArray[] = $ip_logObj->getVar('uid');
	}
}
$criteria = new CriteriaCompo();
if(!empty($uidArray)){
	$criteria->add(new Criteria('uid', '('.implode(', ', $uidArray).')', 'IN'));
}
$userList = $member_handler->getUserList($criteria);
echo  "<a href='index.php'>"._MD_WFD_BACK."</a>";
if(empty($ip_logsObj)){
	echo  "<h2>"._MD_WFD_EMPTY_LOG."</h2>";
}else{
	echo "<h2>".sprintf(_MD_WFD_LOG_FOR_LID, $download->getVar('title'))."</h2>";
	echo "<br/><table ><tr><td width='20%'><b>"._MD_WFD_IP_ADDRESS."</b></td><td width='20%'><b>"._MD_WFD_DATE."</b></td><td width='20%'><b>"._MD_WFD_USER."</b></td></tr>";
	foreach($ip_logsObj as $ip_logObj){
		echo "<tr><td>";
		echo $ip_logObj->getVar('ip_address');
		echo "</td><td>";
		echo formatTimestamp($ip_logObj->getVar('date'));
		echo "</td><td>";
		if($ip_logObj->getVar('uid') != 0 ){
			$uname = $userList[$ip_logObj->getVar('uid')];
		}else{
			$uname = _MD_WFD_ANONYMOUS;
		}
		echo $uname;
		echo "</td></tr>";
	}
	echo "</table>";
}
xoops_cp_footer();
?>
