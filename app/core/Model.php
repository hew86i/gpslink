<?php


abstract class Model
{

	protected $db;

	public final function __construct(){

		$registry = Register::getInstance();

		if($registry->db == NULL){

			$db_settings = $registry->settings()->db;

			// $db = new PDO('pgsql:dbname=mydb;host=localhost;user=myuser;password=mypass');

			$dsn = 'pgsql:dbname=' . $db_settings->dbname . ';host=' . $db_settings->hostname;
			$crd = ';user=' . $db_settings->username . ';password=' . $db_settings->password;

			$registry->db = new PDO($dsn . $crd);
		}

		$this->db = $registry->db;
	}

	public function query($sql){
		$q = $this->db->query($sql);
		return $q->fetchAll(PDO::FETCH_ASSOC);
	}
    public function dlookup($sql){
		$ret = $this->db->query($sql);
		return $ret->fetch(PDO::FETCH_ASSOC);
	}

}


?>