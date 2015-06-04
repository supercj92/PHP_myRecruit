<?php /* Smarty version 2.6.18, created on 2015-05-09 15:55:24
         compiled from adminLoginUI.html */ ?>
﻿

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>管理员登陆</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="style/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="style/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="style/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="style/css/templatemo_style.css" rel="stylesheet" type="text/css">	
</head>
<body class="templatemo-bg-gray">
	<div class="container">
		<div class="col-md-12">
			<h1 class="margin-bottom-15">后台管理系统登陆</h1>
			<form class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30" role="form" action="/myrecruit/controller/adminLoginPro.php" method="post" >				
		    <span style="color:red">  <?php echo $this->_tpl_vars['msg']; ?>
</span>
		    
		       <form > 
                <div class="form-group">
		          <div class="col-xs-12">		            
		            <div class="control-wrapper">
		            	
                        <input type="text" name="uid" class="form-control" placeholder="请输入用户名"/>
		            	
		            </div>		            	
                               
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
		            	
		            	
                         <input class="form-control" type="password" name="pwd" placeholder="请输入密码"/>
                     


		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
	             	<div class="checkbox control-wrapper">
                      
	              	</div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
		          		<input type="submit" value="登陆" class="btn btn-info"/>
                       

		          		<a href="indexUI.php">返回首页</a>
		          	</div>
		          </div>
		        </div>
		        <hr>
		        <div class="form-group">
		        	<div class="col-md-12">
		        		<label></label>
		        		<div class="inline-block">
		        			
		        		</div>		        		
		        	</div>
		        </div>
                </form>
		      </form>
		      <div class="text-center">
		      	<a href="create-account.html" class="templatemo-create-new"> </a>	
		      </div>
		</div>
	</div>
</body>
</html>