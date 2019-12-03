<?php
    if(isset($_POST["submit"])){
        require 'includes/db_connect.php';

        $idfilm = $_POST["idfilm"];
        $nume = $_POST["nume"];
        $pret = $_POST["pret"];
        $stoc = $_POST["stoc"];
        $durata = $_POST["durata"];

        try {
            $sql = "INSERT INTO film (idfilm, nume , pret, stoc, durata) VALUES (:idfilm, :nume, :pret, :stoc, :durata)";
            $stmt = $db->prepare($sql);
            $insert = $stmt->execute(['idfilm' => $idfilm, 'nume' => $nume, 'pret' => $pret, 'stoc' => $stoc, 'durata' => $durata]);

            if ($insert) {
                header("location:filme.php");
            }
        } catch(PDOException $error) {
            // echo $error->getMessage();
            echo "A database error has occured.";
        }
    } else {
        header("location:adauga-film.html");
    }

?>