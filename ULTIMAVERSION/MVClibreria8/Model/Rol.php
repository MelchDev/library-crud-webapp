<?php

require_once 'Database.php';

class Rol{

	private $pdo;
	public $ID_rol;
	public $descripcion_Rol;
	
	public function __CONSTRUCT()
	{
		
		try{
			$this->pdo = Database::StartUp();
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function Registrar(Rol $data)
	{
		try
		{
			$sqlMax = $this->pdo->prepare("select max(ID_rol + 1) as Conteo from rol"); 
			$sqlMax->execute();
			$response = $sqlMax->fetch(PDO::FETCH_OBJ);			

			$sql = "INSERT INTO rol (ID_rol, descripcion_Rol) VALUES(?, ?)";
			$this->pdo->prepare($sql)->execute(
												array
												(
													$response->Conteo,
													$data->descripcion_Rol
												)
											);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Consultar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM rol");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	
	public function Actualizar(Rol $data)
	{
		try
		{
			$sql = "UPDATE rol SET descripcion_Rol = ? WHERE ID_rol = ?";
			$this->pdo->prepare($sql)->execute(
												array
												(
													$data->descripcion_Rol,
													$data->ID_rol
												)
											);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}	
	
	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM rol WHERE ID_rol = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}

?>