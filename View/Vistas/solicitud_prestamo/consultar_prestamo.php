<!--<?php

	$mysql = new mysqli("127.0.0.1", "root", "", "biblioteca_dap");
	
		
?>-->

<!DOCTYPE html>
<html>
<head>
	<title>Consultar Prestamos</title>
	<meta charset="utf-8">
	<meta name="description" content="Prestamos">
	<meta name="autor" content="Yo">
	<title>Prestamos</title>
	<link rel="stylesheet" type="text/css" href="../../css/mainc.css">
</head>
<body>	

	<nav>
		<ul>
		  <li class="logo"><a href="http://deboraarango.edu.co/portal/index.php"><img src="../../img/debora.png"
		  alt="Colegio D&eacute;bora Arango P&eacute;rez" width="250px" height="50px";></a></li>
		  <li><a href="../index_userp.php">Inicio</a></li>
		 <li><a href="../logout.php">Cerrar Sesi&oacute;n</a></li>
		  <li class="logo"><img src="../../img/logo.jpg"
		  alt="Colegio D&eacute;bora Arango P&eacute;rez" width="80px" height="80px"></li>
		</ul>
	</nav>
	<header>

<?php

		//$sqlResponse = $mysql->query("select ID_solicitud_prestamo, fecha_prestamo, fecha_devolucion, fecha_devolucion_aplicada, ID_usuario, ID_libro, ID_estado from solicitud_prestamo");
		require_once '../../../Controller/prestamoController.php';

		$sqlResponse = call_user_func(array('prestamoController', 'listarPrestamo'));
		$conteo = 0;

		echo '<table><tr>
		<td>Id</td>
		<td>Fecha Prestamo</td>
		<td>Fecha devolucion</td>
		<td>Fecha devolucion aplicada</td>
		<td>ID Usuario</td>
		<td>ID Libro</td>
		<td>ID Estado</td>';
		foreach($sqlResponse as $value){
			$conteo++;
			echo '<form id="form'.$conteo.'" action="" method="POST" style="width: 100%"><tr>
			<td><input type="text" name="identificador" value="'.$value->ID_solicitud_prestamo.'"/></td>
			<td><input type="text" name="updateFP" value="'.$value->fecha_prestamo.'"/></td>
			<td><input type="text" name="updateFD" value="'.$value->fecha_devolucion.'"/></td>
			<td><input type="date" name="updateFDA" value="'.$value->fecha_devolucion_aplicada.'"/></td>
			<td><input type="text" name="updateIDU" value="'.$value->ID_usuario.'"/></td>
			<td><input type="text" name="updateIDL" value="'.$value->ID_libro.'"/></td>
			<td><input type="text" name="updateIDE" value="'.$value->ID_estado.'"/></td></tr></form>';
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