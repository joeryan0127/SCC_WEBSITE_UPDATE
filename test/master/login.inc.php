<?php

	session_start();
	include 'dbcon.php';

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		


		$sql = "SELECT * FROM tbl_admin WHERE a_username = '$username'";
		$query = $conn->query($sql);
		
		$row = $query->fetch_assoc();
		$check=password_verify($password, $row['a_password']);
		
		if(!$row){
			$_SESSION['error'] = 'Cannot find account with the username';
		
		}else if($check === false){
			$_SESSION['error'] = 'Incorrect password';
		}else{
			session_start();
					$_SESSION['username'] = $row['a_id'];
	
					header('location: Page/dashboard.php?error=success');
					exit();
		}
			  
		// 	}else if($row['status']== "Admin"){

		// 		  session_start();
		// 		$_SESSION['username'] = $row['a_id'];

		// 		header('location: Page/dashboard.php?error=success');
		// 		exit();
		// 	}else if($row['status']== "SCO"){

		// 		session_start();
		// 	  $_SESSION['username'] = $row['a_id'];

		// 	  header('location: Page/soa_dashboard.php?error=success');
		// 	  exit();
		//   }
		// 	else{
		// 		$_SESSION['error'] = 'Incorrect pass';
		
		// 	}

		}
				header('location: index.php');
		
	
	
	

?>