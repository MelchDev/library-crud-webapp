<?php

require_once('../../../Model/Usuario.php');

class usuarioController
{
    public function crearUsuario()
    {
        $usuario = new Usuario();
        
        $usuario->nombre_usuario = $_REQUEST["nombre_usuario"];
		$usuario->apellido_usuario = $_REQUEST["apellido_usuario"];
        $usuario->contrasena = $_REQUEST["contrasena"];
        $usuario->documento = $_REQUEST["documento"];
        $usuario->fecha_nacimiento = $_REQUEST["fecha_nacimiento"];
        $usuario->correo = $_REQUEST["correo"];
        $usuario->telefono = $_REQUEST["telefono"];
        $usuario->rol = $_REQUEST["rol"];
        
        $usuario->Registrar($usuario);        
    }

    public function listarUsuario()
    {
        $usuario = new Usuario();
        return $usuario->Consultar();
    }

    public function actualizarUsuario()
    {
        try
        {
            $usuario = new Usuario();
            $usuario->ID_usuario = $_POST['identificador'];
            $usuario->nombre_usuario = $_POST['updateNombre'];
            $usuario->apellido_usuario = $_POST['updateApellido'];
            $usuario->contrasena = $_POST['updateContrasena'];
            $usuario->documento = $_POST['updateDocumento'];
            $usuario->fecha_nacimiento = $_POST['updateFechaNacimiento'];
            $usuario->correo = $_POST['updateCorreo'];
            $usuario->telefono = $_POST['updateTelefono'];
            $usuario->rol = $_POST['updateRol'];
            $usuario->Actualizar($usuario);

            return "1";
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function eliminarUsuario()
    {
        try
        {
            $usuario = new Usuario();
            $ID_usuario = $_REQUEST["identificador"];
            $usuario->Eliminar($ID_usuario);

            return "1";
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
    }
}

?>