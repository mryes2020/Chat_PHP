<?php
session_start();
$password = $_SESSION['password'];
unset($_SESSION['user']);
if ($password != "hagbimjkikbobpiylsfpfbefmoilhoilhyiwdhjwehokm") {
	header("Location: index.php");
	
}
?>
<html>
<head>
<title>Login</title>
<style>
body {
	background: black; 
	color: red; 
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
.textbox {
	background: black; 
	border: solid red; 
	color: red;
	padding: 10px;
	transition: .4s;
}
.textbox:hover {
	background: red; 
	color: black; 
	box-shadow: 0px 0px 10px red;
}
.button {
	padding: 10px; 
	background: black; 
	border: solid red; 
	color: red;
	cursor: pointer;
	transition: .4s;
}
.button:hover {
	background: red; 
	color: black; 
	box-shadow: 0px 0px 10px red ;
}
</style>
</head>
<body>
<h1>Login</h1>
<p>Type your username to enter the chat:</p>	
<form method="post" style="width: 80%;">
	<input type="text" class="textbox" placeholder="Username: " name="loginTextBox">
	<input type="submit" value="Enter!" class="button" name="loginButton">
</form>
<?php
error_reporting(0);	
session_start();
if ($_POST['loginButton']) {
	$_SESSION['user'] = $_POST['loginTextBox'];
	header("Location: generalch.php");
}

?>
</body></html>