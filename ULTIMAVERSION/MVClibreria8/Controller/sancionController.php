<?php

require_once('../../../Model/Sanciones.php');

class sancionController
{
    public function crearSancion()
    {
        $sancion = new Sanciones();
        
        $sancion->Estado_sancion = $_REQUEST["estado_sancion"];
		$sancion->descripcion = $_REQUEST["descripcion"];
        $sancion->ID_solicitud_prestamo = $_REQUEST["ID_solicitud_prestamo"];
        
        
        $sancion->Registrar($sancion);        
    }

    public function listarSancion()
    {
        $sancion = new Sanciones();
        return $sancion->Consultar();
    }

    public function actualizarSancion()
    {
        try
        {
            $sancion = new Sanciones();
            $sancion->ID_sancion = $_POST['identificador'];
            $sancion->Estado_sancion = $_POST['updateES'];
            $sancion->descripcion = $_POST['updateD'];
            $sancion->ID_solicitud_prestamo = $_POST['updateIDSP'];
            $sancion->Actualizar($sancion);

            return "1";
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function eliminarSancion()
    {
        try
        {
            $sancion = new Sanciones();
            $ID_sancion = $_REQUEST["identificador"];
            $sancion->Eliminar($ID_sancion);

            return "1";
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
    }
}

?>