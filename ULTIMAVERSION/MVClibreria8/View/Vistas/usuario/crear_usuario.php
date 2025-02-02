
<!DOCTYPE html>
<html>
<head>
	<title>Crear Usuario</title>
	<meta charset="utf-8">
	<meta name="description" content="Usuario">
	<meta name="autor" content="Yo">
	<title>Usuario</title>
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
</head>
<body>	


<?php

	require_once '../../../Controller/usuarioController.php';
	
	//$mysql = new mysqli("127.0.0.1", "root", "", "biblioteca_dap");

	if(isset($_POST["save"]))
	{
		//$sqlCount = $mysql->query("select max(ID_usuario + 1) as Conteo from usuario");
		$nombreUs = $_POST["nombre_usuario"];
		$apellidoUs = $_POST["apellido_usuario"];
		$contrasenaUs = $_POST["contrasena"];
		$documentoUs = $_POST["documento"];
		$fechanacimUs = $_POST["fecha_nacimiento"];
		$correoUs = $_POST["correo"];
		$telUs = $_POST["telefono"];
		$rolUs = $_POST["rol"];

		call_user_func_array(array('usuarioController', 'crearUsuario'), array($nombreUs, $apellidoUs, $contrasenaUs, $documentoUs, $fechanacimUs, $correoUs, $telUs, $rolUs));

		//if($row = mysqli_fetch_array($sqlCount)){
			//if (!$vlr = $row['Conteo']){
				//$vlr = 1;
			//}
			//else{
				//$vlr = $row['Conteo'];
			//}
		   	//$sqlInsert = $mysql->query("INSERT INTO usuario VALUES(" . $vlr . ", '" . $nombreUs ."', '" . $apellidoUs ."', '" . $contrasenaUs ."', '" . $documentoUs ."', '" . $fechanacimUs ."', '" . $correoUs ."', '" . $telUs ."', '" . $rolUs ."')");
		//}
	}
?>


	<nav>
		<ul>
		  <li class="logo"><a href="http://deboraarango.edu.co/portal/index.php"><img src="../../img/debora.png"
		  alt="Colegio D&eacute;bora Arango P&eacute;rez" width="250px" height="50px";></a></li>
		  <li><a href="../index_admin.php">Inicio</a></li>
		 <li><a href="../logout.php">Cerrar Sesi&oacute;n</a></li>
		  <li class="logo"><img src="../../img/logo.jpg"
		  alt="Colegio D&eacute;bora Arango P&eacute;rez" width="80px" height="80px"></li>
		</ul>
	</nav>
	<header>
		<form action="" method="POST">
			<p>Nombre: 
			<br><br>
		    <input type="text" id="nombre_usuario" name="nombre_usuario" required="required"></p>
		    <br>
		    <p>Apellido: 
			<br><br>
		    <input type="text" id="apellido_usuario" name="apellido_usuario" required="required"></p>
		    <br>
		    <p>Contraseña: 
			<br><br>
		    <input type="text" id="contrasena" name="contrasena" required="required"></p>
		    <br>
		    <p>Documento: 
			<br><br>
		    <input type="text" id="documento" name="documento" required="required"></p>
		    <br>
		    <p>Fecha de Nacimiento: 
			<br><br>
		    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required="required"></p>
		    <br>
		    <p>Correo: 
			<br><br>
		    <input type="email" id="correo" name="correo" required="required"></p>
		    <br>
		    <p>Telefono: 
			<br><br>
		    <input type="text" id="telefono" name="telefono" required="required"></p>
		    <br>
		    <p>Rol: 
			<br><br>
		    <select name="rol" id="rol" required="required">
			<option value="0">Elige Rol</font></option>
			<option value="1">Administrador</font></option>
            <option value="2">Directivo</font></option>
            <option value="3">Estudiante</font></option>
            </select>
		    <br><br>
		    <p><input type="submit" value="Crear Usuario" name="save"></p>
		    <br>
		    <p><a href="gestionar_usuario.php">Consultar Usuarios</a></p><br>
		</form>
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