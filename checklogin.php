<?php
	if(isset($_POST["submit"])) {
		require 'includes/db_connect.php';

		try {
			$username=$_POST['username'];
	    	$password=$_POST['password'];

	    	$sql = 'SELECT * FROM users WHERE username = :username and password = :password';
	    	$stmt = $db->prepare($sql);

	    	$stmt->execute(['username' => $username, 'password' => $password]);

	    	if ($stmt->rowCount()) {
	    		session_start();
	    		$_SESSION['user'] = $username;

	    		header("location:index-admin.php");
	    	} else {
	    		echo "Username and password do not match";
	    	}
		} catch(Exception $error) {
	    	echo $error;
	    }
		
	} else {
		header("location:login.php");
	}
?>
