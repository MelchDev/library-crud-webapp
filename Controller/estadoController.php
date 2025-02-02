<?php

require_once('../../../Model/Estado.php');

class estadoController
{
    public function crearEstado()
    {
        $estado = new Estado();
        $estado->descripcion_estado = $_REQUEST["descripcion_estado"];
        $estado->Registrar($estado);        
    }
    public function listarEstado()
    {
        $estado = new Estado();
        return $estado->Consultar();
    }

    public function actualizarEstado()
    {
        try
        {
            $estado = new Estado();
            $estado->ID_rol = $_POST['identificador'];
            $estado->descripcion_estado = $_POST['desE'];
            $estado->Actualizar($estado);

            return "1";
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function eliminarEstado()
    {
        try
        {
            $estado = new Estado();
            $ID_estado = $_REQUEST["identificador"];
            $estado->Eliminar($ID_estado);

            return "1";
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
    }
}

?>