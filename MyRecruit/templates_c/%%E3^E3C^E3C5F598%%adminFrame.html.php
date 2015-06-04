<?php /* Smarty version 2.6.18, created on 2015-05-09 18:32:50
         compiled from adminFrame.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta charset="gbk">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>后台管理系统</title>

<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/datepicker3.css" rel="stylesheet">
<link href="style/css/styles.css" rel="stylesheet">
   
  
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
			<li ><a href="./Order.aspx"><span class="glyphicon glyphicon-dashboard"></span> 公司资料审核</a></li>
			<li><a href="./ZhanShiGongGao.aspx"><span class="glyphicon glyphicon-th"></span> 简历管理</a></li>
			<li><a href="./Goods.aspx"><span class="glyphicon glyphicon-stats"></span> 用户管理</a></li>
			<li><a href="./Admin.aspx"><span class="glyphicon glyphicon-list-alt"></span> 管理员信息</a></li>
		
			<li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> 注销登陆</a></li>
		</ul>
		<div class="attribution"></div>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
		</div><!--/.row-->
		
		<!--/.row-->
		<div class= "panel panel-default">
		<div class="panel-body">
         <asp:ContentPlaceHolder id="ContentPlaceHolder1" runat="server">
        
        </asp:ContentPlaceHolder>
		</div><!--/.row-->
		</div>
		<!--/.row-->
								
		<div class="row">
			<div class="col-md-8">
			
			</div><!--/.col-->
			
		</div><!--/.row-->
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	    $('#calendar').datepicker({
	});

	!function ($) {
	    $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
	        $(this).find('em:first').toggleClass("glyphicon-minus");
	    });
	    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
	} (window.jQuery);

	$(window).on('resize', function () {
	    if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
	})
	$(window).on('resize', function () {
	    if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
	})
	</script>	
       
    </div>
   
</body>
</html>