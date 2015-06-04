<?php
	require_once '../model/memberService.class.php';
	require_once 'smarty_common.php';
	$memb=new memberService();
	$sign=$memb->signUp($_REQUEST['username'],$_REQUEST['email'],$_REQUEST['password'],$_REQUEST['type']);
	
	if ($sign=="1"){
		
		$smarty->display("regisOK.tpl");
	}else {
	
		header("location:registerUI.php");
		exit();
	}