<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once ("../../conexion.php");
require_once ("../../resaltarBusqueda.inc.php");

$apellido = strip_tags(stripslashes($_POST["apellido"]));
$telefono = strip_tags(stripslashes($_POST["telefono"]));
$nombre = strip_tags(stripslashes($_POST["nombre"]));
$c_i = strip_tags(stripslashes($_POST["c_i"]));

//$db->debug=true;
if ($apellido or $telefono or $nombre or $c_i){
	$sql3 = $db->Prepare ("SELECT *
					  FROM cliente
					  WHERE apellido LIKE ?
					  AND telefono LIKE ?
					  AND nombre LIKE ?
					  AND c_i LIKE ?
					  AND estado <> '0'					");
    $rs3 = $db->GetAll($sql3, array($apellido."%", $telefono."%", $nombre."%", $c_i."%"));

if ($rs3){
	echo "<center>
	      <table class='listado'>
	      <tr>
	      <th>c_i</th><th>apellido</th><th>telefono</th><th>NOMBRE</th><th>SELECCIONE</th>

	      </tr>";
	    foreach ($rs3 as $k => $fila) {
	    	     $str = $fila["c_i"];
	    	     $str1 = $fila["apellido"];
	    	     $str2 = $fila["telefono"];
	    	     $str3 = $fila["nombre"];
	    	echo "<tr>
	    	      <td align='center'>".resaltar($c_i, $str)."</td>
	    	      <td>".resaltar($apellido, $str1)."</td>
	    	      <td>".resaltar($telefono, $str2)."</td>
	    	      <td>".resaltar($nombre, $str3)."</td>
	    	      <td align='center'>
	    	      <input type='radio' name='seleccione' value='".$fila['id_cliente']."' onclick='mostrar(".$fila["id_cliente"].")'>
	    	      </td>
	    	      </tr>";
	    	}
	    	echo "</table>
	    	</center>";
	    } else {
	    	 echo "<center><b> EL CLIENTE NO EXISTE!!</b></center>";
	    	
	    }
}
?>