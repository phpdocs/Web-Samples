<?php
session_start();
if(!isset($_SESSION['Login'])){
	header('Location: login.php');
}
?>

<!doctype html>	
<html>
	<head>
	<title>Admin Panel Inteface</title>
	</head>
	<body>
	<h1>Welcome to admin panel</h1>
	<a href="logout.php">Logout</a>
	</body>
</html>