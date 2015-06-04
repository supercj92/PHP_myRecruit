
	<?php 
		include_once '../templates/afterHeader.tpl';
	?>
	<!-- end #header -->
    <div id="container">
                	
                	<?php 
                	include_once '../templates/sideBar.tpl';
                	?>
                	<!-- end .sidebar -->
            <div class="content">
            	<dl class="company_center_content">
                    <dt>
                        <h1>
                            <em></em>
                            <?php 
	require_once "../model/resumeService.class.php";
	$resumeS=new resumeService();
	
	$arr=$resumeS->getResumeByJobid();
	$num=count($arr);
	?>
                            
                           收到的简历 <span>（共<i style="color:#fff;font-style:normal" id="positionNumber"><?php echo $num ?></i>个）</span>                        </h1>
                    </dt>
                    <dd>
                    		                    	<form id="searchForm">
	                    		<input type="hidden" value="Publish" name="type">
			                	<ul class="reset my_jobs">
			                	
	
	<?php
	
/* 	echo "<pre>";
	 print_r($arr);
	echo "</pre>"; */
	
	for($i=0;$i<count($arr);$i++){
		
		$arrIt=$arr[$i];
		$companyname=$arrIt['expectPosition'];
		$add_time=$arrIt['add_time'];
		$jobNature=$arrIt['type'];
		$salaryMin=$arrIt['expectSalary'];
		//$salaryMax=$arrIt['salaryMax'];
		$workYear=$arrIt['workYear'];
		$education=$arrIt['schoolName'];
		$job_id=$arrIt['resume_id'];
		$workAddress=$arrIt['currentState'];
		echo	"<li data-id='149594'>
		                                    <h3>
							
		                                      <a>  $companyname</a>
		                                        <span>$workAddress</span>
		                                        						                        		                                    </h3>
		                                    		                                  		
		                                  			                                    <div>$jobNature / {$salaryMin}/ $workYear / $education</div>
		                                    		                                    				                                    <div class='c9'>发布时间： $add_time</div>
			                                    		                                    		                                    		                                    <div class='links'>
		                                    			                                       	
		                                       		                                                    
		                                        <a class='job_del' href=''>删除</a>
		                                    </div>
		                                    		                                </li>";
		
	}
	
	
?>				          
				                			                            <!-- 	<li data-id="149594">
		                                    <h3>
		                                        <a target="_blank" title="随便写" href="http://www.lagou.com/jobs/149594.html">随便写</a> 
		                                        <span>[上海]</span>
		                                        						                        		                                    </h3>
		                                    		                                  		<span class="receivedResumeNo"><a href="unHandleResumes.html?positionId=149594">应聘简历（1）</a></span>
		                                  			                                    <div>兼职 / 1k-2k / 1-3年 / 硕士及以上</div>
		                                    		                                    				                                    <div class="c9">发布时间： 2014-07-01 17:07:01</div>
			                                    		                                    		                                    		                                    <div class="links">
		                                    			                                       	<a class="job_refresh" href="javascript:void(0)">刷新<span>每个职位7天内只能刷新一次</span></a>
		                                       			                                       	<a target="_blank" class="job_edit" href="create.html?positionId=149594">编辑</a>
		                                       	<a class="job_offline" href="javascript:void(0)">下线</a>                      
		                                        <a class="job_del" href="javascript:void(0)">删除</a>
		                                    </div>
		                                    		                                </li> -->
	                                	                           	</ul>
			                    			                </form>
		                                    </dd>
                </dl>
            </div><!-- end .content -->

			<div class="clear"></div>
			<input type="hidden" value="74fb1ce14ebf4e2495270b0fbad64704" id="resubmitToken">
	    	<a rel="nofollow" title="回到顶部" id="backtop"></a>
	    </div><!-- end #container -->
	</div><!-- end #body -->
	<?php
		include_once '../templates/footer.tpl';
	?>




<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>