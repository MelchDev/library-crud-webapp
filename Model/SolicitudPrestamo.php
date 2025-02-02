<?php 

require_once 'Database.php';

class SolicitudPrestamo
{
	public $pdo;
	public $ID_solicitrud_prestamo;
	public $fecha_prestamo;
	public $fecha_devolucion;
	public $fecha_devolucion_aplicada;
	public $ID_usuario;
	public $ID_libro;
	public $ID_estado;


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

	public function Registrar(SolicitudPrestamo $data)
	{
		try 
		{
			$sqlMax = $this->pdo->prepare("select max(ID_solicitud_prestamo + 1) as Conteo from solicitud_prestamo"); 
			$sqlMax->execute();
			$response = $sqlMax->fetch(PDO::FETCH_OBJ);			

			$sql = "INSERT INTO solicitud_prestamo (ID_solicitud_prestamo, fecha_prestamo, fecha_devolucion, fecha_devolucion_aplicada, ID_usuario, ID_libro, ID_estado ) 
				VALUES (?, ?, ?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$response->Conteo,
						$data->fecha_prestamo,
						$data->fecha_devolucion,
						$data->fecha_devolucion_aplicada,
						$data->ID_usuario,
						$data->ID_libro,
						$data->ID_estado
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

			$stm = $this->pdo->prepare("SELECT * FROM solicitud_prestamo");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function Actualizar(SolicitudPrestamo $data)
	{
		try 
		{
			$sql = "UPDATE solicitud_prestamo SET fecha_prestamo = ?, fecha_devolucion = ?, fecha_devolucion_aplicada = ?, ID_usuario = ?, ID_libro = ?, ID_estado = ? WHERE ID_solicitud_prestamo = ?";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->fecha_prestamo,
						$data->fecha_devolucion,
						$data->fecha_devolucion_aplicada,
						$data->ID_usuario,
						$data->ID_libro,
						$data->ID_estado,
						$data->ID_solicitud_prestamo
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
						->prepare("DELETE FROM solicitud_prestamo WHERE ID_solicitud_prestamo = ?");			          

			$stm->execute(array($id));
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}

?>
