<?php

class UserSession{

    public function __construct(){
        session_start();
    }

    public function setCurrentUser($nombre){
        $_SESSION['nombre'] = $nombre;
    }

    public function getCurrentUser(){
        return $_SESSION['user'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }
}

?>