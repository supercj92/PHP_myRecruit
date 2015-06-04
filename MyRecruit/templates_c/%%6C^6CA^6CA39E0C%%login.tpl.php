<?php /* Smarty version 2.6.18, created on 2015-05-12 18:56:13
         compiled from ../templates/login.tpl */ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<script id="allmobilize" charset="utf-8" src="style/js/allmobilize.min.js"></script>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate" media="handheld"  />
<!-- end 云适配 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>


<meta name="baidu-site-verification" content="QIQ6KC1oZ6" />

<!-- <div class="web_root"  style="display:none">h</div> -->
<script type="text/javascript">
var ctx = "h";
console.log(1);
</script>
<link rel="Shortcut Icon" href="h/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="style/css/style.css"/>

<script src="style/js/jquery.1.10.1.min.js" type="text/javascript"></script>

<script type="text/javascript" src="style/js/jquery.lib.min.js"></script>
<script type="text/javascript" src="style/js/core.min.js"></script>


<script type="text/javascript">
var youdao_conv_id = 271546; 
</script> 
<script type="text/javascript" src="style/js/conv.js"></script>
</head>

<body id="login_bg">
	<div class="login_wrapper">
		<div class="login_header">
      	<!-- <img src="../style/images/logo_white.png" width="285" height="62" alt="拉勾招聘" /> -->
       		<div style="width: 285px;height:92px;"></div>
            <div id="cloud_s"><img src="style/images/cloud_s.png" width="81" height="52" alt="cloud" /></div>
            <div id="cloud_m"><img src="style/images/cloud_m.png" width="136" height="95"  alt="cloud" /></div>
        </div>
        
    	<input type="hidden" id="resubmitToken" value="" />		
		 <div class="login_box">
		
		 
        	<form id="loginForm" method="post" action="../controller/loginProcess.php">
        	<?php echo $this->_tpl_vars['msg']; ?>

				<input type="text"  id="email" name="email" value="" tabindex="1" placeholder="请输入登录邮箱地址" />
			  	<input type="password" style="width:296px;" id="password" name="pwd" tabindex="2" placeholder="请输入密码" />
				<span class="error" style="display:none;" id="beError"></span>
			    
			    
			<!--  	<input type="submit" id="submitLogin" value="登 &nbsp; &nbsp; 录test" />-->
			<!-- 	<a style="color:#fff;" href="index.html" class="submitLogin" title="登 &nbsp; &nbsp; 录"/>登 &nbsp; &nbsp; 录</a> -->

			    
			  
                <input type="submit" class="submitLogin" value="登&nbsp;&nbsp;陆"/>
			</form>
			<div class="login_right">
				<div>还没有帐号？</div>
				<a  href="/myrecruit/controller/registerUI.php"  class="registor_now">立即注册</a>
			    <div class="login_others"></div>
			
			</div>
        </div>
        <div class="login_box_btm"></div>
    </div>
</body>
</html>


