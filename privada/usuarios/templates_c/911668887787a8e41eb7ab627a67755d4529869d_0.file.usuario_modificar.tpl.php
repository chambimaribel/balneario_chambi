<?php
/* Smarty version 3.1.36, created on 2021-05-09 01:40:41
  from 'C:\wamp64\www\sis_balneario_chambi\privada\usuarios\templates\usuario_modificar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60973d9982ccd3_01704717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '911668887787a8e41eb7ab627a67755d4529869d' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_balneario_chambi\\privada\\usuarios\\templates\\usuario_modificar.tpl',
      1 => 1620341089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60973d9982ccd3_01704717 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
     <head>
          
          <link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
          <?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 type="text/javascript" src="js/validar_usuario.js"><?php echo '</script'; ?>
>
     </head>
     <body>
         <div class="formu_ingreso_datos">
               <form action="usuario_modificar1.php" method="post" name="formu">
                    <h2>MODIFICAR USUARIO</h2>
                    <b>Persona (*)</b>
                         
                    <select name="id_persona">
                         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['persona']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                         <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
 - <?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
 - <?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</option>
                         <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personas']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                         <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
 - <?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
 - <?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</option>
                         <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                              
                         
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuario']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
               <p>
               <input type="text" name="usuario1" size="15" placeholder="usuario1" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['usuario1'];?>
">(*)
               </p>
               <p>
               <input type="password" name="clave" size="15" placeholder="clave">(*)
               </p>
                    <input type="hidden" name="accion" value="">
                    <input type="hidden" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_usuario'];?>
">
                    <input type="button" value="Aceptar" onclick="validar();" class="boton2">
                    <input type="button" value="Cancelar" onclick="javascript:location.href='usuarios.php';" class="boton2">
               </p>
               <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
               <p> <b>(*)Campos Obligatorios</b> </p>                
               </form>
          </div>
     </body>
</html>
<?php }
}
