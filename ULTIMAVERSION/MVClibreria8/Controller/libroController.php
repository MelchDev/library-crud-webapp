<?php

require_once('../../../Model/Libro.php');

class libroController
{
    public function crearLibro()
    {
        $libro = new Libro();
        
        $libro->titulo = $_REQUEST["titulo"];
		$libro->autor = $_REQUEST["autor"];
        $libro->genero = $_REQUEST["genero"];
        $libro->editorial = $_REQUEST["editorial"];
        $libro->fecha_publicacion = $_REQUEST["fecha_publicacion"];
        $libro->estado = 'activo';


        
        $libro->Registrar($libro);        
    }

    public function listarLibros()
    {
        $libro = new Libro();
        return $libro->Consultar();
    }

    public function buscarLibros()
    {
        $libro = new Libro();
        return $libro->Buscar();
    }

    public function actualizarLibro()
    {
        try
        {
            $libro = new Libro();
            $libro->ID_libro = $_POST['identificador'];
            $libro->titulo = $_POST['updateT'];
            $libro->autor = $_POST['updateA'];
            $libro->genero = $_POST['updateG'];
            $libro->editorial = $_POST['updateE'];
            $libro->fecha_publicacion = $_POST['updateFP'];
            $libro->estado = $_POST['updateES'];
            $libro->Actualizar($libro);

            return "1";
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
    }

 public function eliminarLibro()
 {
     try
     {
         $libro = new Libro();
         $ID_libro = $_REQUEST["identificador"];
         $libro->Eliminar($ID_libro);

         return "1";
     }
     catch(Exception $e)
     {
         return $e->getMessage();
     }
 }
}

?>