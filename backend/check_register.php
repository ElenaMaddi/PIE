<?php
	if(isset($_POST["submit"])) {
		require $_SERVER['DOCUMENT_ROOT'] . '/PIE/includes/db_connect.php';

		try {
			$email = $_POST['email'];
			$username = $_POST['username'];
	    	$password = $_POST['password'];
	    	$re_password = $_POST['re_password'];

	    	$sql = 'SELECT email FROM users WHERE email = :email';
	    	$stmt = $db->prepare($sql);

	    	$stmt->execute(['email' => $email]);

	    	if ($stmt->rowCount()) {
	    		echo "An account with this email address already exists, please choose a different one.";
	    	} else {
	    		$sql = 'SELECT email FROM users WHERE username = :username';
		    	$stmt = $db->prepare($sql);

		    	$stmt->execute(['username' => $username]);

		    	if ($stmt->rowCount()) {
		    		echo "This username is already taken, plese choose a differnet one.";
		    	} else {
		    		if ($password != $re_password) {
		    			echo "Passwords do not match!";
		    		} else {
		    			$sql = 'INSERT INTO users (email, username, password) VALUES (:email, :username, :password)';
	    				$stmt = $db->prepare($sql);

	    				$stmt->execute(['email' => $email, 'username' => $username, 'password' => $password]);

	    				if ($stmt->rowCount()) {
				    		session_start();
				    		$_SESSION['user'] = $username;

				    		header('Location: /PIE/index.php');
				    	}
		    		}
		    	}
	    	}
		} catch(Exception $error) {
	    	echo $error;
	    }
		
	} else {
		header('Location: /PIE/pages/login.php');
	}