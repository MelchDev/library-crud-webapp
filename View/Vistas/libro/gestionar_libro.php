<!DOCTYPE html>
<html>
<head>
	<title>Consultar Libro</title>
	<meta charset="utf-8">
	<meta name="description" content="Libro">
	<meta name="autor" content="Yo">
	<title>Libro</title>
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
		require_once '../../../Controller/libroController.php';

		// $sqlResponse = $mysql->query("select ID_libro, titulo, autor, genero, editorial, fecha_publicacion from libro");
		$sqlResponse = call_user_func(array('libroController', 'listarLibros'));
		$conteo = 0;

		echo '<table><tr>
		<td>Id</td>
		<td>Titulo</td>
		<td>Autor</td>
		<td>Genero</td>
		<td>Editorial</td>
		<td>Fecha de Publicacion</td>
		<td>Actualizar</td>
		<td>Inhabilitar</td><tr>';		

		// print_r($sqlResponse);
		
		foreach($sqlResponse as $value){
		  	// echo "Salary: $value->ID_libro<br>";
		  	$conteo++;
			echo '<form id="form'.$conteo.'" action="" method="POST" style="width: 100%"><tr>
			<td><input type="text" name="identificador" value="'.$value->ID_libro.'"/></td>
			<td><input type="text" name="updateT" value="'. $value->titulo.'"/></td>
			<td><input type="text" name="updateA" value="'. $value->autor.'"/></td>
			<td><input type="text" name="updateG" value="'. $value->genero.'"/></td>
			<td><input type="text" name="updateE" value="'. $value->editorial.'"/></td>
			<td><input type="text" name="updateFP" value="'. $value->fecha_publicacion.'"/></td>
			<td><input type="text" name="updateES" value="'. $value->estado.'"/></td>
			<td><input type="submit" name="update" value="Actualizar"/></td>
			<td><input type="submit" name="delete" value="Inhabilitar"/></td></tr></form>';
		}
		echo '</table>';

		if(isset($_POST["update"]))
		{
			$txtT = $_POST['updateT'];
			$txtA = $_POST['updateA'];
			$txtG = $_POST['updateG'];
			$txtE = $_POST['updateE'];
			$txtFP = $_POST['updateFP'];
			$txtES = $_POST['updateES'];
			$idLibro = $_POST['identificador'];
			// $sqlUpdate = $mysql->query('UPDATE libro SET titulo = "'.$txtT.'",autor = "'.$txtA.'",genero= "'.$txtG.'",editorial = "'.$txtE.'",fecha_publicacion= "'.$txtFP.'" WHERE ID_libro = '. $idLibro);
			
			$response = call_user_func_array(array('libroController', 'actualizarLibro'), array($txtT, $txtA, $txtG, $txtE, $txtFP, $txtES, $idLibro));
			if($response === "1")
			{
				//header("Location: " . $_SERVER['REQUEST_URI']);
			}
			else
			{
				echo '<script>alert("Se presentaron inconvenientes al momento de actualizar el registro.  || '.$response.');</script>';
			}
		}
	
		if(isset($_POST["delete"]))
		{
			$idLibro = $_POST['identificador'];
			// $sqlDelete = $mysql->query('DELETE FROM libro WHERE ID_libro = '. $idLibro);
			$response = call_user_func_array(array('libroController', 'eliminarLibro'), array($idLibro));

			if($response === "1")
			{
				//header("Location: " . $_SERVER['REQUEST_URI']);
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