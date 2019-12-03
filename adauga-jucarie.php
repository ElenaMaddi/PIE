<?php
    if(isset($_POST["submit"])){
        require 'includes/db_connect.php';

        $idjucarie = $_POST["idjucarie"];
        $nume = $_POST["nume"];
        $pret = $_POST["pret"];
        $stoc = $_POST["stoc"];

        try {
            $sql = "INSERT INTO jucarie (idjucarie, nume , pret, stoc) VALUES (:idjucarie, :nume, :pret, :stoc)";
            $stmt = $db->prepare($sql);
            $insert = $stmt->execute(['idjucarie' => $idjucarie, 'nume' => $nume, 'pret' => $pret, 'stoc' => $stoc]);

            if ($insert) {
                header("location:jucarii.php");
            }
        } catch(PDOException $error) {
            // echo $error->getMessage();
            echo "A database error has occured.";
        }
    } else {
        header("location:adauga-jucarie.html");
    } 
?>
