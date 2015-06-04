<?php /* Smarty version 2.6.18, created on 2015-04-16 21:47:32
         compiled from ../jobsList.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "commonHeader.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- end #header -->
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
			                        	<a target="_blank" href="http://www.lagou.com/jobs/22194.html"><?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['positionName']; ?>
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
			                        <span><em class="c7">职位诱惑:</em> <?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['positionAdvantage']; ?>
</span>
			                        <br>
				                    <span><?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['add_time']; ?>
</span>
			                        
			                    </div>
			                	
			                	<?php else: ?>
			                	
			        <div class="hot_pos_r">
			                    	
			                     <div class="mb10">
			                        	<a target="_blank" href="http://www.lagou.com/jobs/22194.html"><?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['positionName']; ?>
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
			                        <span><em class="c7">职位诱惑:</em> <?php echo $this->_tpl_vars['arr'][$this->_sections['n']['index']]['positionAdvantage']; ?>
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
           
      <input type="hidden" id="userid" name="userid" value="314873">

			<div class="clear"></div>
			<input type="hidden" value="" id="resubmitToken">
	    	<a rel="nofollow" title="鍥炲埌椤堕儴" id="backtop" style="display: none;"></a>
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