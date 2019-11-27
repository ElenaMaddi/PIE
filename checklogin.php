<!doctype html>
<?php
$host="localhost";
$username="elena";
$password="elena123";
$db_name="librarie";
$tbl_name="users";
$link = mysqli_connect("127.0.0.1", "elena", "elena123", "librarie");
mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db($link,"$db_name")or die("cannot select DB");
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
$sql="SELECT * FROM users WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($link,$sql);
$count=mysqli_num_rows($result);
if($count==1){
$_SESSION['myusername']= $myusername;
$_SESSION['mypassword']= $mypassword;
header("location:index-admin.php");
}
else {
echo "Wrong Username or Password";
}
?>
