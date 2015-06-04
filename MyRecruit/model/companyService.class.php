<?php
require_once 'sqlHelper.class.php';
require_once 'Pagination.class.php';
	class companyService{
		function addComInfo($arr,$uid){
			$sqlHelper=new sqlHelper();
			$time=date("y-m-d h:i:s",time());
			$sql="update mr_company set comp_fullname='$arr[0]',comp_name='$arr[1]',comp_website='$arr[2]',comp_city='$arr[3]',
comp_industry='$arr[4]',comp_scale='$arr[5]',comp_stage='$arr[6]',temptation='$arr[7]',add_time='$time',comp_logo='$arr[9]' where uid=$uid ";
			/* echo $sql;
			exit(); */
			$sign=$sqlHelper->execute_dml($sql);
			echo mysql_error();
			exit();
			return $sign;
		}
		//根据公司用户id获取公司信息
		function getComInfoByUid($uid){
			$sqlHelper=new sqlHelper();
			$sql="select * from mr_company where uid=$uid";
			$arr=$sqlHelper->execute_dql($sql);
			$sqlHelper->close_conn();
			return $arr;	
		}
		//根据公司id获取公司信息
		function getComInfoByCompId($comp_id){
			$sqlHelper=new sqlHelper();
			$sql="select * from mr_company where comp_id=$comp_id";
			$arr=$sqlHelper->execute_dql($sql);
			$sqlHelper->close_conn();
			return $arr;
		}
		//分页显示公司信息
		function getCompanyPagination($pagination,$comp_city,$comp_stage,$comp_industry){
			$sqlHelper=new sqlHelper();
			$start=($pagination->pageNow-1)*$pagination->pageSize;
			
			$sql1="select * from mr_company  ";
			$sql2="select count(comp_id) from mr_company";
			if(!empty($comp_city)){
				$sql1.=" where comp_city='$comp_city'";
				$sql2.=" where comp_city='$comp_city'";
			}
			if(!empty($comp_stage)){
				$sql1.=" where comp_stage='$comp_stage'";
				$sql2.=" where comp_stage='$comp_stage'";
			}
			if(!empty($comp_industry)){
				$sql1.=" where comp_industry='$comp_industry'";
				$sql2.=" where comp_industry='$comp_industry'";
			}
				$sql1.=" limit ".$start.",$pagination->pageSize";
				/* echo $sql1;
				exit(); */
			$sqlHelper->execute_dql_pagination($sql1, $sql2, $pagination);
		}
		//获取公司信息数组，返回pagination对象
		
		function getCompPagi($pagination){
			$sqlHelper=new sqlHelper();
			$start=($pagination->pageNow-1)*$pagination->pageSize;
			$sql1="select * from mr_company limit ".$start.",$pagination->pageSize";
			$sql2="select count(*) from mr_company";
			$sqlHelper->execute_dql_pagination($sql1, $sql2, $pagination);
		}
		
	}