<?php

class connectionModel {
	
	public function login($array_data,$table)
	{
		$user = factory::get_class($table, 'table');
		$check_login = $user->login($array_data['name'], $array_data['password']);
		if ($check_login)
		{
			return true;
		}
		return false;
	}
	
	public function logout($table)
	{
		$user = factory::get_class($table, 'table');
		$check_logout = $user->logout();
		if ($check_logout)
		{
			return true;
		}
		return false;
	}

}
