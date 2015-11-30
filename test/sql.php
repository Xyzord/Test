<?php
class Database {
	
	/**
	*
	*
	* @var store the database location
	* @var store the database login username
	* @var store the database login password
	* @var store the database name
	* @var store the database connection identifier
	*/
	private $host;
	private $username;
	private $password;
	private $db_name;
	private $db_connect = false;
	
	/**
	*
	* on instantiation of Database it sets the Database's attributes
	*
	* @param string $host database location
	* @param string $username database username
	* @param string $password database password
	* @param string $db_name 	database name
	*/
	public function __construct($host, $username, $password, $db_name) {
		
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->db_name = $db_name;
	
	}
	
	/**
	*
	* when a Database object is destroyed, it will close the connection to the database
	*/
	public function __destruct() {
	
		if($this->db_connect)
			mysqli_close($this->db_connect);
	}
	/**
	* Make the connection to the database
	*
	*/
	public function connect() {
		//in case of correct $host value
		if(!empty( $this->host )) {
			
			$this->db_connect = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
			
			if(!mysqli_connect_errno()) {
				
				mysqli_select_db($this->db_connect, $this->db_name);
				
				//tell the database which charset do we use
				mysqli_query($this->db_connect, "SET NAMES utf8");
				
			}else //at failed connection
				echo "Connection failed > ERROR: " . mysqli_connect_error();
			
		}else //at incorrect $host value
			echo  "Database host is missing!";
	}
	
	/**
	*
	* Get the data from the database
	*
	* @param string $table the table name for sql query
	* @return resource
	* @return false if the query was unsuccesful
	*/
	public function select($table) {
		//if is there a connection to the database
		if($this->db_connect) {
			
			if($table == "advertisements") //query for advertisements
				$qStr = "SELECT ads.id AS adsID, ads.title AS adsTitle, usr.name AS usrName FROM advertisements ads INNER JOIN users usr ON (usr.id = ads.userid);";
			else //query for everything else, in our case it can be only for users, with successful query result
				$qStr = "SELECT * FROM ".$table;
				
				//run query
				$queryResult = mysqli_query($this->db_connect, $qStr);
			
			if($queryResult)
				return $queryResult;
			else
				echo "Database selection failed!";
		}
		return false;
	}
}//end Database
?>