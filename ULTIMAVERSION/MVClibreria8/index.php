<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Inicio de la pagina web sin iniciar sesion">
	<meta name="autor" content="Yo">
	<title>Biblioteca DAP</title>
	<link rel="stylesheet" type="text/css" href="View/css/indexes.css">
</head>
<body>
	<nav>
		<ul>
		  <li class="logo"><a href="http://deboraarango.edu.co/portal/index.php"><img src="view/img/debora.png"
		  alt="Colegio D&eacute;bora Arango P&eacute;rez" width="250px" height="50px"></a></li>
		  <li><a href="index.php">Inicio Biblioteca</a></li>
		  <li><a href="#">Textos</a>
			<ul>
				<li><a href="libros_out.php">Libros</a></li>
				<li><a href="ensayos_out.php">Ensayos</a></li>
				<li><a href="poemas_out.php">Poemas</a></li>
				<li><a href="mitos_leyendas_out.php">Mitos y leyendas</a></li>
			</ul>	
		  </li>
		  <li><a href="#">G&eacute;neros</a>
		    <ul>
				<li><a href="epica_out.php">&Eacute;picos</a></li>
				<li><a href="lirica_out.php">L&iacute;ricos</a></li>
				<li><a href="dramatica_out.php">Dram&aacute;ticos</a></li>
			</ul>
		  </li>
		  <li><a href="#">Autores</a>
		  	<ul>
				<li><a href="universales_out.php">Universales</a></li>
				<li><a href="colombianos_out.php">Colombianos</a></li>
				<li><a href="otros_autores_out.php">Otros autores</a></li>
			</ul>
		  </li>
		  <li><a href="View/Vistas/login.php">Inicia Sesi&oacute;n</a></li>	
		  <li><a href="View/vistas/signup.php">Registrate</a></li>
		  <li class="logo"><img src="view/img/logo.jpg"
		  alt="Colegio D&eacute;bora Arango P&eacute;rez" width="80px" height="80px"></li>
		</ul>
	</nav>
	<header>
		<h1>BIBLIOTECA VIRTUAL D&Eacute;BORA ARANGO P&Eacute;REZ</h1>
		<br><br>
		<!-- corregir -->
		<marquee width="100%">
			<img src="view/img/1.jpg" height="380px" width="1320px">
			<img src="view/img/2.jpg" height="380px" width="1320px">
			<img src="view/img/3.jpg" height="380px" width="1320px">
			<img src="view/img/4.jpg" height="380px" width="1320px">
			<img src="view/img/5.jpg" height="380px" width="1320px">
			<img src="view/img/1.jpg" height="380px" width="1320px">
		</marquee>
		<div >
			<a href="#whoweare"><button id="boton">Quienes somos</button></a>
		</div>
	</header>
	<section>

		<div id="whoweare">
			<h1>QUIENES SOMOS</h1>
			<br><br><hr>
			<p>El Col&eacute;gio Distrital D&eacute;bora Arango P&eacute;rez surge de la ampliaci&oacute;n del colegio Bosa Nova, en 2008 se funda con el nombre de la pintora expresionista antioqueña D&eacute;bora Arango, el col&eacute;gio ofrece educaci&oacute;n preescolar, b&aacute;sica y media bilingüe con especialidad en el idioma extranjero (Ingl&eacute;s)</p>
			<div>
				<a href="#thelibrary"><button id="boton">La Biblioteca</button></a>
			</div>
		</div>
		<div id="thelibrary">
			<h1>LA BIBLIOTECA</h1>
			<br><br><hr>
			<p>Este es un espacio diseñado para la gesti&oacute;n de libros, aqu&iacute; podr&aacute;s encontrar todos los libros de la biblioteca del col&eacute;gio, incluso podr&aacute;s pedir un prestamo, inicia sesi&oacute;n o registrate ahora y disfruta de estos beneficios</p>
			<div >
				<a href="View/vistas/login.php"><button id="boton">Inicia Sesión</button></a>
			</div>
		</div>
	</section>
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
					<img src="view/icon/facebook.png">
					<label><a href="https://es-la.facebook.com/colegiodeboraarangoperez/">Siguenos en Facebook</a></label>
				</div>
				</div>
				<div class="column3">
				<h1>Informacion Contactos</h1>
				<div class="row2">
					<img src="view/icon/house.png">
					<label>Carrera 84A # 57B 04 Sur Barrio: Bosa Argelia II sector Localidad: Séptima – Bosa</label>
				</div>	
				<div class="row2">
					<img src="view/icon/smartphone.png">
					<label>300 2073527</label>
				</div>	
				<div class="row2">
					<img src="view/icon/phone.png">
					<label>7330405</label>
				</div>
				<div class="row2">
					<img src="view/icon/contact.png">
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
					<a href="">Melchebitas </a>y <a href="">Chiguirin</a></label>
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