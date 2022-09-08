<?php

class UserSession{ //clase que va a manejar la sesion

    public function __construct(){
        session_start();
    }
    //funcion que ayuda a poner valor a mi sesion actual
    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
    }

    public function getCurrentUser(){ //funcion que obtiene el nombre de usuario en la sesion activa
        return $_SESSION['user'];
    }

    public function closeSession(){
        session_unset(); //borra los valores de la sesion 
        session_destroy(); // destruye las sesiones actuales
    }
}


?>