<?php
	if(isset($_POST["submit"])){
		require 'includes/db_connect.php';

		$idpapetarie = $_POST["idpapetarie"];
		$nume = $_POST["nume"];
		$pret = $_POST["pret"];
		$stoc = $_POST["stoc"];
		$culoare = $_POST["culoare"];

		try {
		  	 $sql = "INSERT INTO papetarie (idpapetarie, nume , pret, stoc, culoare) VALUES (:idpapetarie, :nume, :pret, :stoc, :culoare)";
			$stmt = $db->prepare($sql);
			$insert = $stmt->execute(['idpapetarie' => $idpapetarie, 'nume' => $nume, 'pret' => $pret, 'stoc' => $stoc, 'culoare' => $culoare]);

			if ($insert) {
				header("location:papetarie.php");
			}
		} catch(PDOException $error) {
			// echo $error->getMessage();
			echo "A database error has occured.";
		}
	} else {
		header("location:adauga-papetarie.html");
	}
?>
