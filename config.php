<?php

	$dbhost = "127.0.0.1"; // the hostname - ip 
	$dbname = "chat_server1"; // the database name
	$dbuser = "root"; // username for the database - most likely its root
	$dbpass = ''; // password - most likely its nothing 

	try{
		$db = new PDO("mysql:dbhost=$dbhost;dbname=$dbname", "$dbuser", "$dbpass");
	}catch(PDOException $e) {
		echo $e->getMessage();
	}


?>
