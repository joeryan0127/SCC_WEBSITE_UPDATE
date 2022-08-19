<?php
	include 'dbcon.php';
	session_start();
	if(!isset($_SESSION['acusername']) || trim($_SESSION['acusername']) == '' ){
        header('Location: ../index.php');
	}

	$queries = "SELECT * FROM tbl_accounting WHERE ac_id = '".$_SESSION['acusername']."'";
	$res = $conn->query($queries);
	$result = $res->fetch_array();
	


?>