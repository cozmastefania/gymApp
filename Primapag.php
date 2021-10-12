<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Stylepage1.css">
	<title> Licenta Cozma Stefania </title>
	<script type="text/javascript">


		function setOldImage()
		{
			document.getElementById("imagine1").src = "gympics/Cartiere2.jpg"
		}

		function setNewImage2()
		{
			document.getElementById("imagine1").src = "gymPics/Borhanci.jpg";
			
		};

		function setNewImage3()
		{
			document.getElementById("imagine1").src = "gymPics/Bulgaria.jpg"
			
		}
		function setNewImage4()
		{
			document.getElementById("imagine1").src = "gymPics/Bunaz.jpg"
		
		}
		function setNewImage5()
		{
			document.getElementById("imagine1").src = "gymPics/Centru.jpg"
		}
		function setNewImage6()
		{
			document.getElementById("imagine1").src = "gymPics/Damb.jpg"
		}
		function setNewImage7()
		{
			document.getElementById("imagine1").src = "gymPics/Europa.jpg"
		}
		/*function setNewImage8()
		{
			document.getElementById("imagine1").src = "gymPics/Faget.jpg"
		}*/
		function setNewImage9()
		{
			document.getElementById("imagine1").src = "gymPics/Ghg.jpg"
		}
		function setNewImage10()
		{
			document.getElementById("imagine1").src = "gymPics/Grigo.jpg"
		}
		function setNewImage11()
		{
			document.getElementById("imagine1").src = "gymPics/Gruia.jpg"
		}
		function setNewImage12()
		{
			document.getElementById("imagine1").src = "gymPics/Intrelacuri.jpg"
		}
		function setNewImage13()
		{
			document.getElementById("imagine1").src = "gymPics/Iris.jpg"
		}
		function setNewImage14()
		{
			document.getElementById("imagine1").src = "gymPics/Manastur.jpg"
		}
		function setNewImage15()
		{
			document.getElementById("imagine1").src = "gymPics/Marasti.jpg"
		}
		/*function setNewImage16()
		{
			document.getElementById("imagine1").src = "gymPics/Someseni.jpg"
		}*/
		function setNewImage17()
		{
			document.getElementById("imagine1").src = "gymPics/Sopor.jpg"
		}
		function setNewImage18()
		{
			document.getElementById("imagine1").src = "gymPics/Plopilor.jpg"
		}
		function setNewImage19()
		{
			document.getElementById("imagine1").src = "gymPics/Zorilor.jpg"
		}
	

	</script>
	
</head>
<body>
	<div class="bg-img"> </div>
	<div class="bg-text">
	<div class="topbar">
		<a href="logout.php" class="topbar3"> LOGIN/LOGOUT </a>
	</div>

	<img id = "imagine1" src="gymPics/Cartiere2.jpg" class="image">

	<div class="text"> 
	<h1 class="titlu"> ALEGE CARTIERUL </h1>
	<form method="POST" action="Borhanci.php">
	<table class="tabel">
		<tr>
		<th onmouseover="setNewImage2()" onmouseout="setOldImage()" >  <a href="Borhanci.php"> 
		<button type="button"> Borhanci </button> </a> 
		</th> <p>
		
		<th onmouseover="setNewImage3()" onmouseout="setOldImage()"  > <a href="Bulgaria2.php">
		<button type="button"> Bulgaria </button> </a>
		</th> <p>	
		</tr>
		
		<tr>
		<th onmouseover="setNewImage4()" onmouseout="setOldImage()"> <a href="Bunaz.php"> <button type="button"> Bună Ziua </button> </a> </th> <p>
		<th onmouseover="setNewImage5()" onmouseout="setOldImage()"> <a href="Centru.php"> <button type="button"> Centru </button> </a> </th> <p>	
		</tr>

		<tr>
	
		<th onmouseover="setNewImage6()" onmouseout="setOldImage()"> <a href="Damb.php"> <button type="button"> Dâmbul Rotund </button> </a> </th> <p>
		<th onmouseover="setNewImage7()" onmouseout="setOldImage()"> <a href="Europa.php"> <button type="button"> Europa </button> </a> </th> <p>	
		</tr>

		<tr>
		<th onmouseover="setNewImage9()" onmouseout="setOldImage()"> <a href="Ghg.php"> <button type="button"> Gheorgheni </button> </a> </th> <p>
		<th onmouseover="setNewImage10()" onmouseout="setOldImage()"> <a href="Grig.php"><button type="button"> Grigorescu </button> </a>  </th> <p>
		</tr>

		<tr>
		<th onmouseover="setNewImage11()" onmouseout="setOldImage()"> <a href="Gruia.php"> <button type="button"> Gruia </button> </a> </th> <p>
		<th onmouseover="setNewImage12()" onmouseout="setOldImage()"> <a href="Iris.php"> <button type="button"> Iris </button> </a> </th> <p>
		</tr>

		<tr>
		<th onmouseover="setNewImage13()" onmouseout="setOldImage()"> <a href="IntreL.php"><button type="button"> Între Lacuri </button> </a> </th> <p>
		<th onmouseover="setNewImage14()" onmouseout="setOldImage()"> <a href="Manastur.php"> <button type="button"> Mănăștur </button> </a> </th> <p>
		</tr>

		<tr>
		<th onmouseover="setNewImage15()" onmouseout="setOldImage()"> <a href="Marasti.php"> <button type="button"> Mărăști </button> </a> </th> <p>
		<th onmouseover="setNewImage17()" onmouseout="setOldImage()"> <a href="Sopor.php"> <button type="button"> Sopor </button> </a> </th> <p>	
		
		</tr>

		<tr>
		
		<th onmouseover="setNewImage18()" onmouseout="setOldImage()"> <a href="Plopi.php"> <button type="button"> Plopilor </button> </a> </th> <p>
		<th onmouseover="setNewImage19()" onmouseout="setOldImage()"> <a href="Zorilor.php"> <button type="button"> Zorilor </button> </a> </th> <p>		
		</tr>

	</table>
</div>
</div>
</div>
</body>

</html>