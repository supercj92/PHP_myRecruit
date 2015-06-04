<{include file="adminFrameTop.html"}>
<table border="1px" style="width:100%;border:1px solid black;">
	<tr>
		<th>会员ID</th>
		<th>用户名称</th>
		<th>用户类型</th>
		<th>电邮地址</th>
		<th>用户密码</th>
		<th>添加日期</th>
		<th>删除</th>
		
	</tr>
	<{foreach from=$pagi->res_array item=comp}>
	<tr>
		<td><{$comp.uid}></td>
		<td><a href=""><{$comp.username}></a></td>
		<td><{$comp.utype}></td>
		<td><{$comp.email}></td>
		<td><{$comp.pwd}></td>
		<td><{$comp.reg_time}></td>
		<td><a href="">删除</a></td>
	</tr>
	<{/foreach}>
</table>
<{$pagi->navigate}>
<{include file="adminFrameDown.html"}>