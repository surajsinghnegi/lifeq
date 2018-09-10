<?php
class sqlConnect{


	protected $host = 'localhost';
	protected $dbname = 'test';
	protected $user = 'root';
	protected $pass = '';
	public $dbh;
	
	function __construct(){
	
		try{
			$this->dbh = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8","$this->user","$this->pass");
			$this->dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return $this->dbh;
		
		}catch(PDOException $e){ 
			
				print "Error!".$e->getMessage();
				die();
			
			}
	
	}


}
?>