<?php
	require_once 'smarty_common.php';
	$msg="";
	if(!empty($_GET['error'])){
		$error=$_GET['error'];
		if($error=="null"){
			$msg="用户名或密码不能为空！";
		}else {
			$msg="用户名或密码错误!";
		}
	}
	
	$smarty->assign("msg",$msg);
	
	$smarty->display("../templates/login.tpl");