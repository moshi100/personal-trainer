<?php

class user extends table
{
	var $name = null;
	var $password = null;
	var $email = null;
	var $table = "users";
	
	public function login($name,$password)
    {
        $user = $this->checkCredentials($name,$password);
        if ($user) {
            @session_start();
            $_SESSION['name'] = $this->name;
            session_write_close();
            return true;
		}
        return false;
    }

    public function logout()
    {
        session_start();
	 	session_destroy();
	 	session_write_close();
	 	return true;
    }

    protected function checkCredentials($name,$password)
    {
    	$sql = $this->select_query_by_email($name);
    	$load = $this->load($sql);
    	
    	if($load)
    	{
    		if ($this->password == $password)
    		{
    			return true;
    		}
    		return false;
    	}
    }

    public function getMember()
    {
        return $this->nickname;
    }
    
	private function select_query_by_email($name)
	{
		$sql = "Select * from {$this->table} where name = '{$name}'";
		return $sql;
	}
	
}// end class
