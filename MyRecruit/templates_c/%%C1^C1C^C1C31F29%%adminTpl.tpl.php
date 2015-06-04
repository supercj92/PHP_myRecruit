<?php /* Smarty version 2.6.18, created on 2015-05-12 22:48:41
         compiled from adminTpl.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "adminFrameTop.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table width="100%" style="margin-left:60px">
	<tr height="50px">
		<td width="90px">管理员邮箱</td><td><input class="form-control" style="width:300px" value="<?php echo $this->_tpl_vars['arr'][0]['email']; ?>
" type="text" name="email"/></td>
	</tr>
	<tr height=50px>
		<td>管理员密码</td><td><input class="form-control" style="width:300px" value="<?php echo $this->_tpl_vars['arr'][0]['pwd']; ?>
" type="password" name="pwd1"/></td>
	</tr>
	<tr height="50px">
		<td>重复密码</td><td><input class="form-control" style="width:300px" value="<?php echo $this->_tpl_vars['arr'][0]['pwd']; ?>
" type="password" name="pwd2"/></td>
	</tr>
	<tr height="50px">
		<td>管理员姓名</td><td><input class="form-control" style="width:300px" value="<?php echo $this->_tpl_vars['arr'][0]['admin_name']; ?>
" type="text" name="name"/></td>
	</tr>
	<tr height="50px">
		<td><a class="btn btn-info"  href="">确定</a></td><td></td>
	</tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "adminFrameDown.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>