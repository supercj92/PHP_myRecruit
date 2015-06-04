<?php /* Smarty version 2.6.18, created on 2015-04-16 15:27:06
         compiled from test.html */ ?>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>
<body>


<h2>取普通变量</h2>
<hr>
<?php echo $this->_tpl_vars['aa']; ?>

<h2>取一维索引数组</h2>
<hr>
<?php echo $this->_tpl_vars['arr'][0]; ?>
||<?php echo $this->_tpl_vars['arr'][1]; ?>
||<?php echo $this->_tpl_vars['arr'][2]; ?>

<h2>取一维关联数组</h2>
<hr>
<?php echo $this->_tpl_vars['arr1']['city1']; ?>
||<?php echo $this->_tpl_vars['arr1']['city2']; ?>


<h2>取二维索引数组</h2>
<hr>
<?php echo $this->_tpl_vars['arr2'][0][0]; ?>
||<?php echo $this->_tpl_vars['arr2'][1][1]; ?>

<h2>取出二维关联数组</h2>
<hr>
<?php echo $this->_tpl_vars['arr3'][0]['email']; ?>
||<?php echo $this->_tpl_vars['arr3'][1]['email']; ?>
</br>
<?php echo $this->_tpl_vars['arr4']['emp1']['email']; ?>

<h2>foreach的使用</h2>
<hr>
取出一维索引数组:
<?php $_from = $this->_tpl_vars['arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tkey'] => $this->_tpl_vars['temp']):
?>
<?php echo $this->_tpl_vars['tkey']; ?>
=><?php echo $this->_tpl_vars['temp']; ?>

<?php endforeach; endif; unset($_from); ?></br>
取出一维关联数组:
<?php $_from = $this->_tpl_vars['arr1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tkey'] => $this->_tpl_vars['temp']):
?>
<?php echo $this->_tpl_vars['tkey']; ?>
=><?php echo $this->_tpl_vars['temp']; ?>

<?php endforeach; endif; unset($_from); ?></br>
取出二维关联数组:</br>
<?php $_from = $this->_tpl_vars['arr3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tkey'] => $this->_tpl_vars['temp']):
?>
<?php echo $this->_tpl_vars['tkey']; ?>
------->
	<?php $_from = $this->_tpl_vars['temp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ikey'] => $this->_tpl_vars['itemp']):
?>
		<?php echo $this->_tpl_vars['ikey']; ?>
=><?php echo $this->_tpl_vars['itemp']; ?>

	<?php endforeach; endif; unset($_from); ?>
	</br>
<?php endforeach; endif; unset($_from); ?>
<h2>接受对象</h2>
<hr>
<?php echo $this->_tpl_vars['dog1']->name; ?>



</body>
</html>