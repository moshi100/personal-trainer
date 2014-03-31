<?php

class table
{
	
	protected $id = null;
	protected $table = null;
	
	function table()
	{
	}
	
	//	position data
	function bind($data)
	{
		foreach($data as $key => $value)
		{
			$this->$key = $value;
			//echo $value."----------------------------------------------";
		}
	}

	// select data
	function load($sql)
	{
		$dbo = database::getInstance();
		$dbo->doQuery($sql);
		$row = $this->get_row();
		return $row;
	}

	// insert data
	function store()
	{
		$dbo = database::getInstance();
		if ($dbo)
		{
			$sql = $this->buildQuery('store');
			if ($dbo->doQuery($sql))
			{
				return true;
			}
		}
		return false;
	}
	
	// get row
	function get_row()
	{
		$dbo = database::getInstance();
		$row = $dbo->loadQbjectList();
		if($row == null)
		{
			return false;
		}
		$this->bind($row);
		return true;
	}
	
	function get_id()
	{
		return $this->id;
	}
	
	protected function buildQuery($task)
	{
		$sql = "";
		if ($task == 'store')
		{
			if($this->id == "")
			{
				$keys = "";
				$values = "";
				$classVars = get_class_vars(get_class($this));
				$sql .="Insert into {$this->table}";
				foreach($classVars as $key=>$value)
				{
					if($key == "id" || $key == "table")
					{
						continue;
					}
					$keys .= "`{$key}`,";
					$values .= "'{$this->$key}',";
				}
				$sql .= "(".substr($keys, 0, -1).") values(".substr($values,  0, -1).")";
				//insert into table (id,name,lname) value(1,'moshik','cohen');
			}else{
				$classVars = get_class_vars(get_class($this));
				$sql .= "Update {$this->table} set ";
				foreach($classVars as $key=>$value)
				{
					if($key == "id" || $key == "table")
					{
						continue;
					}
					$sql .= "`{$key}` = '{$this->$key}', ";
				}
				$sql = substr($sql, 0, -2)." where id = {$this->id}";
			}
		}
		
		return $sql;
		
	}//end function

}//end class
