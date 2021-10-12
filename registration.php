<?php
session_start();

header('location:login.php');
$hostname = 'localhost';
$use = 'root';
$pas = '';
$db = 'db_licenta';
$con = mysqli_connect($hostname, $use, $pas, $db);

$username = $_POST['user'];
$password = $_POST['password'];
$s = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);


if($num == 1)
{
	echo "Username already taken";
}
else
{
	$reg = "insert into users (username, password) values ('$username', '$password')";
	mysqli_query($con, $reg);
	echo "Registration succesfull!";
}
?>