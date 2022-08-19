
<?php
include 'include/sessions.php';

if (isset($_POST['addAccount'])){
  $status = $_POST['status'];
	$fname = $_POST['fname'];
	$flastname = $_POST['flastname'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$hashedPws = password_hash($password, PASSWORD_DEFAULT);

  $checkExist = $conn->query("SELECT * FROM tbl_admin WHERE a_username = '$username'");
  $ress = $checkExist->fetch_array();

  if ($ress == 0) {

      $insert = "INSERT INTO tbl_admin( `a_firstname`, `a_lastname`, `a_email`,`a_username`, `a_password`, `status`) VALUES ('$fname','$flastname','$email','$username','$hashedPws','$status') ";
      $inserts = $conn->query($insert);
      $_SESSION['success'] = 'New account added';
     header('Location: manage-account.php?error=success');

  }else{
    $_SESSION['error'] = 'Username already taken';
    header('Location: manage-account.php?error=usernameExist');
    exit();
  }

	if (empty($fname) && empty($fname) && empty($email) && empty($username) && empty($password) ) {
		$_SESSION['error'] = 'Fill up form first';
		header('Location: manage-account.php?error=emptyField');
	}
}
	

?>

<?php
// edit user account
if (isset($_POST['edit'])) {
$a_id = $_POST['a_id'];
$fname = $_POST['fname'];
$flastname = $_POST['flastname'];
$email = $_POST['email'];

$conn->query("UPDATE tbl_admin SET a_firstname = '$fname' , a_lastname = '$flastname', a_email = '$email' WHERE a_id = '$a_id'");
$_SESSION['success'] = 'Account successfuly updated';
header('location: manage-account.php?error=updated');
exit();

}

// delete user account
if (isset($_POST['delete'])) {
	$a_id = $_POST['a_id'];
	$conn->query("DELETE FROM tbl_admin WHERE a_id = '$a_id'");
	$_SESSION['error'] = 'Account successfuly remove';
	header('location: manage-account.php?error=delete');
	exit();
}
// Change password

if (isset($_POST['changpass'])) {
	$a_id = $_POST['a_id'];
	$currentpass = $_POST['currentpass'];
	$newpass = $_POST['newpass'];
	$newpass1 = $_POST['newpass1']; 

	$currentpass = $conn->query("SELECT * FROM tbl_admin WHERE a_password = '$currentpass'");
	$currentpass = $currentpass->fetch_assoc();

  if ($newpass !== $newpass1) {
    $_SESSION['error'] = 'Retype your password';
    header('location: manage-account.php?error=retypepass');
    exit();      

   }

	 if(password_verify($currentpass, $currentpass['a_password'])){ 
	 	$_SESSION['error'] = 'Current password does not match';
	 	header('location: manage-account.php?error=error');
    exit();    

	 }else{
	 	$npass = password_hash($newpass, PASSWORD_DEFAULT);
	 	$conn->query("UPDATE tbl_admin SET a_password='$npass' WHERE a_id = $a_id");
	 	$_SESSION['success'] = 'Password change successfuly';
	 	header('location: manage-account.php?error=updated');
	 	exit();
	 }
}

// ========================================================
// edit user account
if (isset($_POST['updateProfile'])) {
$a_id = $_POST['a_id'];
$fname = $_POST['profileName'];
$flastname = $_POST['profileLastname'];
$email = $_POST['profileEmail'];

$conn->query("UPDATE tbl_admin SET a_firstname = '$fname' , a_lastname = '$flastname', a_email = '$email' WHERE a_id = '".$_SESSION['username']."'");
$_SESSION['success'] = 'Profile successfuly updated';
       ?>
      <script>
        window.location="myprofile.php?error=Updated";
      </script>
    <?php   

}

// Change password for profile account

if (isset($_POST['profileChangepass'])) {
   $a_id = $_POST['a_id'];
  $currentpass = $_POST['currentPass'];
  $newpass = $_POST['newPass'];
  $newpass1 = $_POST['retypePass']; 

  $currentpass = $conn->query("SELECT * FROM tbl_admin WHERE a_password = '$currentpass'");
  $currentpass = $currentpass->fetch_assoc();

  if ($newpass !== $newpass1) {
    $_SESSION['error'] = 'Retype your password';

    ?>
      <script>
        window.location="myprofile.php?error=retypepass";
      </script>
    <?php
    // header('location: manage-account.php?error=retypepass');
    exit();      

   }

   if(password_verify($currentpass, $currentpass['a_password'])){ 
    $_SESSION['error'] = 'Current password does not match';
        ?>
      <script>
        window.location="myprofile.php?error=error";
      </script>
    <?php
    // header('location: manage-account.php?error=error');
    exit();    

   }else{
    $npass = password_hash($newpass, PASSWORD_DEFAULT);
    $conn->query("UPDATE tbl_admin SET a_password='$npass' WHERE a_id = $a_id");
    $_SESSION['success'] = 'Password change successfuly';
    ?>
      <script>
        window.location="myprofile.php?error=updated";
      </script>
    <?php
    // header('location: manage-account.php?error=updated');
    exit();
   }
}

// upload file for student entry
include 'include/connect.php';
$connect = mysqli_connect("localhost", "root", "", "stcecilia");
if (isset($_POST['upload'])) {
  $sy=$_POST['acad_id'];
	if ($_FILES['file']['name'] == "")
	{
	  header('Location: manage-students.php?error=Nofile');
	  exit();
	}else {

	 if($_FILES['file']['name'])
    {
      $filename = explode(".", $_FILES['file']['name']);
      if($filename[1] == 'csv'){
  

        $statement6 =$conn->prepare("SELECT * from tbl_student");
        $statement6->execute();
        while($resident=$statement6->fetch()){
          $names=$resident['Student_id'];
        
        //   echo $names;
          $stats="UNENROLLED";
                $statement3 = $conn ->prepare("UPDATE tbl_student SET Status = :stats WHERE Student_id =:id ");
        
                $statement3->bindValue(':stats', $stats);
                $statement3->bindValue(':id', $names);
                $result1 = $statement3 ->execute(); 
        }  

          $handle = fopen($_FILES['file']['tmp_name'], "r"); 
          while($data = fgetcsv($handle))//handling csv file 
          {
            $item1 = mysqli_real_escape_string($connect, utf8_encode($data[0]));
            $item2 = mysqli_real_escape_string($connect, utf8_encode($data[1]));
            $item3 = mysqli_real_escape_string($connect, utf8_encode($data[2]));
            $item4 = mysqli_real_escape_string($connect, utf8_encode($data[3]));
            $item5 = mysqli_real_escape_string($connect, utf8_encode($data[4]));
            $item6 = mysqli_real_escape_string($connect, utf8_encode($data[5]));
            $item7 = mysqli_real_escape_string($connect, utf8_encode($data[6]));
            $item8 = mysqli_real_escape_string($connect, utf8_encode($data[7]));
            $item9 = mysqli_real_escape_string($connect, utf8_encode($data[8]));
            $item10 = mysqli_real_escape_string($connect, utf8_encode($data[9]));
            $item11 = mysqli_real_escape_string($connect, utf8_encode($data[10]));
            $item12 = mysqli_real_escape_string($connect, utf8_encode($data[11]));
            $item13 = mysqli_real_escape_string($connect, utf8_encode($data[12]));
            $item14 = mysqli_real_escape_string($connect, utf8_encode($data[13]));
            $item15 = mysqli_real_escape_string($connect, $sy);
            $item16 = mysqli_real_escape_string($connect, "ENROLLED");
  
            // $query = "INSERT into tbl_student (Student_id, FullName, B_date, 	B_place, Sex, Religion, Citizenship, Home_add, 	Home_No, 	Civil_Status, Semester, YearLevel, Major, Course, SY, Status,Password) 
            // values('$item1','$item2','$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11','$item12','$item13','$item14','$item15','$item16','$item3')";
          
          $query="INSERT INTO tbl_student (Student_id, FullName, B_date, 	B_place, Sex, Religion, Citizenship, Home_add, 	Home_No, 	Civil_Status, Semester, YearLevel, Major, Course, SY, Status,Password) 
          VALUES ('$item1','$item2','$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11','$item12','$item13','$item14','$item15','$item16','$item3')
          ON DUPLICATE KEY UPDATE FullName='$item2', B_date='$item3', B_place='$item4',Sex = '$item5', Religion='$item6', Citizenship='$item7', Home_add='$item8',Home_No='$item9',Civil_Status='$item10',Semester='$item11',YearLevel='$item12',Major='$item13',Course='$item14',SY='$item15',Status='$item16'";
          
          set_time_limit(500);
            mysqli_query($connect, $query);             
  
            // $statement5 =$conn->prepare("SELECT * from tbl_student WHERE 	Student_id like :ids");
            // $statement5->bindValue(':ids', $item1);
            // $statement5->execute();
            // while($resident=$statement5->fetch()){
            //   $namesss=$resident['Student_id'];
            
            //   $stats="ENROLLED";
            //   $statement3 = $conn ->prepare("UPDATE tbl_student SET B_date=:bdate,	Civil_Status=:CS,	Semester=:Sem,YearLevel=:Level,Major=:major,	Course=:Course,	SY=:SY , Status = :stats WHERE Student_id = :id ");

            //   $statement3->bindValue(':bdate', $item3);
            //   $statement3->bindValue(':CS', $item10);
            //   $statement3->bindValue(':Sem', $item11);
            //   $statement3->bindValue(':Level', $item12);
            //   $statement3->bindValue(':major', $item13);
            //   $statement3->bindValue(':Course', $item14);
            //   $statement3->bindValue(':SY', $item15);
            //   $statement3->bindValue(':stats', $stats);
            //   $statement3->bindValue(':id', $namesss);
            //   $result1 = $statement3 ->execute(); 
            // }
  }
  
  $_SESSION['success'] = 'File uploaded successfuly';
	header('location: manage-students.php?error=success');
	exit();
  
  
  } else {
	$_SESSION['error'] = 'File is invalid';
	header('location: manage-students.php?error=invalid');
	exit();
  }
  fclose($handle);
  
    }
    

  }
}


// upload tuitions for students
if (isset($_POST['uploadTuitions'])) {

  $sy=$_POST['acad_id'];
  $sem_id = $_POST['sem_id'];
  $period_id = $_POST['period_id'];

  if ($_FILES['file']['name'] == "")
  {
    header('Location: manage-tuitions.php?error=Nofile');
    exit();
  }else {

   if($_FILES['file']['name'])
    {
      $filename = explode(".", $_FILES['file']['name']);
      if($filename[1] == 'csv'){
  

          $handle = fopen($_FILES['file']['tmp_name'], "r"); 
          while($data = fgetcsv($handle))//handling csv file 
          {
            $item1 = mysqli_real_escape_string($connect, $sy);
            $item2 = mysqli_real_escape_string($connect, $sem_id);
            $item3 = mysqli_real_escape_string($connect, $period_id);
            $item4 = mysqli_real_escape_string($connect, $data[0]);
            $item5 = mysqli_real_escape_string($connect, $data[2]);
     
  
            $query = "INSERT into tbl_tuition (Acad_id, sem_id, period_id,  Student_id, Balance ) 
            values('$item1','$item2','$item3','$item4','$item5')";
       set_time_limit(500);
            mysqli_query($connect, $query);             
  
      
  }
  
  $_SESSION['success'] = 'File uploaded successfuly';
  header('location: manage-tuitions.php?error=success');
  exit();
  
  
  } else {
  $_SESSION['error'] = 'File is invalid';
  header('location: manage-tuitions.php?error=invalid');
  exit();
  }
  fclose($handle);
  
    }
    

  }
}

// reset password

if (isset($_POST['RESET'])) {
  $reset=$_POST['reset_id'];


  $statement6 =$conn->prepare("SELECT * from tbl_student WHERE Student_id = '$reset'");
  $statement6->execute();
  while($resident=$statement6->fetch()){
    $Bdate=$resident['B_date'];

    $statement3 = $conn ->prepare("UPDATE tbl_student SET Password = :pass WHERE Student_id =:id ");
      
    $statement3->bindValue(':pass',$Bdate);
    $statement3->bindValue(':id',$reset);
    $result1 = $statement3 ->execute(); 

    $msg = "".$resident['FullName']." password reseted successfuly";

    $_SESSION['success'] = $msg;
    header('location:manage-students.php?error=Reset');
    exit();
  }


}
?>
