<?php

class database 
{
    private $host;
    private $user;
    private $pass;
    private $dbName;
    private static $instance;
    private $connection;
    private $results;
    private $numRows;
    
	function database()
	{
	}

    static function getInstance()
    {
    	if(!self::$instance)
    	{
    		self::$instance = new self();
    	}
    	return self::$instance;
    }

    function connect($host, $user, $pass, $dbName, $encoding)
    {
    	$this->host = $host;
    	$this->user = $user;
    	$this->pass = $pass;
    	$this->dbName = $dbName;

    	$this->connection = mysqli_connect($this->host, $this->user, $this->pass, $this->dbName);
    	mysqli_query($this->connection, "SET NAMES '$encoding'");

    }
    
    public function doQuery($sql)
    {
    	$this->results = mysqli_query($this->connection, $sql);
    	if ($this->results){
    		//$this->numRows = $this->results->num_rows;
    		return $this->results;
    	}
    }
    
    public function loadQbjectList()
    {
    	$obj = null;
    	if($this->results)
    	{
    		$obj = mysqli_fetch_assoc($this->results);
    	}
    	return $obj;
    }

}// end class
