<!DOCTYPE html>
<html>
<head>
	<title>Crear Libro</title>
	<meta charset="utf-8">
	<meta name="description" content="Libro">
	<meta name="autor" content="Yo">
	<title>Libro</title>
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
</head>
<body>	


<?php

	require_once '../../../Controller/libroController.php';

	// $mysql = new mysqli("127.0.0.1", "root", "", "biblioteca_dap");

	if(isset($_POST["save"]))
	{
		// $sqlCount = $mysql->query("select max(ID_libro + 1) as Conteo from libro");
		$tituloL = $_POST["titulo"];
		$autorL = $_POST["autor"];
		$generoL = $_POST["genero"];
		$editorialL = $_POST["editorial"];
		$fechapublicL = $_POST["fecha_publicacion"];
		$estadoL = $_POST["estado"];

		call_user_func_array(array('libroController', 'crearLibro'), array($tituloL, $autorL, $generoL, $editorialL, $fechapublicL, $estadoL));

		// if($row = mysqli_fetch_array($sqlCount)){
		// 	if (!$vlr = $row['Conteo']){
		// 		$vlr = 1;
		// 	}
		// 	else{
		// 		$vlr = $row['Conteo'];
		// 	}

		//    	$sqlInsert = $mysql->query("INSERT INTO libro VALUES(" . $vlr . ", '" . $tituloL ."', '" . $autorL ."', '" . $generoL ."', '" . $editorialL ."', '" . $fechapublicL ."')");
		// }
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
			<p>Titulo: 
			<br><br>
		    <input type="text" id="titulo" name="titulo" required="required"></p>
		    <br>
		    <p>Autor: 
			<br><br>
		    <input type="text" id="autor" name="autor" required="required"></p>
		    <br>
		    <p>Genero: 
			<br><br>
		    <input type="text" id="genero" name="genero" required="required"></p>
		    <br>
		    <p>Editorial: 
			<br><br>
		    <input type="text" id="editorial" name="editorial" required="required"></p>
		    <br>
		    <p>Fecha de Publicacion: 
			<br><br>
		    <input type="date" id="fecha_publicacion" name="fecha_publicacion" required="required"></p>
		    <br><br>
		    <p>Estado: 
			<br><br>
		    <input type="text" id="estado" name="estado" required="required"></p>
		    <br>
		    <p><input type="submit" value="Crear Libro" name="save"></p>
		    <br>
		    <p><a href="gestionar_libro.php">Consultar Libros</a></p><br>
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