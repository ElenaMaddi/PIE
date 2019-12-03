<?php
	if(isset($_POST["submit"])){
		require 'includes/db_connect.php';

		$idmuzica = $_POST["idmuzica"];
		$nume = $_POST["nume"];
		$pret = $_POST["pret"];
		$stoc = $_POST["stoc"];

		try {
		  $sql = "INSERT INTO muzica (idmuzica, nume , pret, stoc) VALUES (:idmuzica, :nume, :pret, :stoc)";
			$stmt = $db->prepare($sql);
			$insert = $stmt->execute(['idmuzica' => $idmuzica, 'nume' => $nume, 'pret' => $pret, 'stoc' => $stoc]);

			if ($insert) {
				header("location:muzica.php");
			}
		} catch(PDOException $error) {
			// echo $error->getMessage();
			echo "A database error has occured.";
		}
	} else {
		header("location:adauga-muzica.html");
	}
?>
