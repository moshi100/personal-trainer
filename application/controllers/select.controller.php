<?php

include_once("application/models/select.model.php");

class selectController {
	public $select;
	
	public function __construct()  
    {
    	$this->select = new selectModel();
    }

	public function get_message_by_idItem($idItem,$location)
	{
		$arr = array();
		$arr = $this->select->get_message_by_idItem($idItem);
		$i = 0;
		$message = null;
		while($i < count($arr)){
			$message = $arr[$i];
			require 'application/views/_'.$location.'.php';
			$i++;
		}
		return $message;
	}
	
	public function get_item($item,$location)
	{
		$arr = array();
		$arr = $this->select->get_item($item);
		$i = 0;
		while($i < count($arr)){
			$item = $arr[$i];
			require 'application/views/_'.$location.'.php';
			$i++;
		}
		return $item;
	}
	
}
