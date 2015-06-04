<?php
	require_once 'smarty_common.php';
	require_once '../model/adminService.class.php';
	$adminS=new adminService();
	$admin_id=$_GET['adminid'];
	$arr=$adminS->getAdminById($admin_id);
	
	
	$smarty->assign("arr",$arr);
	$smarty->display("adminTpl.tpl");
	
	