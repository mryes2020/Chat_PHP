<?php
session_start();
$tryestobeadmin = false; 
$isadmin = false; 
$iskevin = false; 
$username = $_SESSION["user"];

if ($username == "administrator") {
	$tryestobeadmin = true; 
	$iskevin = true; 
}else {
	$tryestobeadmin = false; 
	$iskevin = false;
}


if ($tryestobeadmin == true && $iskevin == true) {
	
}else {
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
.admin {
	color: #ff2e2e;
	transition: .2s; 
}
.admin:hover {
	text-shadow: 0px 0px 10px red; 
	color: red;
}
</style>
</head>
<body>
<h1>Login to <span class="admin">Mr.hakarman</span></h1>
<p>Type the mr.hakarman's password to enter the chat as admin: </p>	
<form method="post" style="width: 80%;">
	<input type="password" class="textbox" placeholder="Password: " autocomplete="false"  name="loginTextBox">
	<input type="submit" value="Enter!" class="button" name="loginButton">
</form>
<?php
error_reporting(0);	
session_start();
$_SESSION["isreallyadmin1"] = $isadmin; 

if ($_POST['loginButton']) {
	
	if ($_POST["loginTextBox"] == "adminpassword1") {
		$_SESSION["adminpassword"] = $_POST["loginTextBox"];
		$isadmin = true; 
		
	}else {
		$isadmin = false; 
	}
	
	if ($isadmin == true) {
		//log here 
		$file = fopen("logsboii.txt","a");
		$date = date("y:m:d:h:i:sa");
		fwrite($file,"\n---------------------------------------\n" . "\nSomeone managed to login into the mr.hakarman's account at " . $date . "\n" . "\n---------------------------------------\n");
		fclose($file);
		header("Location: generalch.php");
	}else {
		//log here 
		$file = fopen("logsboii.txt","a");
		$date = date("y:m:d:h:i:sa");
		fwrite($file,"\n---------------------------------------\n" . "\nSomeone tryed to log in into the mr.hakarman's account at " . $date . "\n" . "\n---------------------------------------\n");
		fclose($file);
		echo "<script>alert('Your try to hack mr.hakarman will be logged!')</script>";
	}
}

?>
</body></html>
