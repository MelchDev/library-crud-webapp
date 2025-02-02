<?php

require_once 'Database.php';


class Inventario
{
	private $pdo;
	public $ID_inventario;
	public $cantidad_disponible;
	public $cantidad_bruta;
	public $estado;
	public $ID_libro;
	public $ID_usuario;

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

	public function Registrar(Inventario $data)
	{
		try 
		{
			$sqlMax = $this->pdo->prepare("select max(ID_inventario + 1) as Conteo from inventario"); 
			$sqlMax->execute();
			$response = $sqlMax->fetch(PDO::FETCH_OBJ);		

		$sql = "INSERT INTO inventario (ID_inventario,cantidad_disponible,cantidad_bruta,estado,ID_usuario,ID_libro) 
		        VALUES (?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $response->Conteo,
                    $data->cantidad_disponible, 
                    $data->cantidad_bruta, 
                    $data->estado,
                    $data->ID_usuario,
                    $data->ID_libro,
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

			$stm = $this->pdo->prepare("SELECT * FROM inventario");
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
			$sql = "UPDATE inventario SET 
						cantidad_disponible   = ?,
                        cantidad_bruta        = ?,
						estado                = ?, 
						ID_usuario            = ?,
						ID_libro              = ?
				    WHERE ID_inventario       = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        
                        $data->cantidad_disponible,
                        $data->cantidad_bruta,
                        $data->estado,
                        $data->ID_usuario,
                        $data->ID_libro,
                        $data->ID_inventario
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
			            ->prepare("DELETE FROM inventario WHERE ID_inventario = ?");			          

			$stm->execute(array($ID_inventario));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	
}



?>