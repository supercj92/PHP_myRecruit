<{include file="realHeader.tpl"}>
<!-- end #header -->
    <div id="container">
                <div class="clearfix">

            <div class="content_l">
            	                <dl class="job_detail">
                    <dt>
                        <h1 title="">
                            <em></em>
                                  
                      	<div>  <{$arr[0].companyname}></div>
							<{$arr[0].positionName}>
                           	                        
                        </h1>
                      
                       	                    </dt>
                    <dd class="job_request">
                    	<span class="red"><{$arr[0].salaryMin}>k-<{$arr[0].salaryMax}>k</span>
                       	<span><{$arr[0].workAddress}></span> 
                       	<span><{$arr[0].workYear}> </span>
                       	<span> <{$arr[0].education}></span> 
                       	<span><{$arr[0].jobNature}></span><br>
                      	  职位诱惑 :  <{$arr[0].positionAdvantage}>
                      	<div> <{$arr[0].add_time}></div>
                    </dd>
                    <dd class="job_bt">
                        <h3 class="description"> 职位描述</h3>
                       <{$arr[0].positionDetail}>
                    </dd>
                     
                                        	<!-- 用户是否激活 0-否；1-是 -->
	                			       									                   
				               				            	                                                     
                                        <dd>
                                        	                    				                   		<!-- 用户是否激活 0-否；1-是 -->
		                				                   			
	                   					                        									                 	<a title="投个简历" class="btn fr btn_apply" href="/myrecruit/controller/listPro.php?jobid=<{$arr[0].job_id}>">投个简历</a>
						                	                        				                        	
		                        	                        	                   		                	                </dd>
                </dl>
                                <div id="weibolist"></div>
            </div>	
       	</div>                    
    
	
		<div id="tipOverlay"></div>
<!-------------------------------------弹窗lightbox  ----------------------------------------->


	
<!------------------------------------- end ----------------------------------------->




			<div class="clear"></div>
			<input type="hidden" value="6c401d88d0e34445a3482fa27afe4d77" id="resubmitToken">
	    	<a rel="nofollow" title="回到顶部" id="backtop" style="display: inline;"></a>
	    </div><!-- end #container -->
	</div><!-- end #body -->
	<{include file="footer.tpl"}>



<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>