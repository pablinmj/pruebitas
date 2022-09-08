<?php

include_once 'Controllers/functions.php';
include_once 'Controllers/user_session.php';

$userSession = new UserSession();
$user = new User();


$userForm = $_POST['user'];
$passForm = $_POST['password'];
$display = "d-none";
//si existe una sesion
if(isset($_SESSION['user'])){
    $user->setUser($userSession->getCurrentUser());
    include_once 'Views/home.php';
}else if(isset($userForm) && isset($passForm)){
     
    //funcion lo que va hacer es entrar a la base de datos 
    //y validar por el nombre de usuario y el password y regresando true y/o false
    if($user->userExists($userForm, $passForm)){
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        include_once 'Views/home.php';
        
    }else{
 
        $display = "";
        $border = "is-invalid";
        include_once 'Views/login.php';
    }

}else{
    
    include_once 'Views/login.php';
}

?>