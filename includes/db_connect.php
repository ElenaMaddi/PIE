<?php 
	try {
		$host = "localhost";
		$username = "root";
		$password = "";
		$database = "librarie";

		$dsn = "mysql:host=$host;dbname=$database";
		$db = new PDO($dsn, $username, $password);

	    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $error) {
    	$error_message = $error->getMessage();
    	// echo $error_message;
    	echo "Error connecting to the database.";
    }
?>
