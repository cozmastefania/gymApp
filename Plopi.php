<?php
include("Conectare.php");
session_start();
$query = "SELECT * FROM centre_fitness";
$mysqli = new mysqli($hostname, $username, $password, $db);
$result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html>
<head>

	<title> Cartier </title>
	<link rel="stylesheet" type="text/css" href="newstylepage2.css">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>	
	<a href="Primapag.php"> <button class="btn"><i class="fa fa-home"> </i></button> </a>
	<a href="logout.php" class="btn3"> LOGIN/LOGOUT </a>
	<h2 class="h1"> Centre sportive cartier Plopilor </h2>

	<table align="center" class="table">
	<?php 
		while($rows = mysqli_fetch_assoc($result))
		{
			if($rows['cartier'] == 'Plopilor')
			{
	?>
				<tr>
					<td class="tdpoza"> <img class="image" src="bd/<?php echo $rows['poza1'] ?>">  </td>
					<td class="tdscris">
					<a href="<?php echo $rows['nume'] ?>.php"> <button type="button" class="div1"><?php echo $rows['nume'] ?></button></a>
						<div class="div2"> <?php echo $rows['adresa'] ?> </div>
					</td>
				</tr>
	<?php
			}
		}
	?>
	</table>
</body>
</html>