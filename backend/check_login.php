<?php
	if(isset($_POST["submit"])) {
		require $_SERVER['DOCUMENT_ROOT'] . '/PIE/includes/db_connect.php';

		try {
			$username=$_POST['username'];
	    	$password=$_POST['password'];

	    	$sql = 'SELECT iduser, username FROM users WHERE username = :username and password = :password';
	    	$stmt = $db->prepare($sql);

	    	$stmt->execute(['username' => $username, 'password' => $password]);
	    	$result = $stmt->fetch();

	    	if ($stmt->rowCount()) {
	    		session_start();
	    		$_SESSION['user'] = $username;
	    		$_SESSION['user_id'] = $result['iduser'];

	    		if (isset($_GET['next'])) {
	    			header('Location: /PIE/pages/cart.php');
	    		} else {
	    			header('Location: /PIE/index.php');
	    		}
	    	} else {
	    		echo "Username and password do not match";
	    	}
		} catch(Exception $error) {
	    	echo $error;
	    }
		
	} else {
		header('Location: /PIE/pages/login.php');
	}
?>
