<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$nom=$_POST['nom'];
$email=$_POST['email'];
$file = $_POST['file'];
$phone =$_POST['tel'];
$sql = 'INSERT INTO paiement VALUES("","'.$nom.'","'.$tel.'","'.$file.'","'.$email.'")';
mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
?>
