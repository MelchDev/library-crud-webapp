<?php

require_once('../../Model/Usuario.php');

class login_controller
{

	public function Iniciar_Sesion()
	{
		$user = new Usuario();

		$user->nombre_usuario = $_REQUEST["Usuario"];
		$user->contrasena = $_REQUEST["Contrasena"];
		$user->rol = $_REQUEST["Rol"];

		if ($resultado = $user->Iniciar_sesionU($user)) 
		{

		//$resultado = $user->Iniciar_sesionU($user);
		// print_r($resultado->rol);

			if ($resultado->rol === '1') 
			{
			$_SESSION["activo"] = "1";
			header('Location: ../../View/Vistas/index_admin.php');
			}
			if ($resultado->rol === '2') 
			{
			$_SESSION["activo"] = "1";
			header('Location: ../../View/Vistas/index_userp.php');
			}
			if ($resultado->rol === '3') 
			{
			$_SESSION["activo"] = "1";
			header('Location: ../../View/Vistas/index_userr.php');
			}
		
			exit();
		}
		else
		{
			header('Location: login.php');
		}
	}

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
        
        $usuario->Registrar($usuario);        
    }

}

?>