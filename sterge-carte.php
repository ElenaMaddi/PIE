<?php
    $idcarte = $_POST['idcarte'];
    $nume = $_POST['numec'];
    $editura = $_POST['editura'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "librarie";

    $conn = new mysqli($servername, $username, $password,$dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }


    if(isset($_POST["delete1"])) {
    $sql = "DELETE FROM carte WHERE idcarte = '$idcarte'";
    $result = mysqli_query($conn,$sql);
    if (mysqli_query($conn, $sql)) {
    header("location:sterge-carte.html");
      if ($conn->query($sql) === TRUE) {
      echo "<script type= 'text/javascript'>alert('New record deleted successfully');</script>";
      } else {
      echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
      }
     }
   }
   if(isset($_POST["delete2"])) {
   $sql = "DELETE FROM carte WHERE nume= '$nume'";
   $result = mysqli_query($conn,$sql);
   if (mysqli_query($conn, $sql)) {
   header("location:sterge-carte.html");
     if ($conn->query($sql) === TRUE) {
     echo "<script type= 'text/javascript'>alert('New record deleted successfully');</script>";
     } else {
     echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
     }
    }
  }
  if(isset($_POST["delete3"])) {
  $sql = "DELETE FROM carte WHERE editura= '$editura'";
  $result = mysqli_query($conn,$sql);
  if (mysqli_query($conn, $sql)) {
  header("location:sterge-carte.html");
    if ($conn->query($sql) === TRUE) {
    echo "<script type= 'text/javascript'>alert('New record deleted successfully');</script>";
    } else {
    echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
    }
   }
 }
    $conn->close();
?>
