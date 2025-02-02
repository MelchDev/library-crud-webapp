<?php

require_once 'Database.php';

class Sanciones
{
	private $pdo;
	public $ID_sancion;
	public $estado_sancion;
	public $descripcion;
	public $ID_solicitud_prestamo;
	
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

	public function Registrar(Sanciones $data)
	{
		try 
		{

			$sqlMax = $this->pdo->prepare("select max(ID_libro + 1) as Conteo from libro"); 
			$sqlMax->execute();
			$response = $sqlMax->fetch(PDO::FETCH_OBJ);			

		$sql = "INSERT INTO sanciones (ID_sancion,estado_sancion,descripcion,ID_solicitud_prestamo) 
				VALUES (?, ?, ?, ?)";

		$this->pdo->prepare($sql)
			->execute(
				array(
					$data->ID_sancion,
					$data->estado_sancion,
					$data->descripcion, 
					$data->ID_solicitud_prestamo
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Consultar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM sanciones");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE sanciones SET 
						estado_sancion             = ?,
						descripcion                = ?,
						ID_solicitud_prestamo      = ?,
					WHERE ID_sancion           = ?";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->estado_sancion,
						$data->descripcion, 
						$data->ID_solicitud_prestamo,
						$data->ID_sancion, 
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
						->prepare("DELETE FROM sanciones WHERE ID_sancion = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>