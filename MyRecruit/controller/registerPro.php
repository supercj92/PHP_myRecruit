<?php
	header("Cache-Control:no-cache");
	header("content-type:text/html;charset=utf-8");
	$uid=$_REQUEST['username'];
	$resInfo="";
	if($uid=="ukd163@163.com"||empty($uid)){
		//返回json格式数据
		$resInfo='{"msg":"该用户名不可用","sign":"no"}';
	}else {
		$resInfo='{"msg":"该用户可用","sign":"yes"}';
	}
	echo $resInfo;