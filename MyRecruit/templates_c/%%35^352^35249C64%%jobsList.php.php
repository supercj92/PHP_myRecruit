<?php /* Smarty version 2.6.18, created on 2015-04-16 14:34:35
         compiled from ../jobsList.php */ ?>
<?php echo '<?php'; ?>
 
 include_once 'commonHeader.php';
<?php echo '?>'; ?>

<!-- end #header -->
    <div id="container">
        	  	
        <div class="clearfix">
            <div class="content_l recommend_list">
            	
            	<?php echo $this->_tpl_vars['arr']; ?>

            	
            	<ul class="hot_pos reset">
	            		            		            				            		<li class="clearfix">
		            			            						            						            					                	<div class="hot_pos_l">
			                    	<div class="mb10">
			                        	<a target="_blank" href="http://www.lagou.com/jobs/22194.html">产品经理</a> 
			                            &nbsp;
			                            <span class="c9">[广州]</span>
			                            			                        </div>
			                        <span><em class="c7">月薪：</em> 8k-15k</span>
			                        <span><em class="c7">经验：</em> 1-3年</span>
			                        <span><em class="c7">最低学历：</em> 本科</span>
			                        <br>
			                        <span><em class="c7">职位诱惑：</em> 上市公司，快速发展空间，产品的话语权</span>
			                        <br>
				                    <span>1天前发布</span>
			                        <!-- <a  class="wb">分享到微博</a> -->
			                    </div>
			                	<div class="hot_pos_r">
			                    	<div class="mb10 recompany"><a target="_blank" href="http://www.lagou.com/c/5004.html">广州百田</a></div>
			                        <span><em class="c7">领域：</em> 移动互联网,游戏</span>
			                        			                        <br>
			                        <span><em class="c7">阶段：</em> 上市公司</span>
			                        <span><em class="c7">规模：</em> 500-2000人</span>
			                        <ul class="companyTags reset">
			                        				                        					                        			<li>股票期权</li>
			                        					                        				                        					                        			<li>专项奖金</li>
			                        					                        				                        					                        			<li>年底双薪</li>
			                        					                        				                        </ul>
			                    </div>
			                    <div class="recommend">
			                    
			                    	<span> </span>
			                    </div>
			                </li>
	                		                	            				            		
	                		                	            </ul>
	            
	            <form id="searchForm"></form>
	                                <div class="Pagination myself"><a title="1" >首页</a><span title="上一页" class="disabled">上一页 </span><span title="1" class="current">1</span><a title="2" >2</a><a title="3" >3</a><a title="4" >4</a><a title="5" >5</a><a title="2" >下一页 </a><a title="7" >尾页</a></div>
                            </div>	
           
      <input type="hidden" id="userid" name="userid" value="314873">
<script>
$(function(){
	
	/***************************
 	 * 分页
 	 */
 	 						$('.Pagination').pager({
		      currPage: 1,
		      pageNOName: "pn",
		      form: "searchForm",
		      pageCount: 7,
		      pageSize:  5 
		});
	});
</script>
			<div class="clear"></div>
			<input type="hidden" value="" id="resubmitToken">
	    	<a rel="nofollow" title="回到顶部" id="backtop" style="display: none;"></a>
	    </div><!-- end #container -->
	</div><!-- end #body -->
	<div id="footer">
		<div class="wrapper">
			<a rel="nofollow" target="_blank" href="about.html">联系我们</a>
		    <a target="_blank" href="http://www.lagou.com/af/zhaopin.html">互联网公司导航</a>
		    <a rel="nofollow" target="_blank" href="http://e.weibo.com/lagou720">拉勾微博</a>
		    <a rel="nofollow" href="javascript:void(0)" class="footer_qr">拉勾微信<i></i></a>
			<div class="copyright">&copy;2013-2014 Lagou <a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">京ICP备14023790号-2</a></div>
		</div>
	</div>

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