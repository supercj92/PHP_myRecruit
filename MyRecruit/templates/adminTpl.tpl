<{include file="adminFrameTop.html"}>
<table width="100%" style="margin-left:60px">
	<tr height="50px">
		<td width="90px">管理员邮箱</td><td><input class="form-control" style="width:300px" value="<{$arr[0].email}>" type="text" name="email"/></td>
	</tr>
	<tr height=50px>
		<td>管理员密码</td><td><input class="form-control" style="width:300px" value="<{$arr[0].pwd}>" type="password" name="pwd1"/></td>
	</tr>
	<tr height="50px">
		<td>重复密码</td><td><input class="form-control" style="width:300px" value="<{$arr[0].pwd}>" type="password" name="pwd2"/></td>
	</tr>
	<tr height="50px">
		<td>管理员姓名</td><td><input class="form-control" style="width:300px" value="<{$arr[0].admin_name}>" type="text" name="name"/></td>
	</tr>
	<tr height="50px">
		<td><a class="btn btn-info"  href="">确定</a></td><td></td>
	</tr>
</table>
<{include file="adminFrameDown.html"}>