<?php
	function removeFromCart($category) {
		$id_to_remove = $_GET[$category];

		session_start();

		foreach ($_SESSION['cart'][$category] as $key => $id) {
			if ($id == $id_to_remove) {
				unset($_SESSION['cart'][$category][$key]);
			}
		}

		print_r($_SESSION['cart']);
		header('Location: /PIE/pages/cart.php');
	}

	$valid_categories = ['carte', 'film', 'jucarie', 'muzica', 'papetarie'];
	$found_match = False;

	foreach ($valid_categories as $category) {
		if (isset($_GET[$category])) {
			removeFromCart($category);
			$found_match = True;
		}
	}
	
	
	if (!$found_match) {
		header("Location: /PIE/index.php");
	}
?>