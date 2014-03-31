<?php

	if (isset($_SESSION['name'])){
		$SESSION_NAME = $_SESSION['name'];
		$display_guest = "none";
		$display_user = "inline";
	}else{
		$SESSION_NAME = "Guest";
		$display_guest = "inline";
		$display_user = "none";
	}

	$home="";
	$contactus="";
	$items="";
	$aboutme="";
	
	if (isset($_GET['p'])){
		switch($_GET['p'])
		{
			case "home": 
			  	$home="active";
				return;
			case "contactus": 
				$contactus="active";
				return;
			case "Breakfast": 
			case "Caffeine Pre Workout":
			case "Train Like A Fitness Model":
			case "Dinner": 
			case "Plank": 
		    case "Items": 
				$items="active";
				return;
			case "About Me": 
				$aboutme="active";
				return;
			default: 
				$home="active";
				return;
		}
	}

?>