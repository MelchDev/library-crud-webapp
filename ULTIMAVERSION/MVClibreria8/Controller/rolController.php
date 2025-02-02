<?php

require_once('../../../Model/Rol.php');

class rolController
{
    public function crearRol()
    {
        $rol = new Rol();
        $rol->descripcion_Rol = $_REQUEST["descripcion_rol"];
        $rol->Registrar($rol);        
    }
    public function listarRol()
    {
        $rol = new Rol();
        return $rol->Consultar();
    }

    public function actualizarRol()
    {
        try
        {
            $rol = new Rol();
            $rol->ID_rol = $_POST['identificador'];
            $rol->descripcion_Rol = $_POST['updateDes'];
            $rol->Actualizar($rol);

            return "1";
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function eliminarRol()
    {
        try
        {
            $rol = new Rol();
            $ID_rol = $_REQUEST["identificador"];
            $rol->Eliminar($ID_rol);

            return "1";
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
    }
}

?>