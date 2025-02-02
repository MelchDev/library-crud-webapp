<?php
include "db.php";

class User extends DB{
    private $nombre;
    private $contrasena;


    public function userExists($nombre, $contrasena){
        $md5pass = md5($contrasena);
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE nombre = :nombre AND contrasena = :contrasena');
        $query->execute(['nombre' => $nombre, 'contrasena' => $md5contrasena]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($nombre){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE nombre = :nombre');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
}

?>