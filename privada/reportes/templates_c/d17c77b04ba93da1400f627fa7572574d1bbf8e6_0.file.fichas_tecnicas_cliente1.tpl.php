<?php
/* Smarty version 3.1.36, created on 2021-08-16 22:44:28
  from 'C:\wamp64\www\sis_balneario_2\privada\reportes\templates\fichas_tecnicas_cliente1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_611aea4c72ac19_40340545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd17c77b04ba93da1400f627fa7572574d1bbf8e6' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_balneario_2\\privada\\reportes\\templates\\fichas_tecnicas_cliente1.tpl',
      1 => 1628913870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611aea4c72ac19_40340545 (Smarty_Internal_Template $_smarty_tpl) {
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
<td align="center" width="80%"><h1> FICHA TECNICA DE cliente</h1></td>
</tr>
</table>
<br>
	<center>
	<table border="1" cellspacing="0">
<tr>
<td>
	<table border="0">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cliente']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
		<tr>
			<th align="right">c_i</th><th>:</th>
			<td><input type="text" name="c_i" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['c_i'];?>
" disabled=""></td>
		</tr>
		<tr>
			<th align="right">Nombre</th><th>:</th>
			<td><input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
" disabled=""></td>
		</tr>
		<tr>
			<th align="right">Apellido</th><th>:</th>
			<td><input type="text" name="apellido" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['apellido'];?>
" disabled=""></td>
		</tr>
		<tr>
			<th align="right">telefono</th><th>:</th>
			<td><input type="text" name="telefono" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['telefono'];?>
" disabled=""></td>
		</tr>
		<tr>
			<th align="right">Direccion</th><th>:</th>
			<td><input type="text" name="direccion" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['direccion'];?>
" disabled=""></td>
		</tr>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
</td>
</tr>
</table>
</center>
</body>
</html><?php }
}
