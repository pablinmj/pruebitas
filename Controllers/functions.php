<?php

require_once 'Models/connectionDB.php';
require_once 'Models/view.php';


class User extends DB { //clase User hereda de la clase database

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new ingreso();
    }

    public function userExists($user, $pass){
        
        $sha1pass = sha1($pass);
    

        //query para preparar sentencia en pdo
    
        $query = $this->connect()->prepare('SELECT * FROM User WHERE username = :user AND userpass = :pass');
        //el 'user' compara con el $user que contiene en los parametros que le pase
        $query->execute(['user' => $user, 'pass' => $sha1pass]);

        //con esta funcion valido si en la base de datos hay filas registradas
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    //funcion que asigna de acuerdo al usuario que inicie sesion
    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM User WHERE username = :user');
        $query->execute(['user' => $user]);

        foreach ($query as $currentUser) {
            $this->username = $currentUser['username'];
        }
    }
    //funcion para obtener la variable del nombre
    public function getNombre(){
        return $this->username;
    }
}

public function Guardar(){
    $pvd = new ingreso();

    //Captura de los datos del formulario (vista).
    $pvd->Nombre = $_REQUEST['Nombre'];
    $pvd->Email = $_REQUEST['Email'];
    $pvd->Username = $_REQUEST['Username'];
    $pvd->Userpass = $_REQUEST['Userpass'];


    //Registro al modelo votante.
    $this->model->Registrar($pvd);

    //header() es usado para enviar encabezados HTTP sin formato.
    //"Location:" No solamente envía el encabezado al navegador, sino que
    //también devuelve el código de status (302) REDIRECT al
    //navegador
    header('Location: index.php');
}

?>
