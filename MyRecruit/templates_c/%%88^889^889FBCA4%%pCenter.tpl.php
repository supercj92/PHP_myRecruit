<?php /* Smarty version 2.6.18, created on 2015-05-09 10:26:48
         compiled from pCenter.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "afterHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<!-- end #header -->
    <div id="container">
                	
                	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pSidebar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                	<!-- end .sidebar -->
            <div class="content">
            	<dl class="company_center_content">
                    <dt>
                        <h1>
                            <em></em>
                          
                            
                         个人资料 <span><i style="color:#fff;font-style:normal" id="positionNumber"></i></span>                        </h1>
                    </dt>
                    <dd>
                    <dl style="padding-left:50px;">
                    <dd style="font-size: 18px;
line-height: 28px;
color: #777;">
                      用户名： <?php echo $this->_tpl_vars['member']->username; ?>

                      </dd>
                      <dd style="font-size: 18px;
line-height: 28px;
color: #777;padding-top:20px">
        邮箱：<?php echo $this->_tpl_vars['member']->email; ?>

        </dd>
        <dd style="font-size: 18px;
line-height: 28px;
color: #777;padding-top:20px">
        上次登陆时间：<?php echo $this->_tpl_vars['member']->last_login_time; ?>

        </dd>
        <dd style="font-size: 18px;
line-height: 28px;
color: #777;padding-top:20px">
        注册时间:<?php echo $this->_tpl_vars['member']->reg_time; ?>

        </dd>
        <dd style="font-size: 18px;
line-height: 28px;
color: #777;padding-top:20px">
        用户类型：<?php echo $this->_tpl_vars['member']->utype; ?>

        </dd>
        </dl>
		                                    </dd>
                </dl>
            </div><!-- end .content -->

			<div class="clear"></div>
			<input type="hidden" value="74fb1ce14ebf4e2495270b0fbad64704" id="resubmitToken">
	    	<a rel="nofollow" title="回到顶部" id="backtop"></a>
	    </div><!-- end #container -->
	</div><!-- end #body -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>