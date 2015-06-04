<?php

	require_once 'smarty_common.php';
	$job_id=$_REQUEST['jobid'];
	$arr=$jobS->getJobById($job_id);
	/* echo "<pre>";
	print_r($arr);
	echo "</pre>"; */
	$smarty->assign("arr",$arr);
	$smarty->display("jobDetail.tpl");