<?php
require_once 'Pagination.class.php';
	class sqlHelper{
		private $conn;
		private $host="localhost";
		private $user="root";
		private $password="root";
		private $db="myrecruit";
		
		//构造函数
		function sqlHelper(){
			//建立连接
			$this->conn=mysql_connect($this->host,$this->user,$this->password);
			if(!$this->conn){
				die("连接失败".mysql_errno());
			}
			//选择数据库
			mysql_select_db($this->db,$this->conn);
			mysql_query("set names utf8");
		}
		
		//查询
		function execute_dql($sql){
			
			
			$res=mysql_query($sql) or die(mysql_errno());
			$arr=array();
			while ($row=mysql_fetch_assoc($res)){
				$arr[]=$row;
			}
			mysql_free_result($res);
			return $arr;
		}
		
		//分页查询
		public function execute_dql_pagination($sql1,$sql2,$pagination){
			
			//要分页显示的数据
			$res=mysql_query($sql1,$this->conn) or die(mysql_error());
			
			$arr=array();
			while ($row=mysql_fetch_assoc($res)){
				$arr[]=$row;
			}
			
			//把$arr赋值给pagination
			$pagination->res_array=$arr;
			
			mysql_free_result($res);
			
			$res=mysql_query($sql2,$this->conn) or die(mysql_error());
			
			if ($row=mysql_fetch_row($res)){
				$pagination->pageCount=ceil($row[0]/$pagination->pageSize);
				$pagination->rowCount=$row[0];
			}
			
			$navigate= "<a class='current' href='$pagination->gotoURL?pageNow=1'>首页</a>&nbsp;&nbsp;";
			
			if ($pagination->pageNow>1){
				$prePage=$pagination->pageNow-1;
				$navigate.= "<a href='$pagination->gotoURL?pageNow=$prePage'>上一页</a>&nbsp;&nbsp;";
			}
			
			if($pagination->pageNow<$pagination->pageCount){
			
			$nextPage=$pagination->pageNow+1;
			$navigate.= "<a href='$pagination->gotoURL?pageNow=$nextPage'>下一页</a>&nbsp;&nbsp;";
			}
			
			$navigate.= "<a href='$pagination->gotoURL?pageNow=$pagination->pageCount'>末页</a>&nbsp;&nbsp;";
			$navigate.= "第{$pagination->pageNow}页/共{$pagination->pageCount}页";
			$navigate.="<form method='post' action='$pagination->gotoURL'><input style='width:50px' type='text' name='pageNow'><input type='submit' value='Go'></form>";
			$pagination->navigate=$navigate;
		}
		
		//增删改
		 function execute_dml($sql){
			
			$b=mysql_query($sql,$this->conn);
			if(!$b){
				return 0;//失败
			}else {
				if(mysql_affected_rows($this->conn)>0){
					return 1;//成功
				}else{
					return 2;//没有影响行数
				} 
			}
		}
		
		function close_conn(){
			
			if(!empty($this->conn)){
			mysql_close($this->conn);	
			}
		}
		
	}	
?>	
	
