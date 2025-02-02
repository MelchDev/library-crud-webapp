<?php

require_once 'Database.php';

class Usuario{
	
	private $pdo;
	public $ID_usuario;
	public $nombre_usuario;
	public $apellido_usuario;
	public $contrasena;
	public $documento;
	public $fecha_nacimiento;
	public $correo;
	public $telefono;
	public $rol;
	
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
	
	public function Registrar(Usuario $data)
	{
		try
		{	
			$sqlRol = "SELECT ID_rol as ID FROM rol WHERE descripcion_Rol = 'indefinido'";
			$result = array();
			if(!isset($data->rol))
			{	
				$res = $this->pdo->prepare($sqlRol); 
				$res->execute();
				$result = $res->fetchAll(PDO::FETCH_OBJ);
 			}
			
 			//print_r($result[0]->ID);

			$sqlMax = $this->pdo->prepare("select max(ID_usuario + 1) as Conteo from usuario"); 
			$sqlMax->execute();
			$response = $sqlMax->fetch(PDO::FETCH_OBJ);	


			$sql = "INSERT INTO usuario(ID_usuario, nombre_usuario, apellido_usuario, contrasena, documento, fecha_nacimiento, correo, telefono, rol)
						VALUES(?,?,?,?,?,?,?,?,?)";
						
			$this->pdo->prepare($sql)->execute(array
												(
													$response->Conteo,
													$data->nombre_usuario,
													$data->apellido_usuario,
													$data->contrasena,
													$data->documento,
													$data->fecha_nacimiento,
													$data->correo,
													$data->telefono,
													$result[0]->ID
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

			$stm = $this->pdo->prepare("SELECT * FROM usuario");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Usuario $data)
	{
		try 
		{
			$sql = "UPDATE usuario SET nombre_usuario = ?, apellido_usuario = ?, contrasena = ?, documento = ?, fecha_nacimiento = ?, correo = ?, telefono = ?, rol = ? WHERE ID_usuario = ?";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->nombre_usuario,
						$data->apellido_usuario,
						$data->contrasena,
						$data->documento,
						$data->fecha_nacimiento,
						$data->correo,
						$data->telefono,
						$data->rol,
						$data->ID_usuario
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
						->prepare("DELETE FROM usuario WHERE ID_usuario = ?");			          

			$stm->execute(array($id));
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Iniciar_sesionU(Usuario $data)
	{
		$response = $this->pdo->prepare("select rol from usuario where nombre_usuario = ? and contrasena = ? and rol = ?");
		$response->execute(array($data->nombre_usuario, $data->contrasena, $data->rol));
		return $response->fetch(PDO::FETCH_OBJ);
	}
}
?>