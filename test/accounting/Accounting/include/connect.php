<?php
// $servername = "localhost";
// $username = "stcecili__sccs";
// $password = "Vn,PTo25@Fj[";
// $dbname="stcecili_sccdbms";

$servername = "localhost";
$username = "root";
$password = "";
$dbname="stcecilia";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

