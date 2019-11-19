<?php
  if(isset($_POST["submit"])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "librarie";
    $idmuzica = $_POST['idmuzica'];
    $nume = $_POST['nume'];
    $pret = $_POST['pret'];
    $stoc = $_POST['stoc'];

    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    $sql = "UPDATE muzica SET nume = '$nume', pret ='$pret', stoc ='$stoc' WHERE idmuzica = '$idmuzica' ";
    $result = mysqli_query($conn,$sql);
    header("location:modifica-muzica.html");
      if ($conn->query($sql) === TRUE) {
      echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
      } else {
      echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
      }

    $conn->close();

}



 ?>
