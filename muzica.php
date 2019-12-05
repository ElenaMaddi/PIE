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
		<div class="bg-img" style="background-image: url('./img/hu.jpg');">
			<div class="overlay"></div>
		</div>
		
		<?php require 'includes/navbar.php'; ?>

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
										$query = "SELECT * FROM muzica";
										$data = $connect->query($query);
										echo ' <table width="100%" height="100%" border="4" cellpadding="5" cellspacing="5" style="background-color:" bordercolor="#DEB887">
														<tr>
																<th>ID</th>
																<th>Nume</th>
																<th>Pret</th>
																<th>Stoc</th>
														</tr>';
									foreach($data as $row)
									{
										echo ' <tr>
																<td>'.$row["idmuzica"].'</td>
																<td>'.$row["nume"].'</td>
																<td>'.$row["pret"].'</td>
																<td>'.$row["stoc"].'</td>
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
