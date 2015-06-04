<?php /* Smarty version 2.6.18, created on 2015-05-09 10:12:22
         compiled from ../templates/jobsList.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "realHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div id="container">
        	  	
        <div class="clearfix">
            <div class="content_l recommend_list">
            	
            	
            		
            	
            	
            	
            	<ul class="hot_pos reset">
            	
            		<?php unset($this->_sections['n']);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['start'] = (int)0;
$this->_sections['n']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['arr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['n']['show'] = true;
$this->_sections['n']['max'] = $this->_sections['n']['loop'];
if ($this->_sections['n']['start'] < 0)
    $this->_sections['n']['start'] = max($this->_sections['n']['step'] > 0 ? 0 : -1, $this->_sections['n']['loop'] + $this->_sections['n']['start']);
else
    $this->_sections['n']['start'] = min($this->_sections['n']['start'], $this->_sections['n']['step'] > 0 ? $this->_sections['n']['loop'] : $this->_sections['n']['loop']-1);
if ($this->_sections['n']['show']) {
    $this->_sections['n']['total'] = min(ceil(($this->_sections['n']['step'] > 0 ? $this->_sections['n']['loop'] - $this->_sections['n']['start'] : $this->_sections['n']['start']+1)/abs($this->_sections['n']['step'])), $this->_sections['n']['max']);
    if ($this->_sections['n']['total'] == 0)
        $this->_sections['n']['show'] = false;
} else
    $this->_sections['n']['total'] = 0;
if ($this->_sections['n']['show']):

            for ($this->_sections['n']['index'] = $this->_sections['n']['start'], $this->_sections['n']['iteration'] = 1;
                 $this->_sections['n']['iteration'] <= $this->_sections['n']['total'];
                 $this->_sections['n']['index'] += $this->_sections['n']['step'], $this->_sections['n']['iteration']++):
$this->_sections['n']['rownum'] = $this->_sections['n']['iteration'];
$this->_sections['n']['index_prev'] = $this->_sections['n']['index'] - $this->_sections['n']['step'];
$this->_sections['n']['index_next'] = $this->_sections['n']['index'] + $this->_sections['n']['step'];
$this->_sections['n']['first']      = ($this->_sections['n']['iteration'] == 1);
$this->_sections['n']['last']       = ($this->_sections['n']['iteration'] == $this->_sections['n']['total']);
?>
            		<?php if ($this->_sections['n']['index']%2 == 0): ?>
            		
            		
	            		            		<li class="clearfix">
		            <div class="hot_pos_l">
			                    	 <div class="mb10">
			                        	<a target="_blank" href="/myrecruit/controller/jobDetailPro.php?jobid=<?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['job_id']; ?>
"><?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['positionName']; ?>
</a> 
			                            &nbsp;
			                            <span class="c9">[<?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['workAddress']; ?>
]</span>
			                            			                        </div>
			                        <span><em class="c7">月薪:</em> <?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['salaryMin']; ?>
k-<?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['salaryMax']; ?>
k</span>
			                        <span><em class="c7">经验:</em> <?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['workYear']; ?>
</span>
			                        <span><em class="c7">最低学历:</em><?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['education']; ?>
</span>
			                        <br>
			                        <span><em class="c7">职业诱惑:</em> <?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['positionAdvantage']; ?>
</span>
			                        <br>
				                    <span><?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['add_time']; ?>
</span>
			                        
			                    </div>
			                	
			                	<?php else: ?>
			                	
			        <div class="hot_pos_r">
			                    	
			                      <div class="mb10">
			                        	<a target="_blank" href="/myrecruit/controller/jobDetailPro.php?jobid=<?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['job_id']; ?>
"><?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['positionName']; ?>
</a> 
			                            &nbsp;
			                            <span class="c9">[<?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['workAddress']; ?>
]</span>
			                            			                        </div>
			                        <span><em class="c7">月薪:</em> <?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['salaryMin']; ?>
k-<?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['salaryMax']; ?>
k</span>
			                        <span><em class="c7">经验:</em> <?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['workYear']; ?>
</span>
			                        <span><em class="c7">最低学历:</em><?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['education']; ?>
</span>
			                        <br>
			                        <span><em class="c7">职业诱惑:</em> <?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['positionAdvantage']; ?>
</span>
			                        <br>
				                    <span><?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['add_time']; ?>
</span>
			                       
			                    </div>
			                </li>
			                <?php endif; ?>
			                	 <?php endfor; endif; ?>    
	                		      	            				            		
	                		                	            </ul>
	            
	            <form id="searchForm"></form>
	                               <?php echo $this->_tpl_vars['navigate']; ?>

                            </div>	
            <div class="content_r" style="height:925px;background:url('style/css/img/subscribe_bg.jpg') repeat;">
            	
            	<dl style="height:50%;font-size:24px">
            		<dd style="line-height:100px;text-align:center">我</dd>
            		<dd style="line-height:100px;text-align:center">是</dd>
            		<dd style="line-height:100px;text-align:center">广</dd>
            		<dd style="line-height:100px;text-align:center">告</dd>
            	</dl>
            </div>
           
      <input type="hidden" id="userid" name="userid" value="314873">

			<div class="clear"></div>
			<input type="hidden" value="" id="resubmitToken">
	    	<a rel="nofollow" title="閸ョ偛鍩屾い鍫曞劥" id="backtop" style="display: none;"></a>
	    </div><!-- end #container -->
	</div><!-- end #body -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script src="style/js/core.min.js" type="text/javascript"></script>
<script src="style/js/popup.min.js" type="text/javascript"></script>

<!--  -->



<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>