<?php
	
	require_once 'sqlHelper.class.php';
	require_once 'Pagination.class.php';
	
	class jobsService{
		
		//添加jobs
		//未传入uid
		function addJobs($arr){
			
			$sqlHelper=new sqlHelper();
			/* $positionType,$positionName,$department,$salaryMax,$salaryMin,
			$workAddress,$positionAdvantage,$positionAddress,$forwardEmail,$positionDetail,
			$workYear,$education,$companyName,jobNature */
			$time=date('y-m-d h:i:s',time());
			
			$sql="insert into mr_jobs (positionType,positionName,department,salaryMax
			,salaryMin,workAddress,positionAdvantage,positionAddress,forwardEmail,positionDetail,
			workYear,education,companyName,jobNature,add_time,isValid) values ('$arr[0]','$arr[1]','$arr[2]','$arr[3]','$arr[4]','$arr[5]',
			'$arr[6]','$arr[7]','$arr[8]','$arr[9]','$arr[10]','$arr[11]','$arr[12]','$arr[13]','$time',1)";
						
			return 	$sqlHelper->execute_dml($sql);
		}
		
		//查询有效职位
		function getValidJobs(){
			
			$sqlHelper=new sqlHelper();
			
			$sql="select * from mr_jobs where isValid=1 order by add_time desc ";
			
			$arr=$sqlHelper->execute_dql($sql);
			$sqlHelper->close_conn();
		return $arr;
		}
		//查询无效职位
		function getInvalidJobs(){
			$sqlHelper=new sqlHelper();
				
			$sql="select * from mr_jobs where isValid=0 order by add_time desc ";
				
			$arr=$sqlHelper->execute_dql($sql);
			$sqlHelper->close_conn();
			return $arr;
			
		}
		
		
		//根据job_id删除职位
		function deleteJobById($job_id){
			
			$sqlHelper=new sqlHelper();
			$sql="delete from mr_jobs where job_id=$job_id";
			
		return 	$sqlHelper->execute_dml($sql);
			
		}
		//根据job_id下线，上线职位
		function offlineJObById($isValid,$job_id){
			$sqlHelper=new sqlHelper();
			$sql="update mr_jobs set isValid=$isValid where job_id=$job_id";
			$sign=$sqlHelper->execute_dml($sql);
			return $sign;
		}
		//根据job_id查询职位信息
		function getJobById($job_id){
			$sqlHelper=new sqlHelper();
			$sql="select * from mr_jobs where job_id=$job_id";
			$arr=$sqlHelper->execute_dql($sql);
			$sqlHelper->close_conn();
			return $arr;
		}
		//更新职位信息
		function updateJob($job_id,$arr){
			$sqlHelper=new sqlHelper();
			/* $positionType,$positionName,$department,$salaryMax,$salaryMin,
			$workAddress,$positionAdvantage,$positionAddress,$forwardEmail,
			$positionDetail,$workYear,$education,$companyName,$jobNature */
			$sql="update mr_jobs set positionType='$arr[0]',positionName='$arr[1]',department='$arr[2]',salaryMax='$arr[3]'
			,salaryMin='$arr[4]',workAddress='$arr[5]',positionAdvantage='$arr[6]',positionAddress='$arr[7]',forwardEmail='$arr[8]',positionDetail='$arr[9]',
			workYear='$arr[10]',education='$arr[11]',companyName='$arr[12]',jobNature='$arr[13]' where job_id=$job_id";
			
			$sign=$sqlHelper->execute_dml($sql);
			$sqlHelper->close_conn();
			return $sign;
			
		}
		//根据pageNow获取结果集
		function getResArrByPageNow($pagination){
			$start=($pagination->pageNow-1)*$pagination->pageSize;
			$sql1="select * from mr_jobs order by add_time desc limit ".$start.",$pagination->pageSize";
			$sql2="select count(*) from mr_jobs";
			$sqlHelper=new sqlHelper();
			$sqlHelper->execute_dql_pagination($sql1, $sql2, $pagination);
		}
		//根据条件进行查询
		function getResArrByCondition($pagination,$positionName){
			$start=($pagination->pageNow-1)*$pagination->pageSize;
			$sql1="select * from mr_jobs where positionName='".$positionName."' limit ".$start.",$pagination->pageSize ";
			$sql2="select count(*) from mr_jobs where positionName='".$positionName."'";
			$sqlHelper=new sqlHelper();
			$sqlHelper->execute_dql_pagination($sql1, $sql2, $pagination);
		}
		
		
		//获取首页结果集
		function getIndexResArr(){
			$sql="select  *  from mr_jobs order by add_time desc limit 10";
			$sqlHelper=new sqlHelper();
			$arr=$sqlHelper->execute_dql($sql);
			$sqlHelper->close_conn();
			
			return $arr;
		}
		//投简历功能
		function postResume($uid,$job_id){
			$sqlHelper=new sqlHelper();
			$sql="insert into mr_list (uid,job_id) values($uid,$job_id)";
			/* echo $sql;
			exit(); */
			$sign=$sqlHelper->execute_dml($sql);
			/* echo mysql_error();
			exit(); */
			$sqlHelper->close_conn();
			return $sign;
		}
		//根据uid获取job数组
		function postedJobs() {
			
			$sqlHelper=new sqlHelper();
			$sql1="select job_id from mr_list where uid=3";
			$arr1=$sqlHelper->execute_dql($sql1);
			
			
			$arr_jobid=array();
			$arr_res=array();
			foreach ($arr1 as $key=>$val){
				$arr_jobid[]=$val['job_id'];
			}
			/* echo "<pre>";
			print_r($arr_jobid);
			echo "</pre>";
			exit(); */
			for($i=0;$i<count($arr_jobid);$i++){
				$sql2="select * from mr_jobs where job_id=$arr_jobid[$i]";
				
				$arr_jobs=$sqlHelper->execute_dql($sql2);
				
				$arr_res[]=$arr_jobs[0];
				
			}
			
			return $arr_res;
		}
		//根据job_id来删除mr_list
		function removeList($list_id){
			$sqlHelper=new sqlHelper();
			$sql="delete from mr_list where list_id=$list_id";
			$sign=$sqlHelper->execute_dml($sql);
			return $sign;
			
		}
		
	}
	
?>