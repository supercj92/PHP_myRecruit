<?php /* Smarty version 2.6.18, created on 2015-05-09 22:27:17
         compiled from superviseMember.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "adminFrameTop.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
	<?php $_from = $this->_tpl_vars['pagi']->res_array; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comp']):
?>
	<tr>
		<td><?php echo $this->_tpl_vars['comp']['uid']; ?>
</td>
		<td><a href=""><?php echo $this->_tpl_vars['comp']['username']; ?>
</a></td>
		<td><?php echo $this->_tpl_vars['comp']['utype']; ?>
</td>
		<td><?php echo $this->_tpl_vars['comp']['email']; ?>
</td>
		<td><?php echo $this->_tpl_vars['comp']['pwd']; ?>
</td>
		<td><?php echo $this->_tpl_vars['comp']['reg_time']; ?>
</td>
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