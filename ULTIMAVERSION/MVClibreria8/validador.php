<?php 
include_once 'includes/user.php';
include_once 'includes/user_session.php';

$userSession = new UserSession();
$user = new User();

if (isset($_SESSION['user'])) {
	echo "Hay sesion";
}
else if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['rol'])) {
	//echo "Validación de login";
	$userForm = $_POST['username'];
	$passForm = $_POST['password'];
	$rolForm = $_POST['rol'];
	if ($user->userExists($userForm, $passForm, $rolForm)) {
		echo "Usuario validado";
	}else{
		echo "nombre de usuario y/o password incorrecto";  
	}

}else{
	//echo "Login";
	include_once 'vistas/login.php';
}
?> 