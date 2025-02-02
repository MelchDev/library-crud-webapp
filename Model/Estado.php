<?php

require_once 'Database.php';

class Estado
{
	private $pdo;
	public $ID_estado;
	public $descripcion_estado;

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

	public function Registrar(Estado $data)
	{
		try 
		{

		$sqlMax = $this->pdo->prepare("select max(ID_estado + 1) as Conteo from estado"); 
			$sqlMax->execute();
			$response = $sqlMax->fetch(PDO::FETCH_OBJ);	

		$sql = "INSERT INTO estado (ID_estado,descripcion_estado) 
				VALUES (?, ?)";

		$this->pdo->prepare($sql)
			->execute(
				array(
					$data->ID_estado,
					$data->descripcion_estado, 
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

			$stm = $this->pdo->prepare("SELECT * FROM estado");
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
			$sql = "UPDATE estado SET 
						descripcion_estado        = ?,
					WHERE ID_estado       = ?";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->ID_estado, 
						$data->descripcion_estado,
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
						->prepare("DELETE FROM estado WHERE ID_estado = ?");			          

			$stm->execute(array($ID_estado));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}

?>