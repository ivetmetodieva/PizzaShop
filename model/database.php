<?php
//Singleton implementation of database connection 
class Database{
	private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $databaseName = "";
	
	private static $instance;
	private $connection;
	private $results = array();
	private $count = 0;
	private $query;
	
	
	
	private function __construct(){
	
	}
	

	public static function getInstance(){
		if(!isset(self::$instance)){
			$instance = new Database();
		}
		return $instance;
	}
	
	public function connect(){
		$this->connection = mysqli_connect($this->host,$this->username ,$this->password , $this->databaseName);
		if(mysqli_connect_error()) {
			trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
				 E_USER_ERROR);
				 
	}

	//use as Database::getInstance()->query("sql string here")->results() gives the saved objects in the db 
	public function query($sql){
		if($this->query = $this->connection->query($sql)){
			while($row = $this->query->fetch_object()){
				$this->results[] = $row;
			}
			$this->count = $this->query->num_rows;
		}
		return $this;
	}
	
	//the result of the search or null
	public function results(){
		return $this->results;
	}
	
	//returns if the queried property exists in the DB as occurance
	public function count(){
		return $this->count;
	}
}


?>