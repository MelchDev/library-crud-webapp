<!--<?php
	
	//$mysql = new mysqli("127.0.0.1", "root", "", "biblioteca_dap");

?>-->

<!DOCTYPE html>
<html>
<head>
	<title>Consultar Usuario</title>
	<meta charset="utf-8">
	<meta name="description" content="Usuario">
	<meta name="autor" content="Yo">
	<title>Usuario</title>
	<link rel="stylesheet" type="text/css" href="../../css/mainc.css">
</head>
<body>	

	<nav>
		<ul>
		  <li class="logo"><a href="http://deboraarango.edu.co/portal/index.php"><img src="../../img/debora.png"
		  alt="Colegio D&eacute;bora Arango P&eacute;rez" width="250px" height="50px";></a></li>
		  <li><a href="javascript:history.back(1)">Inicio</a></li>
		 <li><a href="../logout.php">Cerrar Sesi&oacute;n</a></li>
		  <li class="logo"><img src="../../img/logo.jpg"
		  alt="Colegio D&eacute;bora Arango P&eacute;rez" width="80px" height="80px"></li>
		</ul>
	</nav>
	<header>

<?php

		require_once '../../../Controller/usuarioController.php';

		//$sqlResponse = $mysql->query("select ID_usuario, nombre_usuario, apellido_usuario, contrasena, documento, fecha_nacimiento, correo, telefono, rol from usuario");
		$sqlResponse = call_user_func(array('usuarioController', 'listarUsuario'));
		$conteo = 0;


		echo '<table><tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Contraseña</td>
		<td>Documento</td>
		<td>Fecha de nacimiento</td>
		<td>Email</td>
		<td>Telefono</td>
		<td>Rol</td><tr>';
		foreach($sqlResponse as $value){
			$conteo++;
			echo '<form id="form'.$conteo.'" action="" method="POST" style="width: 100%"><tr>
			<td><input type="text" name="identificador" value="'.$value->ID_usuario.'"/></td>
			<td><input type="text" name="updateNombre" value="'.$value->nombre_usuario.'"/></td>
			<td><input type="text" name="updateApellido" value="'.$value->apellido_usuario.'"/></td>
			<td><input type="text" name="updateContrasena" value="'.$value->contrasena.'"/></td>
			<td><input type="text" name="updateDocumento" value="'.$value->documento.'"/></td>
			<td><input type="text" name="updateFechaNacimiento" value="'.$value->fecha_nacimiento.'"/></td>
			<td><input type="text" name="updateCorreo" value="'.$value->correo.'"/></td>
			<td><input type="text" name="updateTelefono" value="'.$value->telefono.'"/></td>
			<td><input type="text" name="updateRol" value="'.$value->rol.'"/></td></tr></form>';
		}
		echo '</table>';
	
?>
	</header>
	<footer>
		<div class="container-footer-all">
			<div class="container-body">
				<div class="column1">
				<h1>Más información sobre nosotros</h1>
				<p>
				Esta es una página web realizada por 
				unos aprendices del SENA de la modalidad
				de Tecnico de Programación de Software	
				</p>
				</div>
				<div class="column2">
				<h1>Redes sociales</h1>
				<div class="row">
					<img src="../../icon/facebook.png">
					<label><a href="https://es-la.facebook.com/colegiodeboraarangoperez/">Siguenos en Facebook</a></label>
				</div>
				</div>
				<div class="column3">
				<h1>Informacion Contactos</h1>
				<div class="row2">
					<img src="../../icon/house.png">
					<label>Carrera 84A # 57B 04 Sur Barrio: Bosa Argelia II sector Localidad: Séptima – Bosa</label>
				</div>	
				<div class="row2">
					<img src="../../icon/smartphone.png">
					<label>300 2073527</label>
				</div>	
				<div class="row2">
					<img src="../../icon/phone.png">
					<label>7330405</label>
				</div>
				<div class="row2">
					<img src="../../icon/contact.png">
					<label>coldeborarango@gmail.com</label>
				</div>
				<div class="row2">
					<label>coldeboraarangoperez@redp.edu.co</label>
				</div>
				</div>
			
			</div>

		</div>			
			<div class="container-footer">
				<div class="footer">
					<div class="copyright">
					<label>&reg; 2019 Todos los Derechos Reservados
					<a href="">Melchebitas</a></label>
					</div>
					<div class="information">
					<label><a href="">Contacto Técnico</a> |<a href="">
					Leyes y Normas</a> |
					<a href="">Terminos y condiciones</a></label>
					</div>
				</div>	
			</div>
	</footer>	
</body>
</html>