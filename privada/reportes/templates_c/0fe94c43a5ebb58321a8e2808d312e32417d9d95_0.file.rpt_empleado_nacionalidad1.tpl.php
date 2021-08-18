<?php
/* Smarty version 3.1.36, created on 2021-08-10 04:05:30
  from 'C:\wamp64\www\sis_balneario_1\privada\reportes\templates\rpt_empleado_nacionalidad1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6111fb0a360887_77769393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fe94c43a5ebb58321a8e2808d312e32417d9d95' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_balneario_1\\privada\\reportes\\templates\\rpt_empleado_nacionalidad1.tpl',
      1 => 1628568309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6111fb0a360887_77769393 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
	<?php echo '<script'; ?>
 type="text/javascript">
	var ventanaCalendario=false
			function imprimir() {
			if (confirm('Desea Imprimir ?')){
				window.print();
			}
		}
	<?php echo '</script'; ?>
>
	</head>
	<body style='cursor:pointer;cursor:hand' onClick='imprimir();'>
	<table width="100%" border="0">
<tr>
<td><img src="../balneario/img/<?php echo $_smarty_tpl->tpl_vars['logo_balneario']->value;?>
" width="70%" ></td>
<td align="center" width="80%"><h1> EMPLEADO-NACIONALIDAD</h1></td>
</tr>
</table>
<br>
	<center>
	<table border="1" cellspacing="0">
<tr>
<th>NRO</th><th>NOMBRE</th><th>APELLIDO</th><th>DIRECCION</th><th>NACIONALIDAD</th>
</tr>
	<?php $_smarty_tpl->_assignInScope('b', "1");?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rpt_empleado_nacionalidad1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
<tr>
	<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['r']->value['apellido'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['r']->value['direccion'];?>
</td>
	<td><?php if ($_smarty_tpl->tpl_vars['r']->value['nacionalidad'] == 'boliviana') {?>Boliviana<?php } else { ?>Extranjera<?php }?></td>
	<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tr>
	</table>
<br><br>
<b>Fecha:</b> <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>

</center>
</body>
</html><?php }
}
