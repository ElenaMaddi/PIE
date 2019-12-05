<!DOCTYPE html>
<html lang="en">

<?php require $_SERVER['DOCUMENT_ROOT'] . '/PIE/includes/head.php'; ?>

<body>
	<header id="home">
		<div class="bg-img" style="background-image: url('/PIE/img/books.jpg');">
			<div class="overlay"></div>
		</div>
		
		<?php require $_SERVER['DOCUMENT_ROOT'] . '/PIE/includes/navbar.php'; ?>

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
								    $query = "SELECT * FROM carte";
								    $data = $connect->query($query);
								    echo ' <table width="100%" height="100%" border="4" cellpadding="5" cellspacing="5"  bordercolor="#DEB887">
								            <tr>
								                <th>ID</th>
								                <th>Nume</th>
								                <th>Pret</th>
								                <th>Stoc</th>
								                <th>Autor</th>
								                <th>Editura</th>
								            </tr>';
								foreach($data as $row) {
								    echo ' <tr>
								                <td>'.$row["idcarte"].'</td>
								                <td>'.$row["nume"].'</td>
								                <td>'.$row["pret"].'</td>
								                <td>'.$row["stoc"].'</td>
								                <td>'.$row["autor"].'</td>
								                <td>'.$row["editura"].'</td>
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
