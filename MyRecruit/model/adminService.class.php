<?php
	require_once 'sqlHelper.class.php';
	  class adminService {
		function queryAllAdmin($pagination){
			$sqlHelper=new sqlHelper();
			$start=($pagination->pageNow-1)*$pagination->pageSize;
			$sql1="select * from mr_admin limit $start,$pagination->pageSize";
			$sql2="select count(*) from mr_admin";
			$sqlHelper->execute_dql_pagination($sql1, $sql2, $pagination);
		}
		function getAdminById($admin_id){
			$sqlHelper=new sqlHelper();
			$sql="select * from mr_admin where admin_id=$admin_id";
			$res=$sqlHelper->execute_dql($sql);
			$sqlHelper->close_conn();
			/* print_r($res);
			exit(); */
			return $res;
		}
	}