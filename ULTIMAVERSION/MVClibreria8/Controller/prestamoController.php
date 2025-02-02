<?php

require_once('../../../Model/SolicitudPrestamo.php');

class prestamoController
{
    public function crearPrestamo()
    {
        $prestamo = new SolicitudPrestamo();
        
        $prestamo->fecha_prestamo = $_REQUEST["fecha_prestamo"];
		$prestamo->fecha_devolucion = $_REQUEST["fecha_devolucion"];
        $prestamo->fecha_devolucion_aplicada = $_REQUEST["fecha_devolucion_aplicada"];
        $prestamo->ID_usuario = $_REQUEST["ID_usuario"];
        $prestamo->ID_libro = $_REQUEST["ID_libro"];
        $prestamo->ID_estado = $_REQUEST["ID_estado"];
        
        $prestamo->Registrar($prestamo);        
    }

    public function listarPrestamo()
    {
        $prestamo = new SolicitudPrestamo();
        return $prestamo->Consultar();
    }

    public function actualizarPrestamo()
    {
        try
        {
            $prestamo = new SolicitudPrestamo();
            $prestamo->ID_solicitrud_prestamo = $_POST['identificador'];
            $prestamo->titulo = $_POST['updateT'];
            $prestamo->autor = $_POST['updateA'];
            $prestamo->genero = $_POST['updateG'];
            $prestamo->editorial = $_POST['updateE'];
            $prestamo->fecha_publicacion = $_POST['updateFP'];
            $prestamo->Actualizar($prestamo);

            return "1";
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function eliminarPrestamo()
    {
        try
        {
            $prestamo = new SolicitudPrestamo();
            $ID_solicitrud_prestamo = $_REQUEST["identificador"];
            $prestamo->Eliminar($ID_solicitrud_prestamo);

            return "1";
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
    }
}

?>