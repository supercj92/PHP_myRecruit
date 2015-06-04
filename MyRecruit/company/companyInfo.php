
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
            <?php 
            	require_once '../model/companyService.class.php';
            	$company=new companyService();
            	//这里为动态传入uid
            	$arr=$company->getComInfoByUid(1);
            	/* echo "<pre>";
            	print_r($arr);
            	echo "</pre>"; */
            ?>
            
            <div class="content_mid">
        	<dl class="c_section c_section_mid">
                <dt>
                    <h2><em></em>完善公司信息</h2>
                </dt>
                <dd>
	                <form action="../controller/companyProcess.php" method="post" enctype="multipart/form-data" >
	                	<div class="c_text_1">基本信息为必填项，是求职者加速了解公司的窗口，认真填写吧！</div>
	                 	
	                    <h3>选择公司logo图片<span>
	                    <input type="file" name="comLogo"  >
	                    </span></h3>
	                    
	                    <h3>公司全称 <span>
	                    <input type="text" value="<?php echo $arr[0]['comp_fullname'] ?>" name="fullname"></span></h3>
	                    
	                    <h3>公司简称</h3> <!--非必填-->
	                    <input type="text" placeholder="请输入公司简称，如:拉勾" value="<?php echo $arr[0]['comp_name'] ?>" name="name" id="name" class="valid">	
	                    
	                    <!--非必填改必填-->
	                   	
	                    
	                    <h3>公司网址</h3>
	                    <input type="text" placeholder="请输入公司网址" value="<?php echo $arr[0]['comp_website']?>" name="website" id="website">	
	                    
	                    <h3>所在城市</h3>
	                    <input type="text" placeholder="请输入工作城市，如：北京" value="<?php echo $arr[0]['comp_city']?>" name="city" >	
	                    
	                    <h3>行业领域</h3>
	                    <div>
		                    <input type="hidden" value="<?php echo $arr[0]['comp_industry']?>" name="select_industry_hidden" id="select_industry_hidden">
		                    		                    	<input type="button" value="<?php echo $arr[0]['comp_industry']?>" name="select_industry" id="select_industry" class="select">
		                    		                    <div class="dn" id="box_industry" style="display: none;">
		                        <ul class="reset">
		                        			                        		<li>移动互联网</li>
		                            		                        		<li>电子商务</li>
		                            		                        		<li>社交</li>
		                            		                        		<li>企业服务</li>
		                            		                        		<li>O2O</li>
		                            		                        		<li>教育</li>
		                            		                        		<li>文化艺术</li>
		                            		                        		<li>游戏</li>
		                            		                        		<li>在线旅游</li>
		                            		                        		<li>金融互联网</li>
		                            		                        		<li>健康医疗</li>
		                            		                        		<li>生活服务</li>
		                            		                        		<li>硬件</li>
		                            		                        		<li>搜索</li>
		                            		                        		<li>安全</li>
		                            		                        		<li>运动体育</li>
		                            		                        		<li>云计算\大数据</li>
		                            		                        		<li>移动广告</li>
		                            		                        		<li>社会化营销</li>
		                            		                        		<li>视频多媒体</li>
		                            		                        		<li>媒体</li>
		                            		                        		<li>智能家居</li>
		                            		                        		<li>智能电视</li>
		                            		                        		<li>分类信息</li>
		                            		                        		<li>招聘</li>
		                            		                        </ul>
		                    </div>	
	                    </div>
	                    
	                    <h3>公司规模</h3>
	                    <div>
		                    <input type="hidden" value="<?php echo $arr[0]['comp_scale']?>" name="select_scale_hidden" id="select_scale_hidden">
		                    <input type="button" value="<?php echo $arr[0]['comp_scale']?>" id="select_scale" class="select">
		                    <div class="dn" id="box_scale" style="display: none;">
		                        <ul class="reset">
		                        			                            	<li>少于15人</li>
		                            		                            	<li>15-50人</li>
		                            		                            	<li>50-150人</li>
		                            		                            	<li>150-500人</li>
		                            		                            	<li>500-2000人</li>
		                            		                            	<li>2000人以上</li>
		                            		                        </ul>
		                    </div>	
	                    </div>
	                    
	                    <h3>发展阶段</h3> 
	                    <div>
		                    <input type="hidden" id="s_radio_hidden" name="s_radio_hidden" value="<?php echo $arr[0]['comp_stage']?>">
		                    <ul class="s_radio clearfix s_radio_ex">
		                        		                        	<li>未融资</li>
		                        		                        	<li>天使轮</li>
		                        		                        	<li>A轮</li>
		                        		                        	<li>B轮</li>
		                        		                        	<li>C轮</li>
		                        		                        	<li>D轮及以上</li>
		                        		                        	<li>上市公司</li>
		                        		                    </ul>
	                    </div>
	                    
	                   
	                    
	                    <h3>一句话介绍</h3> 
	                    <input type="text" value="<?php echo $arr[0]['temptation']?>" placeholder="一句话概括公司亮点，如公司愿景、领导团队等，限50字" maxlength="50" name="temptation" id="temptation">	
	                    <span style="display:none;" class="error" id="beError"></span>
	                   <!--  <input type="hidden" id="companyId" name="companyId" value=""> -->
	                   <input type="hidden" name="flag" value="addC">
	                    <input type="submit" value="完善公司信息"  class="btn_big fr">
	                   
	                </form>
                </dd>
            </dl>
       	</div>
            
            </div>
            	<!-- end .content -->
<script src="style/js/job_list.min.js" type="text/javascript"></script> 
			<div class="clear"></div>
			<input type="hidden" value="74fb1ce14ebf4e2495270b0fbad64704" id="resubmitToken">
	    	<a rel="nofollow" title="回到顶部" id="backtop"></a>
	    </div><!-- end #container -->
	</div><!-- end #body -->
	<?php
		include_once '../templates/footer.tpl';
	?>

<script src="style/js/core.min.js" type="text/javascript"></script>
<script src="style/js/popup.min.js" type="text/javascript"></script>
<script src="style/js/tongji.js" type="text/javascript"></script>
<!--  -->
<script src="style/js/analytics01.js" type="text/javascript"></script><script type="text/javascript" src="style/js/h.js"></script>


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>