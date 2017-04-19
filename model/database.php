<?php
//Singleton implementation of database connection 
class Database{
	private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $databaseName = "";
	
	private static $instance;
	private $connection;
	private $results;
	
	
	private function __construct(){
	
	}
	public static function getInstance(){
		if($instance == null){
			$instance = new Database();
		}
		return $instance;
	}
	
	public function connect(){
		$this->connection = mysqli_connect($this->host,$this->username ,$this->password , $this->databaseName);
	}

	//TODO add functions for adding ,removing ,querring results in db 
}


?>