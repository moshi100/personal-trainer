<?php

	if (!empty($_POST))
	{
		include 'application/models/factory.model.php';
		include 'library/database.class.php';
		include 'config/config.php';
		include 'config/connect.php';
		
		if ($_GET['act'] == "insert"){
			include 'application/controllers/insert.controller.php';
			$insert = new insertController();
			echo $insert->invoke($_POST,$_GET['type']);
		}
		elseif ($_GET['act'] == "login"){
			include 'application/controllers/connection.controller.php';
			$connection = new connectionController();
			echo $connection->login($_POST,$_GET['type']);
		}
		elseif ($_GET['act'] == "logout"){
			include 'application/controllers/connection.controller.php';
			$connection = new connectionController();
			echo $connection->logout($_GET['type']);
		}
	}
