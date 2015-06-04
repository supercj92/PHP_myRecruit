<?php

	require_once '../model/memberService.class.php';
	require_once '../model/Member.class.php';
		$email=$_POST['email'];
		$pwd=$_POST['pwd'];
		
		if(!empty($email)&&!empty($pwd)){
			//邮箱和密码都不为空
		$memberService=new memberService();
		
		$bool=$memberService->checkMember($email, $pwd,$member);
		
		if($bool){
			//登陆成功
			$_SESSION['member']=$member;
			header("Location:../personal/UserCenter.php");
			exit();
		}else{
			//登陆失败
			header("Location:../personal/login.php?error=false");
			exit();
		}
		}else {
			//有一个为空
			header("Location:../personal/login.php?error=null");
			exit();
		}
?>		