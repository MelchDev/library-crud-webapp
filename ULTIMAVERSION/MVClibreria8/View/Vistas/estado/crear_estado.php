<!DOCTYPE html>
<html>
<head>
	<title>Crear Estado</title>
	<meta charset="utf-8">
	<meta name="description" content="Estado">
	<meta name="autor" content="Yo">
	<title>Estado</title>
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
</head>
<body>	


<?php

    require_once '../../../Controller/estadoController.php';
	//$mysql = new mysqli("127.0.0.1", "root", "", "biblioteca_dap");

	if(isset($_POST["save"]))
	{
		//$sqlCount = $mysql->query("select max(ID_estado + 1) as Conteo from estado");
		$desE = $_POST["descripcion_estado"];

		call_user_func_array(array('estadoController', 'crearEstado'), array($desE));

		//if($row = mysqli_fetch_array($sqlCount)){
		//	if (!$vlr = $row['Conteo']){
		//		$vlr = 1;
		//	}
		//	else{
		//		$vlr = $row['Conteo'];
		//	}
		 //  	$sqlInsert = $mysql->query("INSERT INTO estado VALUES(" . $vlr . ", '" . $desE ."')");
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
			<p>Descripcion: 
			<br><br>
		    <input type="text" id="decsripcion_estado" name="descripcion_estado" required="required"></p>
		    <br>
		    <p><input type="submit" value="Crear Estado" name="save"></p>
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