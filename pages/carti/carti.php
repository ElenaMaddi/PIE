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
								try {
								    require $_SERVER['DOCUMENT_ROOT'] . '/PIE/includes/db_connect.php';

								    $query = "SELECT * FROM carte";
								    $data = $db->query($query);
								    echo '
								    <table width="100%" height="100%" border="4" cellpadding="5" cellspacing="5"  bordercolor="#DEB887">
							            <tr>
											<th>ID</th>
											<th>Nume</th>
											<th>Pret</th>
											<th>Stoc</th>
											<th>Autor</th>
											<th>Editura</th>
											<th></th>
							            </tr>';
									foreach($data as $row) {
								    	echo 
								    	'<tr>
							                <td>'.$row["idcarte"].'</td>
							                <td>'.$row["nume"].'</td>
							                <td>'.$row["pret"].'</td>
							                <td>'.$row["stoc"].'</td>
							                <td>'.$row["autor"].'</td>
							                <td>'.$row["editura"].'</td>
							                <td> <a class="btn btn-primary" href="/PIE/backend/add_cart.php?carte='.$row["idcarte"].'&back=/PIE/pages/carti/carti.php">Adauga in Cos<a></td>
								        </tr>';
									}

									echo '</table>';
								} catch(PDOException $error) {
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
