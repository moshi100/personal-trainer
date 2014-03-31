<?php

include_once("application/models/connection.model.php");


class connectionController {
	public $connection;
	
	public function __construct()  
    {
    	$this->connection = new connectionModel();
    }
    
	public function login($array_data,$table)
	{
        $status = $this->connection->login($array_data,$table);
        return $status;
	}
	
	public function logout($table)
	{
        $status = $this->connection->logout($table);
        return $status;
	}
	
}
