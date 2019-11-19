<?php
  if(isset($_POST["submit"])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "librarie";

    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    $sql = "INSERT INTO papetarie (idpapetarie, nume , pret, stoc, culoare) VALUES ('".$_POST["idjucarie"]."','".$_POST["nume"]."','".$_POST["pret"]."','".$_POST["stoc"]."', '".$_POST["culoare"]."')";
    $result = mysqli_query($conn,$sql);
    header("location:adauga-papetarie.html");
      if ($conn->query($sql) === TRUE) {
      echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
      } else {
      echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
      }

    $conn->close();

}



 ?>
