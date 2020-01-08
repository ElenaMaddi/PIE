<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login Page</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/PIE/css/style.css" type = "text/css">

	<link rel="stylesheet" href="/PIE/css/login.css">
</head>

<body >
	<div class = "container-fluid bg " >
		<div class = "row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<form class = "form-container" method="POST" action="/PIE/backend/check_login.php<?php
					if (isset($_GET['next'])) {
						echo '?next='.$_GET['next'];
					}
				?>">
					<label for="myusername">Username : </label>
					<div class="input-group"  >
						<input id="myusername" type="text" class="form-control input -sm " name="username" placeholder="Username">
					</div>
					<label for="mypassword">Password : </label>
					<div class="input-group">
						<input id="mypassword" type="password" class="form-control input -sm" name="password" placeholder="Password">
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10" >
						<div style="text-align:center;">
							<button type="submit" name="submit" class="btn btn-lg btn1">Login</button></div>
							<a href="/PIE/pages/register.php" class="button">Sign Up</a>
							<a href="/PIE/index.php" class="button">Inapoi</a>
						</div>
					</div>
				</form>

			</div>
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>
	</div>
</body>
</html>
