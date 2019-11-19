<?php
    $idfilm = $_POST['idfilm'];
    $nume = $_POST['nume'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "librarie";

    $conn = new mysqli($servername, $username, $password,$dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }


    if(isset($_POST["delete1"])) {
    $sql = "DELETE FROM film WHERE idfilm = '$idfilm'";
    $result = mysqli_query($conn,$sql);
    if (mysqli_query($conn, $sql)) {
    header("location:sterge-film.html");
      if ($conn->query($sql) === TRUE) {
      echo "<script type= 'text/javascript'>alert('New record deleted successfully');</script>";
      } else {
      echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
      }
     }
   }
   if(isset($_POST["delete2"])) {
   $sql = "DELETE FROM film WHERE nume= '$nume'";
   $result = mysqli_query($conn,$sql);
   if (mysqli_query($conn, $sql)) {
   header("location:sterge-film.html");
     if ($conn->query($sql) === TRUE) {
     echo "<script type= 'text/javascript'>alert('New record deleted successfully');</script>";
     } else {
     echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
     }
    }
  }

    $conn->close();
?>
