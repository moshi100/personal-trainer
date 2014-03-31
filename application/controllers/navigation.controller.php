<?php

include_once("application/models/select.model.php");

class navigationController {
	public $select;
	
	public function __construct()  
    {  
        $this->select = new selectController();
    }
	
	public function invoke()
	{
		if (isset($_GET['p'])){
			$this->get_direction();
		}else{
			$this->get_home("About Me","Dinner","item","col-md-4");
		}
	}
	
	private function get_direction()
	{
		switch($_GET['p'])
		{
			case "home": 
			  	$this->get_home("About Me","Dinner","item","col-md-4");
				return;
			case "contactus": 
				$this->get_contact("col-md-6 col-md-offset-3");
				return;
		    case "Items": 
				$this->select->get_item('all','item');
				return;
			case "About Me": 
				$this->select->get_item($_GET['p'],'sectionItem');
				return;
			case "Breakfast": 
			case "Caffeine Pre Workout":
			case "Train Like A Fitness Model":
			case "Dinner": 
			case "Plank": 
				$this->select->get_item($_GET['p'],'sectionItem');
				return;
			default: 
				$this->get_home("About Me","Dinner","item","col-md-4");
				return;
		}
	}
	
	private function get_home($item1,$item2,$location,$class1)
	{
		require_once 'application/views/_introduction.php';
		$item = $this->select->get_item($item1,$location);
		$item = $this->select->get_item($item2,$location);
		$this->get_contact($class1);
		require_once 'application/views/_sectionItem.php';
	}
	
	private function get_contact($class1)
	{
		require_once 'application/views/_contact.form.php';
	}

}
