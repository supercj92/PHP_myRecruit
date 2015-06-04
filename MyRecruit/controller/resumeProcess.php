<?php
	header("content-type:text/html;charset=utf-8");
	require_once '../model/resumeService.class.php';
	
	$resume=new resumeService();
	$arr=array();
	
	foreach ($_POST as $key=>$val){
		$arr[]=$val;
	}
	$flag=$_REQUEST['flag'];
	/* echo "<pre>";
	print_r($_POST);
	echo "</pre>"; */
	if($flag=="create"){
		/* echo "create"; */
		
		$sign=$resume->addResume($arr);
		if ($sign==1){
			//插入成功
			
		}else{
			
		}
	}elseif ($flag=="update"){
		
	/* 	echo "update"; 
		 echo "<pre>";
		 print_r($arr);
		echo "</pre>";
		exit(); */
		$sign=$resume->updateResumeById(6, $arr);
	if ($sign==1){
			//更新成功
			echo "更新成功";
			exit();
		}else{
			
		}
	}
	/* $resume=new resumeService();
	$sign=$resume->addResume($arr);
	echo $sign."=>".mysql_error(); */
	