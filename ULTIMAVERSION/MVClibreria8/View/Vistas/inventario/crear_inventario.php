<!DOCTYPE html>
<html>
<head>
	<title>Crear Inventario</title>
	<meta charset="utf-8">
	<meta name="description" content="Inventario">
	<meta name="autor" content="Yo">
	<title>Inventario</title>
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
</head>
<body>	

<?php
	
	require_once '../../../Controller/inventarioController.php';
	//$mysql = new mysqli("127.0.0.1", "root", "", "biblioteca_dap");

	if(isset($_POST["save"]))
	{
		//$sqlCount = $mysql->query("select max(ID_inventario + 1) as Conteo from inventario");
		$CD = $_POST["cantidad_disponible"];
		$CB = $_POST["cantidad_bruta"];
		$Estado = $_POST["estado"];
		$IDL = $_POST["ID_libro"];
		$IDU = $_POST["ID_usuario"];

		call_user_func_array(array('inventarioController', 'crearInventario'), array($CD, $CB, $Estado, $IDL, $IDU));
		
		//if($row = mysqli_fetch_array($sqlCount)){
		//	if (!$vlr = $row['Conteo']){
		//		$vlr = 1;
		//	}
		//	else{
		//		$vlr = $row['Conteo'];
		//	}
		  // 	$sqlInsert = $mysql->query("INSERT INTO inventario VALUES(" . $vlr . ", '" . $CD ."', '" . $CB ."', '" . $Estado."', '" . $IDL ."', '" . $IDU ."')");
//		}
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
			
		    <p> Cantidad Disponible:
			<br><br>
		    <input type="text" id="cantidad_disponible" name="cantidad_disponible" required="required"></p>
		    <br>
		    <p>Cantidad Bruta:
			<br><br>
		    <input type="text" id="cantidad_bruta" name="cantidad_bruta" required="required"></p>
		    <br>
		    <p>Estado del Libro:
			<br><br>
		    <input type="text" id="estado" name="estado" required="required"></p>
		    <br>
		    <p>ID Libro:
			<br><br>
		    <input type="text" id="ID_libro" name="ID_libro" required="required"></p>
		    <br>
		    <p>ID Administrador:
			<br><br>
		    <input type="text" id="ID_usuario" name="ID_usuario" required="required"></p>
		    <br>
		    <p><input type="submit" value="Crear Inventario" name="save"></p>
		    <br>
		    <p><a href="gestionar_inventario.php">Consultar Inventario</a></p><br>
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