<!DOCTYPE html>
<html>
<head>
	<title>Crear Prestamo</title>
	<meta charset="utf-8">
	<meta name="description" content="Prestamo">
	<meta name="autor" content="Yo">
	<title>Prestamo</title>
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
</head>
<body>	


<?php

		require_once '../../../Controller/prestamoController.php';
	
	//$mysql = new mysqli("127.0.0.1", "root", "", "biblioteca_dap");

	if(isset($_POST["save"]))
	{
		//$sqlCount = $mysql->query("select max(ID_solicitud_prestamo + 1) as Conteo from solicitud_prestamo");
		$FP = $_POST["fecha_prestamo"];
		$FD = $_POST["fecha_devolucion"];
		$FDA = $_POST["fecha_devolucion_aplicada"];
		$IDU = $_POST["ID_usuario"];
		$IDL = $_POST["ID_libro"];
		$IDE = $_POST["ID_estado"];

		call_user_func_array(array('prestamoController', 'crearPrestamo'), array($FP, $FD, $FDA, $IDU, $IDL, $IDE));

		//if($row = mysqli_fetch_array($sqlCount)){
		//	if (!$vlr = $row['Conteo']){
		//		$vlr = 1;
		//	}
		//	else{
		//		$vlr = $row['Conteo'];
		//	}
		  // 	$sqlInsert = $mysql->query("INSERT INTO solicitud_prestamo VALUES(" . $vlr . ", '" . $FP ."', '" . $FD ."', '" . $FDA ."', '" . $IDU ."', '" . $IDL ."', '" . $IDE ."')");
		//}
	}
?>


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
		<form action="" method="POST">
			<p>Fecha del Prestamo: 
			<br><br>
		    <input type="date" id="fecha_prestamo" name="fecha_prestamo" required="required"></p>
		    <br>
		    <p>Fecha de Devolucion: 
			<br><br>
		    <input type="date" id="fecha_devolucion" name="fecha_devolucion" required="required"></p>
		    <br>
		    <p>Fecha de Devolucion Aplicada: 
			<br><br>
		    <input type="date" id="fecha_devolucion_aplicada" name="fecha_devolucion_aplicada" required="required"></p>
		    <br>
		    <p>ID Usuario: 
			<br><br>
		    <input type="text" id="ID_usuario" name="ID_usuario" required="required"></p>
		    <br>
		    <p>ID Libro: 
			<br><br>
		    <input type="text" id="ID_libro" name="ID_libro" required="required"></p>
		    <br>
		    <p>ID Estado: 
			<br><br>
		    <input type="text" id="ID_estado" name="ID_estado" required="required"></p>
		    <br>
		    <p><input type="submit" value="Crear Prestamo" name="save"></p>
		    <br>
		    <!--<p><a href="gestionar_prestamo.php">Consultar Prestamos</a></p><br>-->
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
Prestamo