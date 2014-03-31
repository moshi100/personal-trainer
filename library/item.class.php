<?php

class item extends table
{
	var $name = null;
	var $img = null;
	var $slogan = null;
	var $text = null;
	var $table = "items";
	
 	function get_item_by_name($name)
	{
		$row = $this->load($this->select_query_by_name($name));
		$arr = $this->get_items($row);
		return $arr;
	}

	function get_all_items()
	{
		$arr = array();
		$row = $this->load($this->select_query_by_all());
		$arr = $this->get_items($row);
		return $arr;
	}
	
	function get_items($row)
	{
		$arr = array();
		$i = 0;
		
		while($row)
		{
			$arr[$i] = new item($this);
			$arr[$i]->bind($this);
			$row = $this->get_row();
			$i++;
		}
		
		return $arr;
	}
	
	private function select_query_by_name($name)
	{
		$sql = "Select * from {$this->table} where name = '{$name}'";
		return $sql;
	}
	
	private function select_query_by_all()
	{
		$sql = "Select * FROM {$this->table}";
		return $sql;
	}
	
	
}// end class
