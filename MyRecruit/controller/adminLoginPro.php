<?php
	require_once 'smarty_common.php';
	/* echo "<pre>";
	print_r($_REQUEST);
	echo "</pre>"; */
	$uid=$_REQUEST['uid'];
	$pwd=$_REQUEST['pwd'];
	if($uid=="ukd163"&&$pwd=="123"){
		header("location:adminCenter.php");
	}else {
		$smarty->assign("msg","用户名或密码错误");
		$smarty->display("adminLoginUI.html");
	}