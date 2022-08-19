<?php
include 'include/sessions.php';

// add academic year
if (isset($_POST['addAcadYear'])){
	$acaddyear = $_POST['acaddyear'];

  $checkYear = $conn->query("SELECT * FROM tbl_acadyear WHERE acad_year = '$acaddyear'");
  $res = $checkYear->fetch_array();

  if ($res == 0) {
      $insert = "INSERT INTO tbl_acadyear( `acad_year`) VALUES ('$acaddyear') ";
      $inserts = $conn->query($insert);
      $_SESSION['success'] = 'New academic year added';
      header('Location: dashboard.php?error=success');
  }else{
      $_SESSION['error'] = 'Academic year already exist';
      header('Location: dashboard.php?error=yearExist');
      exit();
  }

}

// edit academic Year

if (isset($_POST['editacademic'])) {
	$acad_id = $_POST['acad_id'];
	$academic = $_POST['academic'];

	$conn->query("UPDATE `tbl_acadyear` SET `acad_year`= '$academic' WHERE acad_id = '$acad_id'");
	$_SESSION['success'] = 'Academic year successfuly updated';
	header('location: dashboard.php?error=updated');
	exit();

}	


// delete Academic Year
if (isset($_POST['deleteacademic'])) {
	$acad_id = $_POST['acad_id'];
	$conn->query("DELETE FROM tbl_acadyear WHERE acad_id = '$acad_id'");
	$_SESSION['success'] = 'Account successfuly remove';
	header('location: dashboard.php?success=delete');
	exit();
}
?>