
<?php
include 'include/sessions.php';

// edit user account
if (isset($_POST['updateProfile'])) {
$ac_id = $_POST['ac_id'];
$fname = $_POST['profileName'];
$flastname = $_POST['profileLastname'];
$email = $_POST['profileEmail'];

$conn->query("UPDATE tbl_accounting SET ac_firstname = '$fname' , ac_lastname = '$flastname', ac_email = '$email' WHERE ac_id = '".$_SESSION['username']."'");
$_SESSION['success'] = 'Profile successfuly updated';
       ?>
      <script>
        window.location="myprofile.php?error=Updated";
      </script>
    <?php   

}


// Change password

if (isset($_POST['profileChangepass'])) {
	$ac_id = $_POST['ac_id'];
	$currentpass = $_POST['currentPass'];
	$newpass = $_POST['newPass'];
	$newpass1 = $_POST['retypePass']; 

	$currentpass1 = $conn->query("SELECT * FROM tbl_accounting WHERE ac_id = '$ac_id'");
	$currentpassword = $currentpass1->fetch_assoc();

    if($newpass !== $newpass1){
    $_SESSION['error'] = 'Retype your password';
       ?>
      <script>
        window.location="myprofile.php?error=RetypePass";
      </script>
    <?php      
    exit();
   }

	 if(password_verify($currentpass, $currentpassword['a_password'])){ 
     $_SESSION['error'] = 'Current password does not match';
       ?>
      <script>
        window.location="myprofile.php?error=notFound";
      </script>
    <?php
	 }else{
  $npass = password_hash($newpass, PASSWORD_DEFAULT);
   $updatePass =  $conn->query("UPDATE tbl-accounting SET a_password='$npass' WHERE ac_id = '$ac_id'");
    $_SESSION['success'] = 'Password change successfuly';
   
       ?>
      <script>
        window.location="myprofile.php?success=changpass";
      </script>

    <?php 
	 }
}


// upload file for student entry
include 'include/connect.php';
$connect = mysqli_connect("localhost", "root", "", "stcecilia");
if (isset($_POST['upload'])) {
  $sy=$_POST['acad_id'];
	if ($_FILES['file']['name'] == "")
	{
       ?>
      <script>
        window.location="manage-students.php?error=Nofile";
      </script>
    <?php
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
            $item1 = mysqli_real_escape_string($connect, $data[0]);
            $item2 = mysqli_real_escape_string($connect, $data[1]);
            $item3 = mysqli_real_escape_string($connect, $data[2]);
            $item4 = mysqli_real_escape_string($connect, $data[3]);
            $item5 = mysqli_real_escape_string($connect, $data[4]);
            $item6 = mysqli_real_escape_string($connect, $data[5]);
            $item7 = mysqli_real_escape_string($connect, $data[6]);
            $item8 = mysqli_real_escape_string($connect, $data[7]);
            $item9 = mysqli_real_escape_string($connect, $data[8]);
            $item10 = mysqli_real_escape_string($connect, $data[9]);
            $item11 = mysqli_real_escape_string($connect, $data[10]);
            $item12 = mysqli_real_escape_string($connect, $data[11]);
            $item13 = mysqli_real_escape_string($connect, $data[12]);
            $item14 = mysqli_real_escape_string($connect, $data[13]);
            $item15 = mysqli_real_escape_string($connect, $sy);
            $item16 = mysqli_real_escape_string($connect, "enrolled.");
  
            $query = "INSERT into tbl_student (Student_id, FullName, B_date, 	B_place, Sex, Religion, Citizenship, Home_add, 	Home_No, 	Civil_Status, Semester, YearLevel, Major, Course, SY, Status,Password) 
            values('$item1','$item2','$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11','$item12','$item13','$item14','$item15','$item16','$item3')";
           set_time_limit(500);
            mysqli_query($connect, $query);             
  
            $statement5 =$conn->prepare("SELECT * from tbl_student WHERE 	Student_id like :ids");
            $statement5->bindValue(':ids', $item1);
            $statement5->execute();
            while($resident=$statement5->fetch()){
              $namesss=$resident['Student_id'];
            
              $stats="ENROLLED";
              $statement3 = $conn ->prepare("UPDATE tbl_student SET B_date=:bdate,	Civil_Status=:CS,	Semester=:Sem,YearLevel=:Level,Major=:major,	Course=:Course,	SY=:SY , Status = :stats WHERE Student_id = :id ");

              $statement3->bindValue(':bdate', $item3);
              $statement3->bindValue(':CS', $item10);
              $statement3->bindValue(':Sem', $item11);
              $statement3->bindValue(':Level', $item12);
              $statement3->bindValue(':major', $item13);
              $statement3->bindValue(':Course', $item14);
              $statement3->bindValue(':SY', $item15);
              $statement3->bindValue(':stats', $stats);
              $statement3->bindValue(':id', $namesss);
              $result1 = $statement3 ->execute(); 
            }
  }
  
  $_SESSION['success'] = 'File uploaded successfuly';
       ?>
      <script>
        window.location="manage-students.php?success=success";
      </script>
    <?php
  
  
  } else {
	$_SESSION['error'] = 'File is invalid';
	     ?>
      <script>
        window.location="manage-students.php?error=invalid";
      </script>
    <?php
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
     ?>
      <script>
        window.location="manage-tuitions.php?error=Nofile";
      </script>
    <?php
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
     ?>
      <script>
        window.location="manage-tuitions.php?error=success";
      </script>
    <?php
  
  
  } else {
  $_SESSION['error'] = 'File is invalid';


    ?>
      <script>
        window.location="manage-tuitions.php?error=invalid";
      </script>
    <?php

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

    $_SESSION['success'] = 'RESET successfuly';


    ?>
      <script>
        window.location="manage-students.php?success=Reset";
      </script>
    <?php
  }
// $conn->query("UPDATE `tbl_tuition` SET `Balance`= '$balance',`Remarks`= '$remarks'  WHERE ID = '$ID'");


} 

// update Remarks

include 'include/connect.php';
if(isset($_POST['Remark'])){
$id=$_POST['remark_id'];
$balance = $_POST['balance'];
$remarks =$_POST['remarks'];

$remark=$conn->prepare("UPDATE tbl_tuition SET Balance=:balance, Remarks=:remark WHERE ID =:id");
$remark->bindValue(':balance',$balance);
$remark->bindValue(':remark',$remarks);
$remark->bindValue(':id',$id);
$remark->execute();
$_SESSION['success'] = 'Updated successfuly';


?>
<script>
  window.location="manage-tuitions.php?success=Reset";
  // header("Refresh:0; url=manage-tuitions.php");
</script>
<?php
}

?>
