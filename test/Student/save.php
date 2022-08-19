<?php
	include 'includes/sessions.php';

	if(isset($_POST['upload'])){
		$photo = $_FILES['profile']['name'];
		if(!empty($photo)){
				move_uploaded_file($_FILES['profile']['tmp_name'], '../images/'.$photo);
				$filename = $photo;	
			}
			else{
				$filename = $user['img'];
			}
			$sql = "UPDATE tbl_student SET img = '$filename' WHERE Student_id = '".$user['Student_id']."'";
			if($conn->query($sql)){
				$_SESSION['success'] = 'Photo updated successfully';
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
        }
		else{
			$_SESSION['error'] = $conn->error;
		}

	header('location: student-index.php');

?>