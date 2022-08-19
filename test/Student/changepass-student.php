<?php
session_start();

include 'includes/conn.php';
if(isset($_POST['change-pass'])){
	$student_id = $_POST['idStudent'];
	$oldpass = $_POST['oldpass'];
	$newpass = $_POST['newpass'];
	$confirmpass = $_POST['confirmpass'];
	
	$pass = $conn->query("SELECT * FROM tbl_student WHERE Password = '$oldpass' and Student_id = '$student_id'")->fetch_array();
if ($oldpass == '' && $newpass == '' && $confirmpass == ''){
		$_SESSION['error'] = "All fields are required!";
				?>
		<script>
		    window.location="studentChangepass.php?id=<?php echo $student_id;?>";
		</script>
		<?php
}else if($newpass !== $confirmpass){
   		$_SESSION['error'] = "New password not match.";
				?>
		<script>
		    window.location="studentChangepass.php?id=<?php echo $student_id;?>";
		</script>
		<?php
 }else if($pass){ 
		$_SESSION['student'] = $pass['Student_id'];
		$hashpwd = password_hash($newpass, PASSWORD_DEFAULT);
		$sql = ("UPDATE tbl_student SET Password = '$hashpwd' WHERE Student_id = '$student_id'");
		$change = $conn->query($sql);

		?>
		<script>
		    window.location="student-index.php";
		</script>
		<?php
  }else{
    	$_SESSION['error'] = "Old passsword does not match.";
				?>
		<script>
		    window.location="studentChangepass.php?id=<?php echo $student_id;?>";
		</script>
		<?php
  }	
	}



?>

