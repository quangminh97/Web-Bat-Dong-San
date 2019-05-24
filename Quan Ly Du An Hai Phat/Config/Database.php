<?php

class Database
{
	protected $pd;
	public $minh='';
	function __construct()
	{
        // khoi tao ket noi
		$this->connect();
	}
	function connect() {
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db="ql_du_an";
		$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
		
		try {
			$this->pd = new PDO("mysql:host=$servername;dbname=$db", $username, $password,$options);
    // set the PDO error mode to exception
			$this->pd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $this->pd;
			
		}
		catch(PDOException $e)
		{
		
			echo "Connection failed: " . $e->getMessage();
		}
	}
	function disconnect(){
		$this->pd = null;
	}
	function __destruct()
	{
        // tu dong ngat ket noi
		$this->disconnect();
	}
	
}





?>