<?php
	require_once 'sqlHelper.class.php';
	class resumeService{
		
		//添加简历,未插入uid
		function addResume($arr){
			$sqlHelper=new sqlHelper();
			$time=date('y-m-d h:i:s',time());
			//34字段
			$sql="insert into mr_resume (resumeName,name,gender,topDegree,
				workyear,tel,email,currentState,headPic,expectCity,type,expectPosition,expectSalary,
				companyName,positionName,companyYearStart,companyMonthStart,companyYearEnd,
				companyMonthEnd,projectName,thePost,projectYearStart,projectMonthStart,
				projectYearEnd,projectMonthEnd,projectDescription,schoolName,degree,
				professionalName,schoolYearStart,schoolYearEnd,selfDescription,
				workLink,workDescription,add_time) values ('$arr[0]','$arr[1]','$arr[2]','$arr[3]','$arr[4]',
				'$arr[5]','$arr[6]','$arr[7]','$arr[8]','$arr[9]','$arr[10]','$arr[11]','$arr[12]',
				'$arr[13]','$arr[14]','$arr[15]','$arr[16]','$arr[17]','$arr[18]','$arr[19]',
				'$arr[20]','$arr[21]','$arr[22]','$arr[23]','$arr[24]','$arr[25]','$arr[26]','$arr[27]',
				'$arr[28]','$arr[29]','$arr[30]','$arr[31]','$arr[32]','$arr[33]','$time')";
						
				$sign=$sqlHelper->execute_dml($sql);
				/* echo "错误：".mysql_error();
				exit(); */
			$sqlHelper->close_conn();
			return $sign;
		}
		//根据uid查询简历
		function getResumeByUid($uid){
			
			$sqlHelper=new sqlHelper();
			
			$sql="select * from mr_resume where uid=$uid";
			
			$arr=$sqlHelper->execute_dql($sql);
			$sqlHelper->close_conn();
			return $arr;
			
		}
		
		function updateResumeById($resume_id,$arr){
			
			$sqlHelper=new sqlHelper();
			$time=date("y-m-d h:i:s", time());
			$sql="update mr_resume set resumeName='$arr[0]',name='$arr[1]',gender='$arr[2]',topDegree='$arr[3]',
				workyear='$arr[4]',tel='$arr[5]',email='$arr[6]',currentState='$arr[7]',headPic='$arr[8]',expectCity='$arr[9]',type='$arr[10]',expectPosition='$arr[11]',expectSalary='$arr[12]',
				companyName='$arr[13]',positionName='$arr[14]',companyYearStart='$arr[15]',companyMonthStart='$arr[16]',companyYearEnd='$arr[17]',
				companyMonthEnd='$arr[18]',projectName='$arr[19]',thePost='$arr[20]',projectYearStart='$arr[21]',projectMonthStart='$arr[22]',
				projectYearEnd='$arr[23]',projectMonthEnd='$arr[24]',projectDescription='$arr[25]',schoolName='$arr[26]',degree='$arr[27]',
				professionalName='$arr[28]',schoolYearStart='$arr[29]',schoolYearEnd='$arr[30]',selfDescription='$arr[31]',
				workLink='$arr[32]',workDescription='$arr[33]',add_time='$time' where resume_id=$resume_id";
			$sign=$sqlHelper->execute_dml($sql);
			return $sign;
		}
		//根据jobid来查询收到的简历
		function getResumeByJobid(){
			$sqlHelper=new sqlHelper();
			$sql1="select uid from mr_list where job_id=7";
			$arr1=$sqlHelper->execute_dql($sql1);
			$arr_uid=array();
			$arr_res=array();
			foreach ($arr1 as $key=>$val){
				$arr_uid[]=$val['uid'];
			}
			for($i=0;$i<count($arr_uid);$i++){
			$sql2="select * from mr_resume where uid=$arr_uid[$i]";
			$arr2=$sqlHelper->execute_dql($sql2);
			$arr_res[]=$arr2[0];
			}
			/* echo "<pre>";
			print_r($arr_res);
			echo "</pre>"; */
			return $arr_res;
			
		}
	}