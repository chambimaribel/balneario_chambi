<?php
/* Smarty version 3.1.36, created on 2021-08-09 14:32:31
  from 'C:\wamp64\www\sis_balneario_1\privada\claves\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_61113c7fa3db49_61878222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45e4b060216822f1ce9abe4af760c6b2f0b0b6a5' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_balneario_1\\privada\\claves\\templates\\index.tpl',
      1 => 1617411087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61113c7fa3db49_61878222 (Smarty_Internal_Template $_smarty_tpl) {
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
