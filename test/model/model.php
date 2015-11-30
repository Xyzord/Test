<?php
//import sql.php
require_once("sql.php");

/**
*
* The Model class query the information from the server
*
*/
class Model {
	
	/**
	* @var it will contaion a Database connection
	*/
	public $db;
	
	/**
	*
	* when you instantiate the Model, it will set the db attribute's value and connect to the Database
	*/
	public function __construct() {
		
		$this->db = new Database("localhost","root","","advertisement_db");
		$this->db->connect();
		
	}
	
	/**
	*
	* when a Model object is destroyed, it will call the Database's __destruct() method
	*/
	public function __destruct() {
		if(is_object($this->db))
			//call the Database class's __destruct() method
			unset($this->db);
	}
	
	/*
	* Call the db attribute's select() method
	*
	* @return result of select() method's value
	*/
	public function getUserList() {
		if(is_object($this->db))
			return $this->db->select("users");
	}
	
	/*
	* Call the db attribute's select() method
	*
	* @return result of select() method's value
	*/
	public function getAdList() {
		if(is_object($this->db))
			return $this->db->select("advertisements");
	}
}//end Model

?>