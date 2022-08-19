<?php
	include 'dbcon.php';
	session_start();
	if(!isset($_SESSION['username']) || trim($_SESSION['username']) == '' ){
        header('Location: ../index.php');
	}

	$queries = "SELECT * FROM tbl_admin WHERE a_id = '".$_SESSION['username']."'";
	$res = $conn->query($queries);
	$result = $res->fetch_array();
	


?>