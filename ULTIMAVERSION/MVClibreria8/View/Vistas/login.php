<?php

require_once '../../Controller/login_controller.php';

if(isset($_POST['Usuario']))
{
	$user = $_POST['Usuario'];
	$pass = $_POST['Contrasena'];
	$rol = $_POST['Rol'];

	call_user_func_array(array('login_controller', 'Iniciar_Sesion'), array($user, $pass, $rol));
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicia Sesión</title>
	<meta charset="utf-8">
	<meta name="description" content="Inicio sesion">
	<meta name="autor" content="Yo">
	<title>Biblioteca DAP</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>	
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
		  <li><a href="signup.php">Registrate</a></li>
		  <li class="logo"><img src="../img/logo.jpg"
		  alt="Colegio D&eacute;bora Arango P&eacute;rez" width="80px" height="80px"></li>
		</ul>
	</nav>
	<header>
		<!--<form action="mysql.php" method="POST">-->
		<form action="" method="POST">
			
        	<h2>Iniciar sesión</h2><br>
        	<p>Nombre de usuario: <br><br>
        	<input type="text" id="txtUser" name="Usuario" required="required"></p><br>
        	<p>Password: <br><br>
        	<input type="password" name="Contrasena" required="required"></p><br>
        	<select name="Rol" id="slcTipo" required="required">
			<option value="0">Elige Rol</font></option>
			<option value="1">Administrador</font></option>
            <option value="2">Directivo</font></option>
            <option value="3">Estudiante</font></option>
            </select><br><br>
        	<p class="center"><input type="submit" value="Iniciar Sesión"></p><br>
        	<p>¿No tienes cuenta? <a href="signup.php">Registrate</a></p><br>
        	<p class="legal"><a href="http://www.secretariasenado.gov.co/senado/basedoc/ley_1581_2012.html">Cumplimos la ley estatutaria 1581 de 2012 sobre las disposiciones generales para la protección de datos personales.</a></p>
        	<!--<input type="text" name="login" hidden="" value="login" />-->
        	<!--<a href="?c=login_controller&a=Iniciar_Sesion"></a>-->
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