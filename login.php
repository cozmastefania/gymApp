<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Login and Registration
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<div class="bg-img"> </div>
	<div class="bg-text">
		<div class="row">
			<div class="col-md-6"> 
			<h2> Autentificare </h2>
			<form action="validation.php" method="post">
				<div class="form-group" style="margin-left: -37px;">
					<label>Utilizator</label>
					<input class="lbl" type="text" name="user" class="form-control" required>
				</div>
				<div class="form-group">
					<label >Parola</label>
					<input class="lbl" type="password" name="password" class="form-control" required>
				</div>
				<button class="lbl" type="submit" class="btn btn-primary"> Sign in </button> <br>
				</form>
			<a  href= 'Primapag.php'><button class="lbl" class="btn btn-primary" style="color: white;"> Nu doresc autentificare </button> </a> 
			
			</div>

			<div class="col-md-6"> 
			<h2> Înregistrare </h2>
			<form action="registration.php" method="post">
				<div class="form-group" style="margin-left: -37px;">
					<label > Utilizator</label>
					<input class="lbl" type="text" name="user" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Parola</label>
					<input class="lbl" type="password" name="password" class="form-control" required>
				</div>
				<button class="lbl" type="submit" class="btn btn-primary"> Register </button>
			</form>
			</div>

	</div>
</div>
</div>
</body>
</html>