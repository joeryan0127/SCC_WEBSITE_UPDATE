<?php
	include 'include/sessions.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM tbl_post WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Post deleted successfully';
			header('Location: bsit.php');
			exit();
		}
		else{
			$_SESSION['error'] = $conn->error;
			header('Location: bsit.php');
			exit();
		}
	}

	if(isset($_POST['deletebshm'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM tbl_post WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Post deleted successfully';
			header('Location: bshm.php');
			exit();
		}
		else{
			$_SESSION['error'] = $conn->error;
			header('Location: bshm.php');
			exit();
		}
	}

	if(isset($_POST['deletebeed'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM tbl_post WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Post deleted successfully';
			header('Location: beed.php');
			exit();
		}
		else{
			$_SESSION['error'] = $conn->error;
			header('Location: beed.php');
			exit();
		}
	}

	if(isset($_POST['deletebsba'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM tbl_post WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Post deleted successfully';
			header('Location: bsba.php');
			exit();
		}
		else{
			$_SESSION['error'] = $conn->error;
			header('Location: bsba.php');
			exit();
		}
	}

	if(isset($_POST['deletebscrim'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM tbl_post WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Post deleted successfully';
			header('Location: bscrim.php');
			exit();
		}
		else{
			$_SESSION['error'] = $conn->error;
			header('Location: bscrim.php');
			exit();
		}
	}

	if(isset($_POST['deletebsed'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM tbl_post WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Post deleted successfully';
			header('Location: bsed.php');
			exit();
		}
		else{
			$_SESSION['error'] = $conn->error;
			header('Location: bsed.php');
			exit();
		}
	}

	if(isset($_POST['deletebstm'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM tbl_post WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Post deleted successfully';
			header('Location: bstm.php');
			exit();
		}
		else{
			$_SESSION['error'] = $conn->error;
			header('Location: bstm.php');
			exit();
		}
	}
	
?>