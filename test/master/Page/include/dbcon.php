<?php
 // $servername = "localhost";
 // $username = "stcecili__sccs";
 // $dbpassword = "Vn,PTo25@Fj[";
 // $dbname = "stcecili_sccdbms";
  $servername = "localhost";
 $username = "root";
 $dbpassword = "";
 $dbname = "stcecilia";
 
 $conn = mysqli_connect( $servername,$username, $dbpassword,$dbname);
 if(!$conn){
     $conn->error();
 }
 
 
 ?>