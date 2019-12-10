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

									    $sqls = [];
									    $data = [];
									    $total = 0;

									    foreach ($cart as $category => $ids) {
				                			$sqls[$category] = 'SELECT * FROM '.$category.' WHERE id'.$category.' IN ('.str_pad('',count($ids)*2-1,'?,').')';

				                			$stmt = $db->prepare($sqls[$category]);
	        								$stmt->execute($ids);
	        								$result = $stmt->fetchAll();


	        								foreach ($result as &$row) {
	        									$row["category"] = $category;
	        								}

	        								$data = array_merge($data, $result);
				                		}

									    echo '
									    <table width="100%" height="100%" border="4" cellpadding="5" cellspacing="5"  bordercolor="#DEB887">
								            <tr>
												<th>ID</th>
												<th>Nume</th>
												<th>Categorie</th>
												<th>Pret</th>
												<th id="empty_cart"><a class="btn btn-primary" href="/PIE/backend/empty_cart.php" align="center">Goleste Cos<a></th>
								            </tr>';

										for ($i=0; $i < count($data); $i++) {
											$total += $data[$i]["pret"];

									    	echo 
									    	'<tr>
								                <td>'.$data[$i][0].'</td>
								                <td>'.$data[$i]["nume"].'</td>
								                <td>'.$data[$i]["category"].'</td>
								                <td>'.$data[$i]["pret"].'</td>
								                <td><a class="btn btn-primary" href="/PIE/backend/remove_cart.php?'.$data[$i]["category"].'='.$data[$i][0].'">Sterge<a></td>
									        </tr>';
										}

										echo 
								    	'<tr id="stats">
							                <td></td>
							                <td></td>
							                <td>Total: </td>
							                <td>'.$total.'</td>
							                <td><a class="btn btn-primary" href="#">Finalizeaza Comanda<a></td>
								        </tr>';

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
