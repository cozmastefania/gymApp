<?php
session_start();

$hostname = 'localhost';
$use = 'root';
$pas = '';
$db = 'db_licenta';
$con = mysqli_connect($hostname, $use, $pas, $db);

$username = $_POST['user'];
$password = $_POST['password'];
$s = "SELECT * FROM users WHERE username = '$username' AND password ='$password'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['loggedin'] = '1';
	$_SESSION['user'] = $username;
	header('location:Primapag.php');
}
else
{
	header('location:login.php');
}
?>