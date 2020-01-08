<?php

function checkUser() {
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}

	if (isset($_SESSION['user']) and !empty($_SESSION['user'])) {
		return $_SESSION['user'];
	} else {
		return False;
	}
}

function requireAdmin() {
	$user = checkUser();

	if ($user != "admin") {
		header('Location: /PIE');
	}
}

?>