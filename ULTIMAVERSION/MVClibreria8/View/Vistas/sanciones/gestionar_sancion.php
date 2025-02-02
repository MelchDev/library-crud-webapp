<!DOCTYPE html>
<html>
<head>
	<title>Consultar Sanciones</title>
	<meta charset="utf-8">
	<meta name="description" content="Sanciones">
	<meta name="autor" content="Yo">
	<title>Sanciones</title>
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


		require_once '../../../Controller/sancionController.php';

		//$sqlResponse = $mysql->query("select ID_sancion, estado_sancion, descripcion, ID_solicitud_prestamo from sanciones");
		$sqlResponse = call_user_func(array('sancionController', 'listarSancion'));
		$conteo = 0;

		echo '<table><tr>
		<td>Id</td>
		<td>Estado de la Sancion</td>
		<td>Descripcion</td>
		<td>ID Prestamo</td>
		<td>Actualizar</td>
		<td>Eliminar</td><tr>';
		foreach($sqlResponse as $value){
			$conteo++;
			echo '<form id="form'.$conteo.'" action="" method="POST" style="width: 100%"><tr>
			<td><input type="text" name="identificador" value="'.$value->ID_sancion.'"/></td>
			<td><input type="text" name="updateES" value="'. $value->Estado_sancion.'"/></td>
			<td><input type="text" name="updateD" value="'.$value->descripcion.'"/></td>
			<td><input type="text" name="updateIDSP" value="'.$value->ID_solicitud_prestamo.'"/></td>
			<td><input type="submit" name="update" value="Actualizar"/></td>
			<td><input type="submit" name="delete" value="Eliminar"/></td></tr></form>';
		}
		echo '</table>';

		//$mysql = new mysqli("127.0.0.1", "root", "", "biblioteca_dap");
	
		if(isset($_POST["update"]))
		{
			$txtES = $_POST['updateES'];
			$txtD = $_POST['updateD'];
			$txtIDSP = $_POST['updateIDSP'];
			$idS = $_POST['identificador'];
			//$sqlUpdate = $mysql->query('UPDATE sanciones SET estado_sancion = "'.$txtES.'",descripcion = "'.$txtD.'",ID_solicitud_prestamo= "'.$txtIDSP.'"WHERE ID_sancion = '. $idS);
			$response = call_user_func_array(array('sancionController', 'actualizarSancion'), array($txtES, $txtD, $txtIDSP, $idS));
			if($response === "1")
			{
				header("Location: " . $_SERVER['REQUEST_URI']);
			}
			else
			{
				echo '<script>alert("Se presentaron inconvenientes al momento de actualizar el registro.  || '.$response.');</script>';
			}
		}

		if(isset($_POST["delete"]))
		{
			$idS = $_POST['identificador'];
			//$sqlDelete = $mysql->query('DELETE FROM sanciones WHERE ID_sancion = '. $idS);
			$response = call_user_func_array(array('sancionController', 'eliminarSancion'), array($idS));

			if($response === "1")
			{
				header("Location: " . $_SERVER['REQUEST_URI']);
			}
			else
			{
				echo '<script>alert("Se presentaron inconvenientes al momento de eliminar el registro.  || '.$response.');</script>';
			}		
		}


	
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