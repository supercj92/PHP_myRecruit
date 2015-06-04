<?php
	require_once '../model/companyService.class.php';
	header("content-type:text/html;charset=utf-8");
	/* header("content-type:text/html;charset=utf-8"); */
	/* echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	//print_r($_FILES);
	exit(); */
	if ($_REQUEST['flag']=="addC"){
	$arr=array();
	foreach ($_POST as $value) {
		$arr[]=$value;
	}
	$comp_logo="../upload/".$_FILES['comLogo']['name'];
	$arr[9]=$comp_logo;
	copy($_FILES['comLogo']['tmp_name'], "../upload/".$_FILES['comLogo']['name']);
	
	$company=new companyService();
	//此处未动态的传入uid
	$sign=$company->addComInfo($arr,1);
	
	echo $sign;
	
	/* 
	echo "<pre>";
	print_r($arr);
	echo "</pre>"; */
	}elseif ($_REQUEST['flag']=="select"){
		/* echo "<pre>";
		print_r($_REQUEST);
		echo "</pre>"; */
		$comps=new companyService();
		
		$comps->getCompanyPagination($pagination, $comp_city, $comp_stage, $comp_industry);
	}
	
	
	
	
	