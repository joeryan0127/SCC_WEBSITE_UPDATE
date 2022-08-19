<?php
 // $servername = "localhost";
 // $username = "stcecili__sccs";
 // $dbpassword = "Vn,PTo25@Fj[";
 // $dbname = "stcecili_sccdbms";
 
 // $conn = mysqli_connect( $servername,$username, $dbpassword,$dbname);
 // if(!$conn){
 //     $conn->error();
 // }
 
 
	$conn = new mysqli('localhost', 'root', '', 'stcecilia');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
 ?>