<!DOCTYPE HTML>
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


<script type="text/javascript" src="style/js/conv.js"></script>
<script type="text/javascript" src="style/js/myJS.js"></script>
</head>

<body id="login_bg">
	<div class="login_wrapper">
		<div class="login_header">
        	<div style="width: 285px;height:92px;"></div>
            <div id="cloud_s"><img src="style/images/cloud_s.png" width="81" height="52" alt="cloud" /></div>
            <div id="cloud_m"><img src="style/images/cloud_m.png" width="136" height="95"  alt="cloud" /></div>
        </div>
        
    	<input type="hidden" id="resubmitToken" value="9b207beb1e014a93bc852b7ba450db27" />		
		<div class="login_box">
        	<form id="loginForm" method="post" onSubmit="return checkForm('username','password','email')" action="/myrecruit/controller/registerProcess.php">
        		<!--<ul class="register_radio clearfix">
		            <li class="current">
		            	找工作
		              	<input type="radio"  value="0" name="type" /> 
		            </li>
		            <li>
		           	           招人
		              	<input type="radio" value="1" name="type" /> 
		            </li>
		        </ul> -->
		       


		        <input type="radio"  value="0" checked name="type" >找工作</input> 
		        <input type="radio"  value="1" name="type" >找员工</input>
		        <input type="text" id="username" name="username" onkeyup="checkName()" tabindex="1" on placeholder="请输入用户名" />
		       <br/>
		        <span id="nameRes"></span>
            	<input type="text" id="email" name="email" tabindex="1" placeholder="请输入常用邮箱地址" />
                <span class="error" style="display:none;" id="beError"></span>
                <input type="password" id="password" style="width:296px;" name="password" tabindex="2" placeholder="请输入密码" />
            	
                <!-- <input type="submit" id="submitLogin1" value="注 &nbsp; &nbsp; 册" />-->
                <input type="submit" class="submitLogin"  value="注&nbsp;册"/>
               
            </form>
            <div class="login_right">
            	<div>已有帐号</div>
            	<a  href="/myrecruit/controller/loginUI.php"  class="registor_now">直接登录</a>
                <div class="login_others"></div>
                
            </div>
        </div>
        <div class="login_box_btm"></div>
    </div>
  
</body>
</html>
