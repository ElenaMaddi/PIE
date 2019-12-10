<?php
	function addToCart($category) {
		$id = $_GET[$category];

		session_start();

		if (isset($_SESSION['cart'][$category])) {
			if (!in_array($id, $_SESSION['cart'][$category])) {
				array_push($_SESSION['cart'][$category], $id);
			}
		} else {
			$_SESSION['cart'] = array($category => array($id));
		}

		// header('Location: ' . $_GET['back']);
		print_r($_SESSION['cart']);
	}

	$valid_categories = ['carte', 'film', 'jucarie', 'muzica', 'papetarie'];
	$found_match = False;

	if (isset($_GET['back'])) {
		foreach ($valid_categories as $category) {
			if (isset($_GET[$category])) {
				addToCart($category);
				$found_match = True;
			}
		}
	}
	
	if (!$found_match) {
		header("Location: /PIE/index.php");
	}
?>