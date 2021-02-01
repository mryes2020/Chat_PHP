<?php
session_start();
unset($_SESSION['user']);

?>

<html>
<head>
<title>Enter Password</title>
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
<h1>Enter The Secret Vault</h1>
<p>Type the secret password to enter: </p>	
<form method="POST" style="width: 80%;">
	<input type="password" class="textbox" placeholder="Password: " autocomplete="false" name="passwordTxt">
	<input type="submit" value="Enter!" class="button" name="passBtn">
</form>
<?php
error_reporting(0);	
session_start();
if ($_POST['passBtn']) {
	$_SESSION['password'] = $_POST['passwordTxt'];
	header("Location: login.php");
}

?>
</body></html>