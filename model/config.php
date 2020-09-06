<?php

class database
{
	private $servername;
	private $db_username;
	private $db_password;
	private $db_name;
	function connect()
	{
		$this->servername     = "localhost";
		$this->db_username    = "root";
		$this->db_password    = "";
		$this->db_name        = "das";
		try {
		  	$conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->db_name, $this->db_username, $this->db_password);
		  	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  	echo "Connected successfully";
		} catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}
	}
}