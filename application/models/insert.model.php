<?php

class insertModel {
	
	public function insertNewArticle($array_data,$table)
	{
		$info = factory::get_class($table, 'table');
		$info->bind($array_data);
		if ($info->store())
		{
			return true;
		}
		return false;
	}

}
