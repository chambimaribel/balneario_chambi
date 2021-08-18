<?php
/* Smarty version 3.1.36, created on 2021-08-10 04:02:56
  from 'C:\wamp64\www\sis_balneario_1\privada\reportes\templates\rpt_empleado_nacionalidad.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6111fa70dc2154_80613755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e1ce473976dec3c4e3845c802b02779f01f7dcd' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_balneario_1\\privada\\reportes\\templates\\rpt_empleado_nacionalidad.tpl',
      1 => 1628568169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6111fa70dc2154_80613755 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">
	<head>
		<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
		<meta charset="utf-8">
		
			<?php echo '<script'; ?>
 type="text/javascript">
				function validar() {
					nacionalidad  = document.formu.nacionalidad.value;
					if (document.formu.nacionalidad.value == "") {
						alert("Por favor seleccione el nacionalidad");
						document.formu.nacionalidad.focus();
						return;
					}
					ventanaCalendario = window.open ("rpt_empleado_nacionalidad1.php?nacionalidad=" + nacionalidad, "calendario", "width-600, height=550,left=100, top=100, scrollbars=yes, menubars=no, statusbar=NO, status =NO, resizable=YES, location=NO")
					}		
			<?php echo '</script'; ?>
>
			
	</head>
	<body>
		<div class="formu_ingreso_datos">
			<h2> RPT EMPLEADO NACIONALIDAD</h2>
			<form method="post" name="formu">
				<p>
					<b>*Seleccione Nacionalidad</b>
					<select name="nacionalidad">
						<option value="">--Seleccione--</option>
						<option value="T">Todos</option>
						<option value="boliviana">Boliviana</option>
						<option value="extranjera">Extranjera</option>
					</select>
				</p>
				<center><p>
					<input type="hidden" name="accion" value="">
					<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				</p></center>
			</form>
		</div>
</body>
</html><?php }
}
