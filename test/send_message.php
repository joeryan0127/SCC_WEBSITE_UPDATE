<?php
session_start();
  include 'Student/includes/conn.php';
  if (isset($_POST['send_mail'])) {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $time = date("m"); 
    $conn->query("INSERT INTO `tbl_messages`(`msg_fullname`, `msg_email`, `msg_mjrconcern`, `msg_messages`, `msg_time`) VALUES ('$name','$email','$subject','$message','$time')  ");

    $_SESSION['success'] = 'Successfully send';
    header('location: index.php#form');
    exit();  
    }
  ?>

  
 <!--    <script>
        
   toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  } 
  Command: toastr["success"]("Successfuly") 

    </script> -->
  