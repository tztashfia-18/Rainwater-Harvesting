<?php 

session_start();
	include("connection.php");
	include("function.php");

	$admin_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Document</title>
</head>
<body>
	<a href = "adminLogout.php">Logout</a>
	<h1> This is the employee index page</h1>

	<br>
</body>
</html>