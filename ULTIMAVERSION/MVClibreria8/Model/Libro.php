<?php 

require_once 'Database.php';

class Libro
{
	public $pdo;
	public $ID_libro;
	public $titulo;
	public $autor;
	public $genero;
	public $editorial;
	public $fecha_publicacion;
	public $estado;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Libro $data)
	{
		try 
		{
			$sqlMax = $this->pdo->prepare("select max(ID_libro + 1) as Conteo from libro"); 
			$sqlMax->execute();
			$response = $sqlMax->fetch(PDO::FETCH_OBJ);	


			$sql = "INSERT INTO libro (ID_libro, titulo, autor, genero, editorial, fecha_publicacion, estado) 
				VALUES (?, ?, ?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$response->Conteo,
						$data->titulo,
						$data->autor,
						$data->genero,
						$data->editorial,
						$data->fecha_publicacion,
						$data->estado,
					)
				);
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Consultar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM libro");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Buscar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM libro");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function Actualizar(Libro $data)
	{
		try 
		{
			$sql = "UPDATE libro SET titulo = ?, autor = ?, genero = ?, editorial = ?, fecha_publicacion = ?, estado = ? WHERE ID_libro = ?";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->titulo,
						$data->autor,
						$data->genero,
						$data->editorial,
						$data->fecha_publicacion,
						$data->estado,
						$data->ID_libro
					)
				);
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

 public function Eliminar($id)
 {
		try 
 	{
 		
 		$stm = $this->pdo
 					->prepare("UPDATE libro set estado = 'inactivo' where estado = 'activo' ");			          

 		$stm->execute(array($id));
 	} 
 	catch (Exception $e) 
 	{
			die($e->getMessage());
 	}
 }

}

?>
