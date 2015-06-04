<?php
	
	require_once 'sqlHelper.class.php';
	require_once 'Member.class.php';
	
	class memberService{
		//用户登陆
	function checkMember($email,$pwd,$member){
		
		$sqlHelper=new sqlHelper();
		
		$sql="select * from mr_members where email='".$email."'";
		
		$arr=$sqlHelper->execute_dql($sql);
		
		if($arr[0]['pwd']==$pwd){
			$member->uid=$arr[0]['uid'];
			$member->username=$arr[0]['username'];
			$member->email=$arr[0]['email'];
			$member->utype=$arr[0]['utype'];
			$member->mobile=$arr[0]['mobile'];
			$member->last_login_time=$arr[0]['last_login_time'];
			$member->reg_time=$arr[0]['reg_time'];
			$member->pwd=$arr[0]['pwd'];
			return true;
		}else {
			return false;
		}
	}
	//用户注册
	function signUp($username,$email,$pwd,$utype){
		$reg_time=date("y-m-d h:i:s",time());
		$sql="insert into mr_members (username,email,pwd,utype,reg_time) values 
				('$username','$email','$pwd','$utype','$reg_time')";
		$sqlHelper=new sqlHelper();
		$sign=$sqlHelper->execute_dml($sql);
		/* echo mysql_error()."".$sign;
		exit(); */
		$sqlHelper->close_conn();
		return $sign;
	}
	//获取所有用户
	function queryAllMember($pagination){
		$sqlHelper=new sqlHelper();
		$start=($pagination->pageNow-1)*$pagination->pageSize;
		$sql1="select * from mr_members limit $start,$pagination->pageSize";
		$sql2="select count(*) from mr_members";
		$sqlHelper->execute_dql_pagination($sql1, $sql2, $pagination);
	}
	
}