<?php
session_start();

header('location:Primapag.php');

$hostname = 'localhost';

$use = 'root';

$pas = '';

$db = 'db_licenta';

$con = mysqli_connect($hostname, $use, $pas, $db);

$_SESSION['mysqli'] = new mysqli($hostname, $username, $password, $db);

$_SESSION['query'] = "SELECT * FROM recenzii";

$salafitness = $_SESSION['sala'];

$user = $_SESSION['user'];

$recenzii = $_POST['recenzie'];

if(isset($_SESSION['loggedin']))
{
    $result = "INSERT INTO recenzii (username, recenzie, sala) VALUES ('$user', '$recenzii', '$salafitness')";
    mysqli_query($con, $result);

} else if(!isset($_SESSION['loggedin']))
{
    echo '<script> alert("JavaScript Alert Box by PHP");</script>'; 
}

?>