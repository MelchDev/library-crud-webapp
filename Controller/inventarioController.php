<?php

require_once('../../../Model/Inventario.php');

class inventarioController
{
    public function crearInventario()
    {
        $inventario = new Inventario();
        
        $inventario->cantidad_disponible = $_REQUEST["cantidad_disponible"];
		$inventario->cantidad_bruta = $_REQUEST["cantidad_bruta"];
        $inventario->estado = $_REQUEST["estado"];
        $inventario->ID_libro = $_REQUEST["ID_libro"];
        $inventario->ID_usuario = $_REQUEST["ID_usuario"];
        
        $inventario->Registrar($inventario);        
    }

    public function listarInventario()
    {
        $inventario = new Inventario();
        return $inventario->Consultar();
    }

    public function actualizarInventario()
    {
        try
        {
            $inventario = new Inventario();
            $inventario->ID_inventario = $_POST['identificador'];
            $inventario->cantidad_disponible = $_POST['updateCD'];
            $inventario->cantidad_bruta = $_POST['updateCB'];
            $inventario->estado = $_POST['updateEstado'];
            $inventario->ID_libro = $_POST['updateIDL'];
            $inventario->ID_usuario = $_POST['updateIDU'];
            $inventario->Actualizar($inventario);

            return "1";
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function eliminarInventario()
    {
        try
        {
            $inventario = new Inventario();
            $ID_inventario = $_REQUEST["identificador"];
            $inventario->Eliminar($ID_inventario);

            return "1";
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
    }
}

?>