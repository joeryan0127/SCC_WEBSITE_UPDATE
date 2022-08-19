<?php 

include 'include/sessions.php';

// Add news and updates	
if (isset($_POST['add_newsssco'])) {
	$news_title = $_POST['news_title'];
    $description = $_POST['news_description'];
    $acad_id = $_POST['acad_id'];
    $news_date = $_POST['news_date'];
    $filename = $_FILES['file']['name'];
	if(!empty($filename)){
		move_uploaded_file($_FILES['file']['tmp_name'], '../images/'.$filename);
		
	}

	$sql = "INSERT INTO `tbl_events`(`evnts_news`, `evnts_description`, `evnts_year`,`evnts_date`,`evnts_photo`) VALUES ('$news_title','$description','$acad_id','$news_date','$filename')";
	if($conn->query($sql)){
        $_SESSION['status'] = "Success";
        $_SESSION['text'] = "Post inserted";
        $_SESSION['status_code'] = "success";
                ?>
                <script>
                    window.location="dashboard.php";
                </script>
                <?php
        exit();
	}
	else{
		$_SESSION['status_code'] = "error";
                ?>
                <script>
                    window.location="dashboard.php";
                </script>
                <?php
		exit();
	}
}
	

   // update scomnews
if(isset($_POST['update_newsevnts'])){
	$evnts_id = $_POST['evnts_id'];
	$news_title = $_POST['news_title'];
    $description = $_POST['news_description'];
    $acad_id = $_POST['acad_id'];
    $news_date = $_POST['news_date'];
    $filename = $_FILES['filename']['name'];
    
    $sql = "SELECT * FROM tbl_events WHERE evnts_id = $evnts_id";
	$query = $conn->query($sql);
    $row = $query->fetch_assoc();
    
	if(!empty($filename)){
		move_uploaded_file($_FILES['file']['tmp_name'], '../images/'.$filename);
		$photo = $filename;	
	}
	else{
		$photo = $row['evnts_photo'];
	}

		$sql1 = "UPDATE `tbl_events` SET `evnts_news`='$news_title',`evnts_description`='$description',`evnts_year`='$acad_id',`evnts_date`='$news_date',`evnts_photo`='$photo' WHERE evnts_id = '$evnts_id'";
		if($conn->query($sql1)){
			     $_SESSION['status'] = "Update Successfull";
                $_SESSION['text'] = "successfully update";
                $_SESSION['status_code'] = "success";
                ?>
                <script>
                    window.location="dashboard.php";
                </script>
                <?php
                  exit();
		}
		else{
			$_SESSION['status_code'] = "error";
                ?>
                <script>
                    window.location="dashboard.php";
                </script>
                <?php
			  exit();
		}
	}
	
	
	

// delete sconews
	if(isset($_POST['delete'])){
	$evnts_id = $_POST['evnts_id'];
		$sql2 = "DELETE FROM `tbl_events` WHERE evnts_id = '$evnts_id'";
		if($conn->query($sql2)){
	            $_SESSION['status'] = "Deleted";
                $_SESSION['text'] = "Post Deleted";
                $_SESSION['status_code'] = "success";
                  header('Location: dashboard.php');
                  exit();
		}
		else{
			$_SESSION['status_code'] = "error";
                ?>
                <script>
                    window.location="dashboard.php";
                </script>
                <?php
			exit();
		}
	}

    
   
?>