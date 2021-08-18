<?php
/* Smarty version 3.1.36, created on 2021-08-10 17:44:23
  from 'C:\wamp64\www\sis_balneario_2\privada\claves\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6112baf780a6a3_14095869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb03752690783aef028c2a4ac8305feada503cb7' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_balneario_2\\privada\\claves\\templates\\index.tpl',
      1 => 1617411087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6112baf780a6a3_14095869 (Smarty_Internal_Template $_smarty_tpl) {
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
