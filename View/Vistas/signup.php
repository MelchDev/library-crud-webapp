<!DOCTYPE html>
<html>
<head>
	<title>Registrate</title>
	<meta charset="utf-8">
	<meta name="description" content="Registrarse">
	<meta name="autor" content="Yo">
	<title>Biblioteca DAP</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>	

<?php

	require_once '../../Controller/login_controller.php';

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
		//$rolUs = 6;

		call_user_func_array(array('login_controller', 'crearUsuario'), array($nombreUs, $apellidoUs, $contrasenaUs, $documentoUs, $fechanacimUs, $correoUs, $telUs));
	}
?>

	<nav>
		<ul>
		  <li class="logo"><a href="http://deboraarango.edu.co/portal/index.php"><img src="../img/debora.png"
		  alt="Colegio D&eacute;bora Arango P&eacute;rez" width="250px" height="50px";></a></li>
		  <li><a href="../../index.php">Inicio Biblioteca</a></li>
		  <li><a href="#">Textos</a>
			<ul>
				<li><a href="libros.php">Libros</a></li>
				<li><a href="ensayos.php">Ensayos</a></li>
				<li><a href="poemas.php">Poemas</a></li>
				<li><a href="mitos_leyendas.php">Mitos y leyendas</a></li>
			</ul>	
		  </li>
		  <li><a href="#">G&eacute;neros</a>
		    <ul>
				<li><a href="epica.php">&Eacute;picos</a></li>
				<li><a href="lirica">L&iacute;ricos</a></li>
				<li><a href="dramatica.php">Dram&aacute;ticos</a></li>
			</ul>
		  </li>
		  <li><a href="#">Autores</a>
		  	<ul>
				<li><a href="universales.php">Universales</a></li>
				<li><a href="colombianos.php">Colombianos</a></li>
				<li><a href="otros_autores.php">Otros autores</a></li>
			</ul>
		  </li>
		  <li><a href="login.php">Iniciar sesión</a></li>
		  <li class="logo"><img src="../img/logo.jpg"
		  alt="Colegio D&eacute;bora Arango P&eacute;rez" width="80px" height="80px"></li>
		</ul>
	</nav>
	<header>
		<form action="" method="POST">
			<h2>Registrarse</h2><br>
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
		    <input type="password" id="contrasena" name="contrasena" required="required"></p>
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
		    <input type="emails" id="correo" name="correo" required="required"></p>
		    <br>
		    <p>Telefono: 
			<br><br>
		    <input type="text" id="telefono" name="telefono" required="required"></p>
		    <!--EL USUARIO NO PUEDE ELEGIR ROL-->
		    <br><br>
		    <center>
		    <p><input type="submit" value="Registrarse" name="save"></p></center>
		    <br>
        	<p>¿Ya tienes cuenta? <a href="login.php">Inicia Sesi&oacute;n</a></p><br>
        	<p class="legal"><a href="http://www.secretariasenado.gov.co/senado/basedoc/ley_1581_2012.html">Cumplimos la ley estatutaria 1581 de 2012 sobre las disposiciones generales para la protección de datos personales.</a></p>
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
					<img src="../icon/facebook.png">
					<label><a href="https://es-la.facebook.com/colegiodeboraarangoperez/">Siguenos en Facebook</a></label>
				</div>
				</div>
				<div class="column3">
				<h1>Informacion Contactos</h1>
				<div class="row2">
					<img src="../icon/house.png">
					<label>Carrera 84A # 57B 04 Sur Barrio: Bosa Argelia II sector Localidad: Séptima – Bosa</label>
				</div>	
				<div class="row2">
					<img src="../icon/smartphone.png">
					<label>300 2073527</label>
				</div>	
				<div class="row2">
					<img src="../icon/phone.png">
					<label>7330405</label>
				</div>
				<div class="row2">
					<img src="../icon/contact.png">
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