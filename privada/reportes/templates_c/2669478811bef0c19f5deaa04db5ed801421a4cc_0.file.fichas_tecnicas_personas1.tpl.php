<?php
/* Smarty version 3.1.36, created on 2021-08-16 22:46:58
  from 'C:\wamp64\www\sis_balneario_2\privada\reportes\templates\fichas_tecnicas_personas1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_611aeae23fe436_84540994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2669478811bef0c19f5deaa04db5ed801421a4cc' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_balneario_2\\privada\\reportes\\templates\\fichas_tecnicas_personas1.tpl',
      1 => 1628540448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611aeae23fe436_84540994 (Smarty_Internal_Template $_smarty_tpl) {
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
<td align="center" width="80%"><h1> FICHA TECNICA DE PERSONA</h1></td>
</tr>
</table>
<br>
	<center>
	<table border="1" cellspacing="0">
<tr>
<td>
	<table border="0">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personas']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
		<tr>
			<th align="right">CI</th><th>:</th>
			<td><input type="text" name="ci" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['ci'];?>
" disabled=""></td>
		</tr>
		<tr>
			<th align="right">Nombres</th><th>:</th>
			<td><input type="text" name="nombres" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
" disabled=""></td>
		</tr>
		<tr>
			<th align="right">Apellido Paterno</th><th>:</th>
			<td><input type="text" name="ap" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
" disabled=""></td>
		</tr>
		<tr>
			<th align="right">Apellido 	Materno</th><th>:</th>
			<td><input type="text" name="am" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
" disabled=""></td>
		</tr>
		<tr>
			<th align="right">Direccion</th><th>:</th>
			<td><input type="text" name="direccion" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['direccion'];?>
" disabled=""></td>
		</tr>
		<tr>
			<th align="right">Telefono</th><th>:</th>
			<td><input type="text" name="telefono" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['telefono'];?>
" disabled=""></td>
		</tr>
		<tr>
			<th align="right">Genero</th><th>:</th>
			<td>
				<?php if ($_smarty_tpl->tpl_vars['']->value['genero'] == 'M') {?><input type="text" name="genero" value="MASCULINO" disabled="">
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['']->value['genero'] == 'F') {?><input type="text" name="genero" value="FEMENINO" disabled="">
				<?php }?>
			</td>
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
