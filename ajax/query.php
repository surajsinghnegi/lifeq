<?php

require_once('connection.php');



class query extends sqlConnect {



	public $conn;

	

	function __construct(){

	

	

		$this->conn = parent::__construct();

		return $this->conn;

	

	}

	function top10(){

	

		$sql = $this->conn->prepare("SELECT * FROM `quotes1` order by RAND() limit 10");

		$sql->execute();

		$result = $sql->fetchAll(PDO::FETCH_OBJ);

		return $result;

	}




}



?>