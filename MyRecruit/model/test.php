<?php
	require_once 'jobsService.class.php';
	
	$jobs=new jobsService();
	$arr=$jobs->getValidJobs();
	print_r($arr);