<?php
/* Smarty version 3.1.36, created on 2021-05-08 02:27:48
  from 'C:\wamp64\www\sis_balneario_chambi\privada\claves\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6095f72493cf20_85791280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e450d01083b9bfe37d2baca8724d29f90dea64e2' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_balneario_chambi\\privada\\claves\\templates\\index.tpl',
      1 => 1617411087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6095f72493cf20_85791280 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="../../css/colores.css">
	
	<?php echo '<script'; ?>
 type="text/javascript">
		
		function refrescar() {
			var p = window.parent;
			p.location.href='../';
		}
	<?php echo '</script'; ?>
>
	
</head>
<body ONLOAD="self.setTimeout('refrescar()',10000);">
	<center>
		<h1><?php echo $_smarty_tpl->tpl_vars['mensage']->value;?>
</h1>
		<br>
		<h1><?php echo $_smarty_tpl->tpl_vars['mensage1']->value;?>
</h1>
	</center>
</body>
</html><?php }
}
