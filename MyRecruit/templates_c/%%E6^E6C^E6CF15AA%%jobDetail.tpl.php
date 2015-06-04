<?php /* Smarty version 2.6.18, created on 2015-05-13 21:14:01
         compiled from jobDetail.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "realHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- end #header -->
    <div id="container">
                <div class="clearfix">

            <div class="content_l">
            	                <dl class="job_detail">
                    <dt>
                        <h1 title="">
                            <em></em>
                                  
                      	<div>  <?php echo $this->_tpl_vars['arr'][0]['companyname']; ?>
</div>
							<?php echo $this->_tpl_vars['arr'][0]['positionName']; ?>

                           	                        
                        </h1>
                      
                       	                    </dt>
                    <dd class="job_request">
                    	<span class="red"><?php echo $this->_tpl_vars['arr'][0]['salaryMin']; ?>
k-<?php echo $this->_tpl_vars['arr'][0]['salaryMax']; ?>
k</span>
                       	<span><?php echo $this->_tpl_vars['arr'][0]['workAddress']; ?>
</span> 
                       	<span><?php echo $this->_tpl_vars['arr'][0]['workYear']; ?>
 </span>
                       	<span> <?php echo $this->_tpl_vars['arr'][0]['education']; ?>
</span> 
                       	<span><?php echo $this->_tpl_vars['arr'][0]['jobNature']; ?>
</span><br>
                      	  职位诱惑 :  <?php echo $this->_tpl_vars['arr'][0]['positionAdvantage']; ?>

                      	<div> <?php echo $this->_tpl_vars['arr'][0]['add_time']; ?>
</div>
                    </dd>
                    <dd class="job_bt">
                        <h3 class="description"> 职位描述</h3>
                       <?php echo $this->_tpl_vars['arr'][0]['positionDetail']; ?>

                    </dd>
                     
                                        	<!-- 用户是否激活 0-否；1-是 -->
	                			       									                   
				               				            	                                                     
                                        <dd>
                                        	                    				                   		<!-- 用户是否激活 0-否；1-是 -->
		                				                   			
	                   					                        									                 	<a title="投个简历" class="btn fr btn_apply" href="/myrecruit/controller/listPro.php?jobid=<?php echo $this->_tpl_vars['arr'][0]['job_id']; ?>
">投个简历</a>
						                	                        				                        	
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
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>



<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>