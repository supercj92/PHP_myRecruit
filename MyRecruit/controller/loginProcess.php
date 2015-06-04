<?php
	require_once 'smarty_common.php';
	require_once '../model/memberService.class.php';
		$email=$_POST['email'];
		$pwd=$_POST['pwd'];
		
		//echo $email."".$pwd;
		if(!empty($email)&&!empty($pwd)){
			//邮箱和密码都不为空
		$memberService=new memberService();
		$member=new Member();
		$bool=$memberService->checkMember($email, $pwd,$member);
		
		if($bool){
			//登陆成功
			/* echo "i am here";
			exit(); */
			//session_start();
			$_SESSION['member']=$member;
			Header("Location:memberCenter.php");
			exit();
		}else{
			//登陆失败
			header("Location:loginUI.php?error=false");
			exit();
		}
		}else {
			//有一个为空
			header("Location:./loginUI.php?error=null");
			exit();
		}
?>		