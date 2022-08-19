<?php
	include 'include/sessions.php';

	if(isset($_POST['edit'])){
        $post_id = $_POST['id'];
		$post_name = $_POST['subjectDept'];
        $post_description = $_POST['description'];
		// $post_date = $_POST['post_date'];
		$photo = $_FILES['photo']['name'];
		
		$sql = "SELECT * FROM tbl_post WHERE id = $post_id";
		$query = $conn->query($sql);
        $row = $query->fetch_assoc();
		

		if(!empty($photo)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$photo);
			$filename = $photo;	
		}
		else{
			$filename = $row['post_photo'];
		}
		$sql = "UPDATE tbl_post SET post_title = '$post_name', post_description = '$post_description',
		post_photo = '$filename' WHERE id = '$post_id' ";
		if($conn->query($sql)){
			$_SESSION['success'] = 'The post has been successfully updated';
			header('Location: bsit.php');
			exit();
		}
		else{
			$_SESSION['error'] = $conn->error;
			header('Location: bsit.php');
			exit();
		}

	}

	if(isset($_POST['editbshm'])){
        $post_id = $_POST['id'];
		$post_name = $_POST['subjectDept'];
        $post_description = $_POST['description'];
		// $post_date = $_POST['post_date'];
		$photo = $_FILES['photo']['name'];
		
		$sql = "SELECT * FROM tbl_post WHERE id = $post_id";
		$query = $conn->query($sql);
        $row = $query->fetch_assoc();
		

		if(!empty($photo)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$photo);
			$filename = $photo;	
		}
		else{
			$filename = $row['post_photo'];
		}
		$sql = "UPDATE tbl_post SET post_title = '$post_name', post_description = '$post_description',
		post_photo = '$filename' WHERE id = '$post_id' ";
		if($conn->query($sql)){
			$_SESSION['success'] = 'The post has been successfully updated';
			header('Location: bshm.php');
			exit();
		}
		else{
			$_SESSION['error'] = $conn->error;
			header('Location: bshm.php');
			exit();
		}

	}

	if(isset($_POST['editbeed'])){
        $post_id = $_POST['id'];
		$post_name = $_POST['subjectDept'];
        $post_description = $_POST['description'];
		// $post_date = $_POST['post_date'];
		$photo = $_FILES['photo']['name'];
		
		$sql = "SELECT * FROM tbl_post WHERE id = $post_id";
		$query = $conn->query($sql);
        $row = $query->fetch_assoc();
		

		if(!empty($photo)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$photo);
			$filename = $photo;	
		}
		else{
			$filename = $row['post_photo'];
		}
		$sql = "UPDATE tbl_post SET post_title = '$post_name', post_description = '$post_description',
		post_photo = '$filename' WHERE id = '$post_id' ";
		if($conn->query($sql)){
			$_SESSION['success'] = 'The post has been successfully updated';
			header('Location: beed.php');
			exit();
		}
		else{
			$_SESSION['error'] = $conn->error;
			header('Location: beed.php');
			exit();
		}

	}

	if(isset($_POST['editbsba'])){
        $post_id = $_POST['id'];
		$post_name = $_POST['subjectDept'];
        $post_description = $_POST['description'];
		// $post_date = $_POST['post_date'];
		$photo = $_FILES['photo']['name'];
		
		$sql = "SELECT * FROM tbl_post WHERE id = $post_id";
		$query = $conn->query($sql);
        $row = $query->fetch_assoc();
		

		if(!empty($photo)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$photo);
			$filename = $photo;	
		}
		else{
			$filename = $row['post_photo'];
		}
		$sql = "UPDATE tbl_post SET post_title = '$post_name', post_description = '$post_description',
		post_photo = '$filename' WHERE id = '$post_id' ";
		if($conn->query($sql)){
			$_SESSION['success'] = 'The post has been successfully updated';
			header('Location: bsba.php');
			exit();
		}
		else{
			$_SESSION['error'] = $conn->error;
			header('Location: bsba.php');
			exit();
		}

	}

	if(isset($_POST['editbscrim'])){
        $post_id = $_POST['id'];
		$post_name = $_POST['subjectDept'];
        $post_description = $_POST['description'];
		// $post_date = $_POST['post_date'];
		$photo = $_FILES['photo']['name'];
		
		$sql = "SELECT * FROM tbl_post WHERE id = $post_id";
		$query = $conn->query($sql);
        $row = $query->fetch_assoc();
		

		if(!empty($photo)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$photo);
			$filename = $photo;	
		}
		else{
			$filename = $row['post_photo'];
		}
		$sql = "UPDATE tbl_post SET post_title = '$post_name', post_description = '$post_description',
		post_photo = '$filename' WHERE id = '$post_id' ";
		if($conn->query($sql)){
			$_SESSION['success'] = 'The post has been successfully updated';
			header('Location: bscrim.php');
			exit();
		}
		else{
			$_SESSION['error'] = $conn->error;
			header('Location: bscrim.php');
			exit();
		}

	}

	if(isset($_POST['editbsed'])){
        $post_id = $_POST['id'];
		$post_name = $_POST['subjectDept'];
        $post_description = $_POST['description'];
		// $post_date = $_POST['post_date'];
		$photo = $_FILES['photo']['name'];
		
		$sql = "SELECT * FROM tbl_post WHERE id = $post_id";
		$query = $conn->query($sql);
        $row = $query->fetch_assoc();
		

		if(!empty($photo)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$photo);
			$filename = $photo;	
		}
		else{
			$filename = $row['post_photo'];
		}
		$sql = "UPDATE tbl_post SET post_title = '$post_name', post_description = '$post_description',
		post_photo = '$filename' WHERE id = '$post_id' ";
		if($conn->query($sql)){
			$_SESSION['success'] = 'The post has been successfully updated';
			header('Location: bsed.php');
			exit();
		}
		else{
			$_SESSION['error'] = $conn->error;
			header('Location: bsed.php');
			exit();
		}

	}

	if(isset($_POST['editbstm'])){
        $post_id = $_POST['id'];
		$post_name = $_POST['subjectDept'];
        $post_description = $_POST['description'];
		// $post_date = $_POST['post_date'];
		$photo = $_FILES['photo']['name'];
		
		$sql = "SELECT * FROM tbl_post WHERE id = $post_id";
		$query = $conn->query($sql);
        $row = $query->fetch_assoc();
		

		if(!empty($photo)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$photo);
			$filename = $photo;	
		}
		else{
			$filename = $row['post_photo'];
		}
		$sql = "UPDATE tbl_post SET post_title = '$post_name', post_description = '$post_description',
		post_photo = '$filename' WHERE id = '$post_id' ";
		if($conn->query($sql)){
			$_SESSION['success'] = 'The post has been successfully updated';
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