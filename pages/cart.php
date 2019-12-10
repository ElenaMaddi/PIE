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
			                	if (isset($_SESSION['cart']) and !empty($_SESSION['cart'])) {
			                		$cart = $_SESSION['cart'];

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
								            </tr>';

										foreach($data as $row) {
									    	echo 
									    	'<tr>
								                <td>'.$row[0].'</td>
								                <td>'.$row["nume"].'</td>
								                <td>'.$row["pret"].'</td>
									        </tr>';
										}

										echo '</table>';
									} catch(PDOException $error) {
										$error->getMessage();
									}
			                	} else {
			                		echo "Cosul de cumparaturi este gol.";
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
