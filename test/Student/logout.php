<?php
	session_start();
	unset($_SESSION['student']);	
	if(session_destroy()) {
		header("Location: ../index.php");
	}
?>