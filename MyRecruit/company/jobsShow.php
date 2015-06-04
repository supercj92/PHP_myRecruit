
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
	require_once "../model/jobsService.class.php";
	
	$jobs=new jobsService();
	$arr=$jobs->getValidJobs();
	$num=count($arr);
	?>
                            
                           有效职位 <span>（共<i style="color:#fff;font-style:normal" id="positionNumber"><?php echo $num ?></i>个）</span>                        </h1>
                    </dt>
                    <dd>
                    		                    	<form id="searchForm">
	                    		<input type="hidden" value="Publish" name="type">
			                	<ul class="reset my_jobs">
			                	
	
	<?php
	for($i=0;$i<count($arr);$i++){
		
		$arrIt=$arr[$i];
		$companyname=$arrIt['companyname'];
		$add_time=$arrIt['add_time'];
		$jobNature=$arrIt['jobNature'];
		$salaryMin=$arrIt['salaryMin'];
		$salaryMax=$arrIt['salaryMax'];
		$workYear=$arrIt['workYear'];
		$education=$arrIt['education'];
		$job_id=$arrIt['job_id'];
		$workAddress=$arrIt['workAddress'];
		echo	"<li data-id='149594'>
		                                    <h3>
							
		                                      <a>  $companyname</a>
		                                        <span>$workAddress</span>
		                                        						                        		                                    </h3>
		                                    		                                  		
		                                  			                                    <div>$jobNature / {$salaryMin}k-{$salaryMax}k / $workYear / $education</div>
		                                    		                                    				                                    <div class='c9'>发布时间： $add_time</div>
			                                    		                                    		                                    		                                    <div class='links'>
		                                    			                                       	
		                                       		                                  	<a target='_self' class='job_edit' href='updateJob.php?job_id=$job_id'>编辑</a>
		                                       	<a  class='job_del' href='../controller/jobsProcess.php?flag=offline&job_id=$job_id&isValid=0'>下线</a>                      
		                                        <a class='job_del' href='../controller/jobsProcess.php?flag=delete&job_id=$job_id'>删除</a>
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


<script type="text/javascript">
$(function(){
	$('#noticeDot-1').hide();
	$('#noticeTip a.closeNT').click(function(){
		$(this).parent().hide();
	});
});
var index = Math.floor(Math.random() * 2);
var ipArray = new Array('42.62.79.226','42.62.79.227');
var url = "ws://" + ipArray[index] + ":18080/wsServlet?code=314873";
var CallCenter = {
		init:function(url){
			var _websocket = new WebSocket(url);
			_websocket.onopen = function(evt) {
				console.log("Connected to WebSocket server.");
			};
			_websocket.onclose = function(evt) {
				console.log("Disconnected");
			};
			_websocket.onmessage = function(evt) {
				//alert(evt.data);
				var notice = jQuery.parseJSON(evt.data);
				if(notice.status[0] == 0){
					$('#noticeDot-0').hide();
					$('#noticeTip').hide();
					$('#noticeNo').text('').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
					$('#noticeNoPage').text('').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
				}else{
					$('#noticeDot-0').show();
					$('#noticeTip strong').text(notice.status[0]);
					$('#noticeTip').show();
					$('#noticeNo').text('('+notice.status[0]+')').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
					$('#noticeNoPage').text(' ('+notice.status[0]+')').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
				}
				$('#noticeDot-1').hide();
			};
			_websocket.onerror = function(evt) {
				console.log('Error occured: ' + evt);
			};
		}
};
CallCenter.init(url);
</script>

<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>