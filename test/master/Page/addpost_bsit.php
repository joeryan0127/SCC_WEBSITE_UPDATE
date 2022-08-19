<?php 

include 'include/sessions.php';

if(isset($_POST['addpost_bsit'])){
	$subject = $_POST['subjectDept'];
    $description = $_POST['description'];
    $department = $_POST['department'];
	$postdate = date("Y-m-d");
	$filename = $_FILES['image']['name'];
	if(!empty($filename)){
		move_uploaded_file($_FILES['image']['tmp_name'], '../images/'.$filename);
		
	}

		$sql = "INSERT INTO tbl_post (post_title, post_description, post_date, post_photo, post_department) 
        VALUES ('$subject', '$description', '$postdate', '$filename', '$department')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Activity added successfully';
			header('Location: bsit.php');
			exit();
		}
		else{
			$_SESSION['status_code'] = "error";
			header('Location: bsit.php');
			exit();
		}

	}

	// bshm add post
 
if(isset($_POST['addpost_bshm'])){
	$subject = $_POST['subjectDept'];
    $description = $_POST['description'];
    $department = $_POST['department'];
	$postdate = date("Y-m-d");
	$filename = $_FILES['image']['name'];
	if(!empty($filename)){
		move_uploaded_file($_FILES['image']['tmp_name'], '../images/'.$filename);
		
	}

		$sql = "INSERT INTO tbl_post (post_title, post_description, post_date, post_photo, post_department) 
        VALUES ('$subject', '$description', '$postdate', '$filename', '$department')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Activity added successfully';
			header('Location: bshm.php');
			exit();
		}
		else{
			$_SESSION['status_code'] = "error";
			header('Location: bshm.php');
			exit();
		}

	}
//BEED add post

if(isset($_POST['addpost_beed'])){
	$subject = $_POST['subjectDept'];
    $description = $_POST['description'];
    $department = $_POST['department'];
	$postdate = date("Y-m-d");
	$filename = $_FILES['image']['name'];
	if(!empty($filename)){
		move_uploaded_file($_FILES['image']['tmp_name'], '../images/'.$filename);
		
	}

		$sql = "INSERT INTO tbl_post (post_title, post_description, post_date, post_photo, post_department) 
        VALUES ('$subject', '$description', '$postdate', '$filename', '$department')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Activity added successfully';
			header('Location: beed.php');
			exit();
		}
		else{
			$_SESSION['status_code'] = "error";
			header('Location: beed.php');
			exit();
		}

	}

//BSBA

if(isset($_POST['addpost_bsba'])){
	$subject = $_POST['subjectDept'];
    $description = $_POST['description'];
    $department = $_POST['department'];
	$postdate = date("Y-m-d");
	$filename = $_FILES['image']['name'];
	if(!empty($filename)){
		move_uploaded_file($_FILES['image']['tmp_name'], '../images/'.$filename);
		
	}

		$sql = "INSERT INTO tbl_post (post_title, post_description, post_date, post_photo, post_department) 
        VALUES ('$subject', '$description', '$postdate', '$filename', '$department')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Activity added successfully';
			header('Location: bsba.php');
			exit();
		}
		else{
			$_SESSION['status_code'] = "error";
			header('Location: bsba.php');
			exit();
		}

	}

if(isset($_POST['addpost_bscrim'])){
	$subject = $_POST['subjectDept'];
    $description = $_POST['description'];
    $department = $_POST['department'];
	$postdate = date("Y-m-d");
	$filename = $_FILES['image']['name'];
	if(!empty($filename)){
		move_uploaded_file($_FILES['image']['tmp_name'], '../images/'.$filename);
		
	}

		$sql = "INSERT INTO tbl_post (post_title, post_description, post_date, post_photo, post_department) 
        VALUES ('$subject', '$description', '$postdate', '$filename', '$department')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Activity added successfully';
			header('Location: bscrim.php');
			exit();
		}
		else{
			$_SESSION['status_code'] = "error";
			header('Location: bscrim.php');
			exit();
		}

	}

if(isset($_POST['addpost_bsed'])){
	$subject = $_POST['subjectDept'];
    $description = $_POST['description'];
    $department = $_POST['department'];
	$postdate = date("Y-m-d");
	$filename = $_FILES['image']['name'];
	if(!empty($filename)){
		move_uploaded_file($_FILES['image']['tmp_name'], '../images/'.$filename);
		
	}

		$sql = "INSERT INTO tbl_post (post_title, post_description, post_date, post_photo, post_department) 
        VALUES ('$subject', '$description', '$postdate', '$filename', '$department')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Activity added successfully';
			header('Location: bsed.php');
			exit();
		}
		else{
			$_SESSION['status_code'] = "error";
			header('Location: bsed.php');
			exit();
		}

	}

if(isset($_POST['addpost_bstm'])){
	$subject = $_POST['subjectDept'];
    $description = $_POST['description'];
    $department = $_POST['department'];
	$postdate = date("Y-m-d");
	$filename = $_FILES['image']['name'];
	if(!empty($filename)){
		move_uploaded_file($_FILES['image']['tmp_name'], '../images/'.$filename);
		
	}

		$sql = "INSERT INTO tbl_post (post_title, post_description, post_date, post_photo, post_department) 
        VALUES ('$subject', '$description', '$postdate', '$filename', '$department')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Activity added successfully';
			header('Location: bstm.php');
			exit();
		}
		else{
			$_SESSION['status_code'] = "error";
			header('Location: bstm.php');
			exit();
		}

	}

?>