<{include file="adminFrameTop.html"}>
<table border="1px" style="width:100%;border:1px solid black;">
	<tr>
		<th>公司ID</th>
		<th>公司名称</th>
		<th>所属行业</th>
		<th>发展阶段</th>
		<th>公司规模</th>
		<th>添加日期</th>
		<th>删除</th>
		
	</tr>
	<{foreach from=$pagi->res_array item=comp}>
	<tr>
		<td><{$comp.comp_id}></td>
		<td><a href=""><{$comp.comp_name}></a></td>
		<td><{$comp.comp_industry}></td>
		<td><{$comp.comp_stage}></td>
		<td><{$comp.comp_scale}></td>
		<td><{$comp.add_time}></td>
		<td><a href="">删除</a></td>
	</tr>
	<{/foreach}>
</table>
<{$pagi->navigate}>
<{include file="adminFrameDown.html"}>