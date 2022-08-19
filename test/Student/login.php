<?php
session_start();
include_once("includes/conn.php");
if(isset($_POST['login_button'])) {
	$id = $_POST['user_email'];
	$user_email = $_POST['user_email'];
	$user_password = $_POST['password'];
	$sql = "SELECT * FROM tbl_student WHERE Student_id = '$user_email'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);	

	if ($user_email == '' && $user_password == '') {
		$_SESSION['error'] = 'All fields are required!';
	?>
    <script>
        window.location="studentLogin.php";
    </script>
	<?php

	exit();
	}else if ($row['Password'] == $user_password){
	?>
        <script>
            window.location="studentChangepass.php?id=<?php echo $id;?>";
        </script>
    <?php
	}else if(password_verify($user_password, $row['Password'])){
		$_SESSION['student'] = $row['Student_id'];
	}else{
		$_SESSION['error'] = 'Username and password are not found';
	}

		?>
    <script>
        window.location="studentLogin.php";
    </script>
<?php
}
	

?>