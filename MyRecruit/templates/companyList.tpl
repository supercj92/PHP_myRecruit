<{include file="realHeader.tpl"}>
	<{assign var="i" value="-1"}>
<!-- end #header -->
    <div id="container">
        
        <div class="clearfix">
            <div class="content_l">
					
				
					<{section loop=$arr  name=com max=3}>
					
						<ul class="hc_list reset">
							<{section loop=$arr start=$i+1  name=n max=3}>
							
						<li>
						<span style="display:none;"><{$i++}></span>
						
						
	                			<a href="/myrecruit/controller/compDetail.php?compid=<{$arr[n].comp_id}>" target="_blank">
			                        	<h3 title="CCIC"><{$arr[n].comp_name}></h3>
			                        	<div class="comLogo">
				                        	<img src="<{$arr[n].comp_logo}>" width="190" height="190" alt="CCIC" />
				                        	<ul>
				                        		<li><{$arr[n].comp_industry}></li>
				                        		<li><{$arr[n].comp_city}>，<{$arr[n].comp_stage}></li>
				                        	</ul>
			                        	</div>
			                        </a>
								</li>
							<{/section}>
						</ul>
						<{/section}>
							<{$navi}>
						
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
	<{include file="footer.tpl"}>

<script type="text/javascript" src="style/js/core.min.js"></script>
<script type="text/javascript" src="style/js/popup.min.js"></script>

<!--  -->

</body>
</html>