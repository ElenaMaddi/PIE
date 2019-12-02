<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TheBookshelf</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>
<body>
	<header id="home">
		<div class="bg-img" style="background-image: url('./img/film.jpg');">
			<div class="overlay"></div>
		</div>
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">
				<div class="navbar-header">
					<div class="navbar-brand">
						<a href="index.html">
							<img class="logo" src="img/logo.svg" alt="logo">
							<img class="logo-alt" src="img/logo.svg" alt="logo">
						</a>
					</div>
					<div class="nav-collapse">
						<span></span>
					</div>
				</div>
        <ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="index.html">Home</a></li>
					<li><a href="carte-client.php">Carti</a>	</li>
					<li><a href="jucarie-client.php">Jucarii</a></li>
					<li><a href="filme-client.php">Filme</a></li>
					<li><a href="muzica-client.php">Muzica</a>	</li>
					<li><a href="papetarie-client.php">Papetarie</a></li>
					<li><a href="login.php">Login as Admin</a></li>
					<li><a href="loginclient.php">Login</a></li>
					<li><a href="signup.php">Sign up</a></li>
				</ul>
      </div>
    </nav>
    <div class="home-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="home-content">
							<div class="container-fluid">
								<?php
							$host = "localhost";
							$username = "root";
							$password = "";
							$database = "librarie";

							try {

										$connect = new PDO("mysql:host=$host;dbname=$database", $username, $password);
										$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
										//echo "Database connection Done";
										$query = "SELECT * FROM film";
										$data = $connect->query($query);
										echo ' <table width="100%" height="100%" border="4" cellpadding="5" cellspacing="5"  bordercolor="#DEB887">
														<tr>
																<th>ID</th>
																<th>Nume</th>
																<th>Pret</th>
																<th>Stoc</th>
																<th>Durata</th>
														</tr>';
									foreach($data as $row)
									{
										echo ' <tr>
																<td>'.$row["idfilm"].'</td>
																<td>'.$row["nume"].'</td>
																<td>'.$row["pret"].'</td>
																<td>'.$row["stoc"].'</td>
																<td>'.$row["durata"].'</td>
													 </tr>';
									}
									echo '</table>';
									}

								catch(PDOException $error)
								{
									$error->getMessage();
								}
								?>
							</div>
				
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</body>
  </html>
