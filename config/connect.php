<?php

	/*=========== Connection ==========*/
	
	$dbo = database::getInstance();
	$dbo->connect($db_host, $db_user, $db_pass, $db_name, $encoding);
 
	
?>
