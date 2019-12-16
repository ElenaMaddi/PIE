<!DOCTYPE html>
<html lang="en">

<?php require $_SERVER['DOCUMENT_ROOT'] . '/PIE/includes/head.php'; ?>

<body>
	<header id="home">
		<div class="bg-img" style="background-image: url('/PIE/img/books.jpg');">
			<div class="overlay"></div>
		</div>
		
		<?php 
			require $_SERVER['DOCUMENT_ROOT'] . '/PIE/includes/navbar.php'; 

			if (!$user or $_SERVER['HTTP_REFERER'] != 'http://'.$_SERVER['HTTP_HOST'].'/PIE/pages/cart.php' or !isset($_SESSION['cart']) or empty($_SESSION['cart'])) {
				header("Location: /PIE/index.php");
			}
		?>

	    <div class="home-wrapper">
	      	<div class="container">
	        	<div class="row">
	          		<div class="col-md-10 col-md-offset-1">
	            		<div class="home-content">
	              			<div class="container-fluid">
				                <div class="col col-lg-3"></div>
								<div class="col col-lg-6">
									<form method="post" action="/PIE/backend/finish_order.php">
										<div class="form-group">
											<label for="nume">Nume si Prenume</label>
											<input type="text" class="form-control" id="nume" name="nume">
										</div>
										<div class="form-group">
											<label for="judet">Judet</label>
											<input type="text" class="form-control" id="judet" name="judet">
										</div>
										<div class="form-group">
											<label for="localitate">Localitate</label>
											<input type="text" class="form-control" id="localitate" name="localitate">
										</div>
										<div class="form-group">
											<label for="adresa">Adresa</label>
											<input type="text" class="form-control" id="adresa" name="adresa">
										</div>
										<button type="submit" class="btn btn-primary" name="submit">Trimite</button>
									</form>
								</div>
								<div class="col col-lg-3"></div>
	            			</div>
	            		</div>
	          		</div>
	        	</div>
	      	</div>
	    </div>
	</header>
</body>
</html>
