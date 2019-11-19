<?php
  if(isset($_POST["submit"])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "librarie";
    //$idcarte = $_POST['idcarte'];
    //$nume = $_POST['numec'];
    //$pret = $_POST['pret'];
    //$stoc = $_POST['stoc'];
    //$editura = $_POST['editura'];
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    $sql = "INSERT INTO carte (idcarte, nume , pret, stoc, editura) VALUES ('".$_POST["idcarte"]."','".$_POST["numec"]."','".$_POST["pret"]."','".$_POST["stoc"]."', '".$_POST["editura"]."')";
    $result = mysqli_query($conn,$sql);
    header("location:adauga-carte.html");
      if ($conn->query($sql) === TRUE) {
      echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
      } else {
      echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
      }

    $conn->close();

}



 ?>
