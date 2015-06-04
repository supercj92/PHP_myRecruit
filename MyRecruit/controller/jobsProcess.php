<?php
	require_once '../model/jobsService.class.php';
    header("content-type:text/html;charset=utf-8");
    //header("content:'text/html;charset=utf-8'");
    $jobsService=new jobsService();
    if($_REQUEST['flag']=="add"){
    	//插入jobs
	    $positionType=$_POST['positionType'];
	    $positionName=$_POST['positionName'];
	    $department=$_POST['department'];
	    $salaryMin=$_POST['salaryMin'];
	    $salaryMax=$_POST['salaryMax'];
	    $workAddress=$_POST['workAddress'];
	    $positionAdvantage=$_POST['positionAdvantage'];
	    $positionAddress=$_POST['positionAddress'];
	    //第九条
	    $forwardEmail=$_POST['forwardEmail'];
	    $positionDetail=$_POST['positionDetail'];
	    $workYear=$_POST['workYear'];
	    $education=$_POST['education'];
	    //第十二条
	    $jobNature=$_POST['jobNature'];
	    $companyName=$_POST['companyName'];
    
   
   $arr=array($positionType,$positionName,$department,$salaryMax,$salaryMin,$workAddress,$positionAdvantage,$positionAddress,$forwardEmail,$positionDetail,$workYear,$education,$companyName,$jobNature);
   
   $jobsService=new jobsService();
   
   $sign= $jobsService->addJobs($arr);
   
   //echo $sign."->".mysql_error();
   		if($sign==1){
   			header("location:../company/jobsShow.php");
   		}else {
   			echo $sign."->".mysql_error();
   		}
   
   
    }elseif ($_REQUEST['flag']=="select"){
    	//查询
    	
    }elseif ($_REQUEST['flag']=="delete"){
    	//删除
    	
    	$job_id=$_REQUEST['job_id'];
    	$sign=$jobsService->deleteJobById($job_id);
    	if($sign==1){
    		header("Location:../company/jobsShow.php");
    		
    		exit();
    	}else {
    		//失败
    	}
    	
    }elseif ($_REQUEST['flag']=="offline"){
    	//下线
    	$job_id=$_REQUEST['job_id'];
    	$isValid=$_REQUEST['isValid'];
    	$sign=$jobsService->offlineJObById($isValid,$job_id);
    	if($sign==1){
    		//成功
    		header("Location:../company/jobsShow.php");
    		exit();
    	}else{
    		//失败
    		echo mysql_error();
    	}
    }elseif ($_REQUEST['flag']=="update"){
    	$positionType=$_POST['positionType'];
    	$positionName=$_POST['positionName'];
    	$department=$_POST['department'];
    	$salaryMin=$_POST['salaryMin'];
    	$salaryMax=$_POST['salaryMax'];
    	$workAddress=$_POST['workAddress'];
    	$positionAdvantage=$_POST['positionAdvantage'];
    	$positionAddress=$_POST['positionAddress'];
    	//第九条
    	$forwardEmail=$_POST['forwardEmail'];
    	$positionDetail=$_POST['positionDetail'];
    	$workYear=$_POST['workYear'];
    	$education=$_POST['education'];
    	//第十三条
    	$jobNature=$_POST['jobNature'];
    	$companyName=$_POST['companyName'];
    	$job_id=$_POST['job_id'];
    	 
    	
    	$arr=array($positionType,$positionName,$department,$salaryMax,$salaryMin,$workAddress,$positionAdvantage,$positionAddress,$forwardEmail,$positionDetail,$workYear,$education,$companyName,$jobNature);
    	 
    	$sign=$jobsService->updateJob($job_id, $arr);
    	
    	if ($sign==1){
    		//更新成功
    		header("location:../company/jobsShow.php");
    		exit();
    	}else {
    		//更新失败
    		echo "error".mysql_error();
    	}
    	
    	/* echo "<pre>";
    	print_r($arr);
    	echo "</pre>"; */
    }
   
?>