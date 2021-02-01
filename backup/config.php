<?php

	$dbhost = "127.0.0.1";
	$dbname = "chat_server1";
	$dbuser = "chatHandler";
	$dbpass = 'jflksjflksdfoiuwtzweiuhwijnvfwlkcejnvsfdvzeifhvjshfdvoiefhuvaiqzf287hufi2hdc872ezfiu2hdciwz78dzciuwzd87cwhdc';

	try{
		$db = new PDO("mysql:dbhost=$dbhost;dbname=$dbname", "$dbuser", "$dbpass");
	}catch(PDOException $e) {
		echo $e->getMessage();
	}


?>
