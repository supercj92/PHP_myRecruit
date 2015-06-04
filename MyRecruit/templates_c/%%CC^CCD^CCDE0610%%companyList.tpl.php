<?php /* Smarty version 2.6.18, created on 2015-05-09 10:13:26
         compiled from ../templates/companyList.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "realHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $this->assign('i', "-1"); ?>
<!-- end #header -->
    <div id="container">
        
        <div class="clearfix">
            <div class="content_l">
					
				
					<?php unset($this->_sections['com']);
$this->_sections['com']['loop'] = is_array($_loop=$this->_tpl_vars['arr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['com']['name'] = 'com';
$this->_sections['com']['max'] = (int)3;
$this->_sections['com']['show'] = true;
if ($this->_sections['com']['max'] < 0)
    $this->_sections['com']['max'] = $this->_sections['com']['loop'];
$this->_sections['com']['step'] = 1;
$this->_sections['com']['start'] = $this->_sections['com']['step'] > 0 ? 0 : $this->_sections['com']['loop']-1;
if ($this->_sections['com']['show']) {
    $this->_sections['com']['total'] = min(ceil(($this->_sections['com']['step'] > 0 ? $this->_sections['com']['loop'] - $this->_sections['com']['start'] : $this->_sections['com']['start']+1)/abs($this->_sections['com']['step'])), $this->_sections['com']['max']);
    if ($this->_sections['com']['total'] == 0)
        $this->_sections['com']['show'] = false;
} else
    $this->_sections['com']['total'] = 0;
if ($this->_sections['com']['show']):

            for ($this->_sections['com']['index'] = $this->_sections['com']['start'], $this->_sections['com']['iteration'] = 1;
                 $this->_sections['com']['iteration'] <= $this->_sections['com']['total'];
                 $this->_sections['com']['index'] += $this->_sections['com']['step'], $this->_sections['com']['iteration']++):
$this->_sections['com']['rownum'] = $this->_sections['com']['iteration'];
$this->_sections['com']['index_prev'] = $this->_sections['com']['index'] - $this->_sections['com']['step'];
$this->_sections['com']['index_next'] = $this->_sections['com']['index'] + $this->_sections['com']['step'];
$this->_sections['com']['first']      = ($this->_sections['com']['iteration'] == 1);
$this->_sections['com']['last']       = ($this->_sections['com']['iteration'] == $this->_sections['com']['total']);
?>
					
						<ul class="hc_list reset">
							<?php unset($this->_sections['n']);
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['arr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['n']['start'] = (int)$this->_tpl_vars['i']+1;
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['max'] = (int)3;
$this->_sections['n']['show'] = true;
if ($this->_sections['n']['max'] < 0)
    $this->_sections['n']['max'] = $this->_sections['n']['loop'];
$this->_sections['n']['step'] = 1;
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
							
						<li>
						<span style="display:none;"><?php echo $this->_tpl_vars['i']++; ?>
</span>
						
						
	                			<a href="/myrecruit/controller/compDetail.php?compid=<?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['comp_id']; ?>
" target="_blank">
			                        	<h3 title="CCIC"><?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['comp_name']; ?>
</h3>
			                        	<div class="comLogo">
				                        	<img src="<?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['comp_logo']; ?>
" width="190" height="190" alt="CCIC" />
				                        	<ul>
				                        		<li><?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['comp_industry']; ?>
</li>
				                        		<li><?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['comp_city']; ?>
，<?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['comp_stage']; ?>
</li>
				                        	</ul>
			                        	</div>
			                        </a>
								</li>
							<?php endfor; endif; ?>
						</ul>
						<?php endfor; endif; ?>
							<?php echo $this->_tpl_vars['navi']; ?>

						
            </div>	
           <div class="content_r" style="height:925px;background:url('style/css/img/subscribe_bg.jpg') repeat;">
           	<dl style="height:50%;font-size:24px">
            		<dd style="line-height:100px;text-align:center">我</dd>
            		<dd style="line-height:100px;text-align:center">也</dd>
            		<dd style="line-height:100px;text-align:center">是</dd>
            		<dd style="line-height:100px;text-align:center">广</dd>
            		<dd style="line-height:100px;text-align:center">告</dd>
            	</dl>
           </div>
           
       	</div>
      <div class="Pagination myself">
      <script type="text/javascript" src="style/js/company_list.min.js"></script>
      <h2>
	
   	</div>
   	<input type="hidden" value="" name="userid" id="userid" />
      
       	
			<div class="clear"></div>
			<input type="hidden" id="resubmitToken" value="" />
	    	<a id="backtop" title="回到顶部" rel="nofollow"></a>
	    	 
	    </div><!-- end #container -->
	</div><!-- end #body -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript" src="style/js/core.min.js"></script>
<script type="text/javascript" src="style/js/popup.min.js"></script>

<!--  -->

</body>
</html>