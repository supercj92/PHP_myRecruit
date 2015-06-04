<?php /* Smarty version 2.6.18, created on 2015-05-12 22:34:48
         compiled from adminInfo.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "adminFrameTop.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
			<?php $_from = $this->_tpl_vars['pagi']->res_array; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['emt']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['emt']['admin_id']; ?>
</td>
				<td><a href=""><?php echo $this->_tpl_vars['emt']['admin_name']; ?>
</a></td>
				<td><?php echo $this->_tpl_vars['emt']['pwd']; ?>
</td>
				<td><?php echo $this->_tpl_vars['emt']['email']; ?>
</td>
				<td><a href="/myrecruit/controller/updateAdmin.php?adminid=<?php echo $this->_tpl_vars['emt']['admin_id']; ?>
">编辑</a></td>
				<td><a href="">删除</a></td>
				
			</tr>
			<?php endforeach; endif; unset($_from); ?>
	</table>
	<?php echo $this->_tpl_vars['pagi']->navigate; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "adminFrameDown.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>