<?php
	require_once 'smarty_common.php';
	require_once '../model/adminService.class.php';
	require_once '../model/Pagination.class.php';
	$adminS=new adminService();
	$pagination=new Pagination();
	$adminS->queryAllAdmin($pagination);
	/* echo "<pre>";
	print_r($pagination->res_array);
	echo "</pre>";
	exit(); */
	$smarty->assign("pagi",$pagination);
	$smarty->display("adminInfo.tpl");
	