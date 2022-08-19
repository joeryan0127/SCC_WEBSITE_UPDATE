<?php 
include 'include/dbcon.php';
if(!isset($_GET['id'])){
   echo "<script> window.location='manage-schedule.php?error=NoIdIdentified'</script>";
    $conn->close();
    exit;
}

$delete = $conn->query("DELETE FROM `schedule_list` where id = '{$_GET['id']}'");
if($delete){
    echo "<script> window.location='manage-schedule.php?error=success'</script>";
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$conn->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$conn->close();

?>