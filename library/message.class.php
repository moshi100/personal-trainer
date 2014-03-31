<?php

class message extends table
{
	var $idItem = null;
	var $name = null;
	var $message = null;
	var $date = null;
	var $table = "messages";
	
	function get_message_by_idItem($idItem)
	{
		$row = $this->load($this->select_query_by_idItem($idItem));
		$arr = $this->get_message($row);
		return $arr;
	}
	
	function get_message($row)
	{
		$arr = array();
		$i = 0;
		
		while($row)
		{
			$arr[$i] = new message($this);
			$arr[$i]->bind($this);
			$row = $this->get_row();
			$i++;
		}
		
		return $arr;
	}
	
	private function select_query_by_idItem($idItem)
	{
		$sql = "Select * from {$this->table} where idItem = '{$idItem}'";
		return $sql;
	}
	
	
}// end class
