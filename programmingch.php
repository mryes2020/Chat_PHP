<?php
session_start();
$username = $_SESSION["user"];
	if (empty($username) || $username == " " || $username == "  ") {
		header("Location: index.php");
		
	}


?>

<html>
<head>
<link rel="stylesheet" href="style.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<style>
	body {
		font-family:Arial, Helvetica, sans-serif;
	}
</style>
<style>
.links {
	margin-top: 20px; 
	margin-bottom: 20px;
}
.link {
	text-decoration: none; 
	color: darkred; 
	transition: .2s; 
}
.link:hover {
	color: red;
	text-shadow: 0px 0px 10px red;
}
.active-link {
	color: #630000;
}
</style>
<!--<style>
body {
	background: black ;
	color: green;
	font-weight: bold;
}
.textBox {
	background: black; 
	border: solid green; 
	color: green; 
	padding: 10px;
	transition: .2s; 
	
}
.textBox:hover {
	background: green; 
	color: white; 
	box-shadow: 0px 0px 50px green;
}
.sendButton {
	padding: 10px; 
	color: green; 
	background: black; 
	border: solid green; 
	transition: .2s;
	cursor: pointer;
}
.sendButton:hover {
	background: green; 
	color: white; 
	box-shadow: 0px 0px 50px green;
}
</style>-->
<script type="text/javascript" src="jquery-1.2.6.pack.js"></script>
</head>
<body>
	<h1>Welcome to the vault</h1>
	<p>This is the programming channel</p>
	<div class="links"> |
		<a href="./generalch.php" class="link">General</a> |
		<a href="./programmingch.php" class="link active-link">Programming</a> |
		<a href="./hackingch.php" class="link">Hacking</a> |
		<a href="./networkingch.php" class="link">Networking</a> |
		<a href="./tehcsuppch.php" class="link">Tech support</a> |
		<a href="./talktoadminsch.php" class="link">Talk to admins</a> |
	</div>
	<div class="centeralised">
	
	<div class="chathistory"></div>

	<div class="chatbox">
		
		<form action="" method="POST">
			
			<textarea class="txtarea" id="message" placeholder="Message: " name="message"></textarea>

		</form>

	</div>

	</div>
</body>
</html>

<script>
</script>
<script type="text/javascript">


		$(document).ready(function(){
			loadChat();
		});
		$('#message').keypress(function(e) {	

			var message = $("#message").val();
			if(e.which == 13 ) {

				$.post('./handlers/ajax.php?action=SendMessageprogramming&message='+message, function(response){
					
					loadChat();
					$('#message').val('');

				});

			}

		});



		function loadChat()
		{
			$.post('handlers/ajax.php?action=getChatpro', function(response){
				
				$('.chathistory').html(response);

			});
		}


		setInterval(function(){
			loadChat();
		}, 2000);
		
	</script>
</html>


