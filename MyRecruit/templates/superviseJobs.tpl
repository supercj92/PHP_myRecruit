<{include file="adminFrameTop.html"}>
<table border="1px" style="width:100%;border:1px solid black;">
	<tr>
		<th>职位ID</th>
		<th>公司名称</th>
		<th>工作经验</th>
		<th>职位名称</th>
		<th>工作性质</th>
		<th>添加日期</th>
		<th>删除</th>
		
	</tr>
	<{foreach from=$pagi->res_array item=comp}>
	<tr>
		<td><{$comp.job_id}></td>
		<td><a href=""><{$comp.companyname}></a></td>
		<td><{$comp.workYear}></td>
		<td><{$comp.positionName}></td>
		<td><{$comp.jobNature}></td>
		<td><{$comp.add_time}></td>
		<td><a href="">删除</a></td>
	</tr>
	<{/foreach}>
</table>
<{$pagi->navigate}>
<{include file="adminFrameDown.html"}>