
<?php
include 'include/sessions.php';

if (isset($_POST['addAccounting'])){
	$fname = $_POST['fname'];
	$flastname = $_POST['flastname'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$hashedPws = password_hash($password, PASSWORD_DEFAULT);

  $checkExist = $conn->query("SELECT * FROM tbl_accounting WHERE ac_username = '$username'");
  $results = $checkExist->fetch_array();

  if ($results == 0) {
      $insert = "INSERT INTO tbl_accounting( `ac_firstname`, `ac_lastname`, `ac_email`,`ac_username`, `ac_password`) VALUES ('$fname','$flastname','$email','$username','$hashedPws') ";
      $inserts = $conn->query($insert);
      $_SESSION['success'] = 'New account added';
      header('Location: manage-accounting.php?error=success');
  }else{
      $_SESSION['error'] = 'Username already taken';
      header('Location: manage-accounting.php?error=usernameExist');
  }

	if (empty($fname) && empty($fname) && empty($email) && empty($username) && empty($password) ){
		$_SESSION['error'] = 'Fill up form first';
		header('Location: manage-accounting.php?error=emptyField');
	}


}
	

?>

<?php
// edit user account
if (isset($_POST['editAccounting'])) {
$ac_id = $_POST['ac_id'];
$fname = $_POST['fname'];
$flastname = $_POST['flastname'];
$email = $_POST['email'];

$conn->query("UPDATE tbl_accounting SET ac_firstname = '$fname' , ac_lastname = '$flastname', ac_email = '$email' WHERE ac_id = '$ac_id'");
$_SESSION['success'] = 'Account successfuly updated';
header('location: manage-accounting.php?error=updated');
exit();

}

// delete user account
if (isset($_POST['deleteAccounting'])) {
	$ac_id = $_POST['ac_id'];
	$conn->query("DELETE FROM tbl_accounting WHERE ac_id = '$ac_id'");
	$_SESSION['success'] = 'Account successfuly remove';
	header('location: manage-accounting.php?success=delete');
	exit();
}
// Change password

if (isset($_POST['changpassAccounting'])) {
	$ac_id = $_POST['ac_id'];
	$currentpass = $_POST['currentpass'];
	$newpass = $_POST['newpass'];
	$newpass1 = $_POST['newpass1']; 

	$currentpass = $conn->query("SELECT * FROM tbl_accounting WHERE ac_password = '$currentpass'");
	$currentpass = $currentpass->fetch_array();

	 if(password_verify($currentpass, $currentpass['ac_password']) == 0){ 
	 	$_SESSION['error'] = 'Current password does not match';
	 	header('location: manage-accounting.php?error=error');
        exit();    

	 }else if ($newpass !== $newpass1) {
	 	$_SESSION['error'] = 'Retype your password';
	 	header('location: manage-accounting.php?error=retypepass');
	 	exit();    	 

	 }else{
	 	$npass = password_hash($newpass, PASSWORD_DEFAULT);
	 	$conn->query("UPDATE tbl_accounting SET ac_password='$npass' WHERE ac_id = $ac_id");
	 	$_SESSION['success'] = 'Password change successfuly';
	 	header('location: manage-accounting.php?error=updated');
	 	exit();
	 }
}



?>
