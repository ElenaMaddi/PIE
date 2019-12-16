<?php 
	session_start();
	unset($_SESSION['cart']);
	header("Location: /PIE/pages/cart.php");
?>