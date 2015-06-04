<?php /* Smarty version 2.6.18, created on 2015-05-10 11:09:55
         compiled from adminFrameTop.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>后台管理系统</title>

<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/datepicker3.css" rel="stylesheet">
<link href="style/css/styles.css" rel="stylesheet">
<link href="style/css/myStyle.css" rel="stylesheet"></link>
   
  
</head>
<body>
  
    <div>
    <body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>管理</span>中心</a>
					</div>
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li ><a href="/myrecruit/controller/adminCenter.php"><span class="glyphicon glyphicon-dashboard"></span> 公司资料管理</a></li>
			<li><a href="/myrecruit/controller/superviseJobs.php"><span class="glyphicon glyphicon-th"></span> 职位管理</a></li>
			<li><a href="/myrecruit/controller/superviseMembers.php"><span class="glyphicon glyphicon-stats"></span> 用户管理</a></li>
			<li><a href="/myrecruit/controller/adminInfo.php"><span class="glyphicon glyphicon-list-alt"></span> 管理员信息</a></li>
		
			<li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> 注销登陆</a></li>
		</ul>
		<div class="attribution"></div>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
		</div><!--/.row-->
		
		<!--/.row-->
		<div class= "panel panel-default">
		<div class="panel-body" style="margin-top:30px;">
     
        
      <!------------------我是上半部分----------------->