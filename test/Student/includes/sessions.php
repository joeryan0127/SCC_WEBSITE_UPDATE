<?php
	session_start();
	include 'includes/conn.php';

	if(!isset($_SESSION['student']) || trim($_SESSION['student']) == ''){
		header('location: student-login.php');
	}

	
	$sql = "SELECT * FROM tbl_student WHERE Student_id = '".$_SESSION['student']."'";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();
	
?>