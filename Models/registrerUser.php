<?php
require_once 'connectionDB.php';
class ingreso
{
	//Atributo para conexión a SGBD
	private $pdo;
    public $Nombre;
    public $Email;
    public $Username;
    public $UserPass;
    //public $Rol;

	//Método de conexión a SGBD.
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = DB::connect();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function Registrar(ingreso $data)
	{
		var_dump($data);
		exit();
		try
		{
			//Sentencia SQL.
			$sql = "INSERT INTO User (nombre,email,username,userpass)
		        VALUES (?, ?, ?, ?)";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->Nombre,
                    $data->Email,
                    $data->Username,
                    $data->Userpass,
				)
			);
		
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}