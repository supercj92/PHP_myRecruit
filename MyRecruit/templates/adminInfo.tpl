<{include file="adminFrameTop.html"}>
<a href="adminTpl.php" class="icon">添加管理员</a>
	<table border="1px" style="width:100%">
		<tr>
			<th>管理员ID</th>
			<th>管理员姓名</th>
			<th>密码</th>
			<th>电子邮箱</th>
			<th>编辑</th>
			<th>删除</th>
		
		</tr>
			<{foreach from=$pagi->res_array item=emt}>
			<tr>
				<td><{$emt.admin_id}></td>
				<td><a href=""><{$emt.admin_name}></a></td>
				<td><{$emt.pwd}></td>
				<td><{$emt.email}></td>
				<td><a href="/myrecruit/controller/updateAdmin.php?adminid=<{$emt.admin_id}>">编辑</a></td>
				<td><a href="">删除</a></td>
				
			</tr>
			<{/foreach}>
	</table>
	<{$pagi->navigate}>
<{include file="adminFrameDown.html"}>