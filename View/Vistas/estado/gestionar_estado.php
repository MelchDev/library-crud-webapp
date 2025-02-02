
<?php

	$mysql = new mysqli("127.0.0.1", "root", "", "biblioteca_dap");

		if(isset($_POST["update"]))
		{
			$txtDes = $_POST['updateDes'];
			$idE = $_POST['identificador'];
			$sqlUpdate = $mysql->query('UPDATE estado SET descripcion_estado = "'.$txtDes.'" WHERE ID_estado = '. $idE);
		}

		if(isset($_POST["delete"]))
		{
			$idE = $_POST['identificador'];
			$sqlDelete = $mysql->query('DELETE FROM estado WHERE ID_estado = '. $idE);
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Consultar Rol</title>
	<meta charset="utf-8">
	<meta name="description" content="Rol">
	<meta name="autor" content="Yo">
	<title>Rol</title>
	<link rel="stylesheet" type="text/css" href="../../css/mainc.css">
</head>
<body>	

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

<?php

		$sqlResponse = $mysql->query("select ID_estado, descripcion_estado from estado");
		$conteo = 0;

		echo '<table><tr>
		<td>Id</td>
		<td>Descripcion</td>
		<td>Actualizar</td>
		<td>Eliminar</td><tr>';
		while($row = mysqli_fetch_array($sqlResponse)){
			$conteo++;
			echo '<form id="form'.$conteo.'" action="" method="POST" style="width: 100%;"><tr>
			<td><input type="text" name="identificador" value="'.$row["ID_estado"].'"/></td>
			<td><input type="text" name="updateDes" value="'. $row["descripcion_estado"].'"/></td>
			<td><input type="submit" name="update" value="Actualizar"/></td><td><input type="submit" name="delete" value="Eliminar"/></td></tr></form>';
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