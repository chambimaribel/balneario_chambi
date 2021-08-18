<!DOCTYPE html>
<html lang="esp">
	<head>
		<link rel="stylesheet" href="../{$direc_css}" type="text/css">
		<meta charset="utf-8">
		<script type="text/javascript" src="../../ajax.js"></script>
			<script type="text/javascript">
					function buscar() {
					var d1, d2, d3, d4, contenedor, ajax, url, param;
					 contenedor = document.getElementById('cliente1');
					 d1 = document.formu.apellido.value;
					 d2 = document.formu.telefono.value;
					 d3 = document.formu.nombre.value;
					 d4 = document.formu.c_i.value;
					 ajax = nuevoAjax();
					 url = "ajax_buscar_cliente.php"
					 param = "apellido="+d1+"&telefono="+d2+"&nombre="+d3+"&c_i="+d4;
					 //alert(param);
					 ajax.open("POST", url, true);
					 ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
					 ajax.onreadystatechange = function(){
					 	if (ajax.readyState == 4){
					 		contenedor.innerHTML = ajax.responseText;
					 	}
					 }
					 ajax.send(param);
					}

					function mostrar(id_cliente){
						var d1, ventanaCalendario;
						d1 = id_cliente;
						//alert(id_cliente);
						ventanaCalendario = window.open("fichas_tecnicas_cliente1.php?id_cliente="+d1 , "calendario", "width=600, height=550,left=100, top=100, scrollbars=yes, menubars=no, statusbar=NO, status =NO, resizable=YES, location=NO")
					}
			</script>
	</head>
	<body>
		<!------------BUSCADOR--------->
	<center>
		<h1>FICHAS TECNICAS DE PERSONAS</h1>
		<form action="#" method="post" name="formu">
		<table border="1" class="listado">
			<tr>
				<th>
					<b>apellido</b><br />
					<input type="text" name="apellido" value="" size="10" onkeyUp="buscar()">
				</th>
				<th>
					<b>telefono</b><br />
					<input type="text" name="telefono" value="" size="10" onkeyUp="buscar()">
				</th>
				<th>
					<b>Nombre</b><br />
					<input type="text" name="nombre" value="" size="10" onkeyUp="buscar()">
				</th>
				<th>
					<b>C.I</b><br />
					<input type="text" name="c_i" value="" size="10" onkeyUp="buscar()">
				</th>
			</tr>

		</table>	
		</form>
	</center>
	<!------------BUSCADOR--------->
	<center>
		<div id="cliente1">
			
		</div>
	</center>
</body>
</html>