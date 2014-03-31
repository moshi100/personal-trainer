<?php

include_once("application/models/insert.model.php");

class insertController {
	public $insert;
	
	public function __construct()  
    {
    	$this->insert = new insertModel();
    }
    
	public function invoke($array_data,$table)
	{
        $status = $this->insert->insertNewArticle($array_data,$table);
        return $status;
	}
	
}
