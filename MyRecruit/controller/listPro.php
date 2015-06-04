<?php
	require_once '../model/comfun.class.php';
	require_once '../model/Member.class.php';
	require_once '../libs/Smarty.class.php';
	require_once '../model/jobsService.class.php';
	$comf=new Comfun();
	$smarty=new Smarty();
	$jobS=new jobsService();
	$smarty->left_delimiter="<{";
	$smarty->right_delimiter="}>";
	$smarty->template_dir="../templates/";
	$smarty->compile_dir="../templates_c/";
	if($comf->isLogin()){
		$member=$_SESSION['member'];
		$uid=$member->uid;
		$job_id=$_GET['jobid'];
		//print_r($_SESSION);
		/* echo "uid is".$member->uid;
		exit(); */
		$sign=$jobS->postResume($uid, $job_id);
		if($sign=="1"){
		
			$smarty->display("OK.tpl");
		}else {
			echo "error";
		}
	}else {
		header("location:loginUI.php");
	}