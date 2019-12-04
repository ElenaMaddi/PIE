<?php 
	function processQuery($sql, $arguments, $source) {
		require 'includes/db_connect.php';

		try {
	        $stmt = $db->prepare($sql);
	        $result = $stmt->execute($arguments);

	        if ($result) {
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

	    	case 'modifica-carte.html':
	    		$sql = "UPDATE carte SET nume = :nume, pret = :pret, stoc = :stoc, editura = :editura WHERE idcarte = :idcarte";
	    		$arguments = ['idcarte' => $_POST['idcarte'], 'nume' => $_POST['numec'], 'pret' => $_POST['pret'], 'stoc' => $_POST['stoc'], 'editura' => $_POST['editura']];

	    		break;

	    	case 'modifica-film.html':
	    		$sql = "UPDATE film SET nume = :nume, pret = :pret, stoc = :stoc , durata = :durata WHERE idfilm = :idfilm";
	    		$arguments = ['idfilm' => $_POST["idfilm"], 'nume' => $_POST["nume"], 'pret' => $_POST["pret"], 'stoc' => $_POST["stoc"], 'durata' => $_POST["durata"]];

	    		break;

	    	case 'modifica-jucarie.html':
	    		$sql = "UPDATE jucarie SET nume = :nume, pret = :pret, stoc = :stoc WHERE idjucarie = :idjucarie";
	    		$arguments = ['idjucarie' => $_POST["idjucarie"], 'nume' => $_POST["nume"], 'pret' => $_POST["pret"], 'stoc' => $_POST["stoc"]];

	    		break;

	    	case 'modifica-muzica.html':
	    		$sql = "UPDATE muzica SET nume = :nume, pret = :pret, stoc = :stoc WHERE idmuzica = :idmuzica";
	    		$arguments = ['idmuzica' => $_POST["idmuzica"], 'nume' => $_POST["nume"], 'pret' => $_POST["pret"], 'stoc' => $_POST["stoc"]];

	    		break;

	    	case 'modifica-papetarie.html':
	    		$sql = "UPDATE papetarie SET nume = :nume, pret = :pret, stoc = :stoc, culoare = :culoare WHERE idpapetarie =  :idpapetarie";
	    		$arguments = ['idpapetarie' => $_POST["idpapetarie"], 'nume' => $_POST["nume"], 'pret' => $_POST["pret"], 'stoc' => $_POST["stoc"], 'culoare' => $_POST['culoare']];

	    		break;


	    	case 'sterge-carte.html':
	    		$idcarte = $_POST['idcarte'];
	    		$nume = $_POST['numec'];
	    		$editura = $_POST['editura'];

	    		if (isset($idcarte) and !empty($idcarte)) {
	    			$sql = "DELETE FROM carte WHERE idcarte = :idcarte";
	    			$arguments = ['idcarte' => $idcarte];
	    		} else if (isset($nume) and !empty($nume)) {
	    			$sql = "DELETE FROM carte WHERE nume= :nume";
	    			$arguments = ['nume' => $_POST['numec']];
	    		} else if (isset($editura) and !empty($editura)) {
	    			$sql = "DELETE FROM carte WHERE editura= :editura";
	    			$arguments = ['editura' => $editura];
	    		}

	    		break;

	    	case 'sterge-film.html':
	    		$idfilm = $_POST['idfilm'];
	    		$nume = $_POST['nume'];

	    		if (isset($idfilm) and !empty($idfilm)) {
	    			$sql = "DELETE FROM film WHERE idfilm = :idfilm";
	    			$arguments = ['idfilm' => $idfilm];
	    		} else if (isset($nume) and !empty($nume)) {
	    			$sql = "DELETE FROM film WHERE nume= :nume";
	    			$arguments = ['nume' => $nume];
	    		}

	    		break;

	    	case 'sterge-jucarie.html':
	    		$idjucarie = $_POST['idjucarie'];
	    		$nume = $_POST['nume'];

	    		if (isset($idjucarie) and !empty($idjucarie)) {
	    			$sql = "DELETE FROM jucarie WHERE idjucarie = :idjucarie";
	    			$arguments = ['idjucarie' => $idjucarie];
	    		} else if (isset($nume) and !empty($nume)) {
	    			$sql = "DELETE FROM jucarie WHERE nume= :nume";
	    			$arguments = ['nume' => $nume];
	    		}

	    		break;

	    	case 'sterge-muzica.html':
	    		$idmuzica = $_POST['idmuzica'];
	    		$nume = $_POST['nume'];

	    		if (isset($idmuzica) and !empty($idmuzica)) {
	    			$sql = "DELETE FROM muzica WHERE idmuzica = :idmuzica";
	    			$arguments = ['idmuzica' => $idmuzica];
	    		} else if (isset($nume) and !empty($nume)) {
	    			$sql = "DELETE FROM muzica WHERE nume = :nume";
	    			$arguments = ['nume' => $nume];
	    		}

	    		break;


	    	case 'sterge-papetarie.html':
	    		$idpapetarie = $_POST['idpapetarie'];
	    		$nume = $_POST['nume'];

	    		if (isset($idpapetarie) and !empty($idpapetarie)) {
	    			$sql = "DELETE FROM papetarie WHERE idpapetarie = :idpapetarie";
	    			$arguments = ['idpapetarie' => $idpapetarie];
	    		} else if (isset($nume) and !empty($nume)) {
	    			$sql = "DELETE FROM papetarie WHERE nume= :nume";
	    			$arguments = ['nume' => $nume];
	    		}

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