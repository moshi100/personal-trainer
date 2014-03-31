<?php

class factory
{

	public static function get_class($type,$extend)
    {
    	if (include_once "library/" . $extend . '.class.php')
    	{
	    	if (include_once "library/" . $type . '.class.php') 
		    {
	            return new $type;
	        } 
	        else 
	        {
	            throw new Exception('Class not found');
	        }
    	}
    	else 
        {
            throw new Exception('Class not found');
        }
    }
    
}
