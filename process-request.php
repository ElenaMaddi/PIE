<?php 
	function processQuery($sql, $arguments, $source) {
		require 'includes/db_connect.php';

		try {
	        $stmt = $db->prepare($sql);
	        $insert = $stmt->execute($arguments);

	        if ($insert) {
	        	header("location:" . $source);
	        }
	    } catch(PDOException $error) {
	        // echo $error->getMessage();
	        echo "A database error has occured.";
	    }
	}


	$exploded = explode("/", $_SERVER['HTTP_REFERER']);
	$source = end($exploded);

	if (isset($_POST["submit"])){
		$sql = "";
		$arguments = [];

	    switch ($source) {
	    	case 'adauga-carte.html':
	    		$sql = "INSERT INTO carte (idcarte, nume , pret, stoc, editura) VALUES (:idcarte, :nume, :pret, :stoc, :editura)";
        		$arguments = ['idcarte' => $_POST['idcarte'], 'nume' => $_POST['numec'], 'pret' => $_POST['pret'], 'stoc' => $_POST['stoc'], 'editura' => $_POST['editura']];

	    		break;
	    	
	    	case 'adauga-film.html':
	    		$sql = "INSERT INTO film (idfilm, nume , pret, stoc, durata) VALUES (:idfilm, :nume, :pret, :stoc, :durata)";
	    		$arguments = ['idfilm' => $_POST["idfilm"], 'nume' => $_POST["nume"], 'pret' => $_POST["pret"], 'stoc' => $_POST["stoc"], 'durata' => $_POST["durata"]];

	    		break;

	    	case 'adauga-jucarie.html':
	    		$sql = "INSERT INTO jucarie (idjucarie, nume , pret, stoc) VALUES (:idjucarie, :nume, :pret, :stoc)";
	    		$arguments = ['idjucarie' => $_POST["idjucarie"], 'nume' => $_POST["nume"], 'pret' => $_POST["pret"], 'stoc' => $_POST["stoc"]];

	    		break;

	    	case 'adauga-muzica.html':
	    		$sql = "INSERT INTO muzica (idmuzica, nume , pret, stoc) VALUES (:idmuzica, :nume, :pret, :stoc)";
	    		$arguments = ['idmuzica' => $_POST["idmuzica"], 'nume' => $_POST["nume"], 'pret' => $_POST["pret"], 'stoc' => $_POST["stoc"]];

	    		break;

	    	case 'adauga-papetarie.html':
	    		$sql = "INSERT INTO papetarie (idpapetarie, nume , pret, stoc, culoare) VALUES (:idpapetarie, :nume, :pret, :stoc, :culoare)";
	    		$arguments = ['idpapetarie' => $_POST["idpapetarie"], 'nume' => $_POST["nume"], 'pret' => $_POST["pret"], 'stoc' => $_POST["stoc"], 'culoare' => $_POST['culoare']];

	    		break;

	    	default:
	    		echo "[Error] Request from unhandled page.";
	    		break;
	    }

	    if (!empty($sql) and !empty($arguments)) {
	    	processQuery($sql, $arguments, $source);
	    }
    } else {
        header("location:" . $source);
    }

	
?>