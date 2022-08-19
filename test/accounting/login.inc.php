<?php

	session_start();
	include 'dbcon.php';

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM tbl_accounting WHERE ac_username = '$username'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find account with the username';
		
		}
		else{
			$row = $query->fetch_assoc();
			if(password_verify($password, $row['ac_password']) == 0){
			    session_start();
				$_SESSION['acusername'] = $row['ac_id'];
				   header('location: Accounting/dashboard.php');
    exit();
			}
			else{
				$_SESSION['error'] = 'Incorrect password';
		
			}

		}
				header('location: index.php');
		
	}
	
	

?>