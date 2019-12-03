<?php
    if(isset($_POST["submit"])){
        require 'includes/db_connect.php';

        $idcarte = $_POST['idcarte'];
        $nume = $_POST['numec'];
        $pret = $_POST['pret'];
        $stoc = $_POST['stoc'];
        $editura = $_POST['editura'];

        try {
            $sql = "INSERT INTO carte (idcarte, nume , pret, stoc, editura) VALUES (:idcarte, :nume, :pret, :stoc, :editura)";
            $stmt = $db->prepare($sql);
            $insert = $stmt->execute(['idcarte' => $idcarte, 'nume' => $nume, 'pret' => $pret, 'stoc' => $stoc, 'editura' => $editura]);

            if ($insert) {
                header("location:carti.php");
            }
        } catch(PDOException $error) {
            // echo $error->getMessage();
            echo "A database error has occured.";
        }
    } else {
        header("location:adauga-carte.html");
    }
?>
