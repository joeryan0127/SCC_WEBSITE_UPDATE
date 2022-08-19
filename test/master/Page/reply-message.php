
<?php
include 'include/sessions.php';

//reply message
if (isset($_POST['reply-all'])) {
    $message_all = $_POST['message_all'];
    $queries = $conn->query("SELECT * FROM tbl_messages");
    while ($rows = $queries->fetch_array()) {
        $email = $rows['msg_email'];
        $name = $rows['msg_fullname'];
    }

    require 'sendmail/PHPMailer/PHPMailerAutoload.php';
    require 'sendmail/constants.php';
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth =true;
    $mail->SMTPSecure='tls';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet='UTF-8';
    $mail->Username='studentcouncilorganiz@gmail.com';
    $mail->Password='sco12345678';
    $mail->SetFrom('studentcouncilorganiz@gmail.com', 'Saint. Cecilias College');
    $mail->AddAddress($email);
    $mail->addReplyTo('no-reply@gmail.com', 'No-reply');
    $mail->addCC($email);
    $mail->addBCC($email);  
    $mail->Subject = 'Saint. Cecilias College';
    $mail->Body="<div style='width:100%; max-width: auto; background-color: #f6f6f7; padding:2px; margin: auto;'>
                            <div style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);border-radius: 5px;font-family:tahoma;'>
                                    
                                    <div style='background-color: #2ECC71;margin: 0;padding: 0.5em;'>
                                        <div align-content='center'>
                                            <h2 style='font-weight:bold; color:white; font-size: 24px;' align='center'> St. Cecilia's College Cebu-Inc. </h2>
                                            <h3 style='color:white; font-size: 14px;' align='center'> Saint. Cecilias College </h3>
                                        </div>
                                    </div>

                                    <div style='padding:1.5em;  padding-bottom: 0;'>
                                        <h3 style= 'padding:10px; font-size:20px'> Announcements: </h3>
                                        <p style= 'padding:10px; font-size:18px' align='justified'>$message_all</p>
                                    </div>

                                    <div style='background-color: #dae0db;'>
                                        <p style= 'font-size: 14px; padding:10px' align='left'>Notice From: <strong>Saint. Cecilias College</strong><br>                                       
                                        Location: Poblacion Ward II Minglanilla, Cebu.<br>
                                        Phone: </strong>490-0767 / 268-4776 (Register's Office)<br>
                                        Email: </strong>info.cecilian@gmail.com<br>
                                        Facebook: <a href='https://www.facebook.com/St.CeciliasCollege/'>Facebook/scc</a>
                                        </p>
                                    </div>
                             </div>
                        </div>";

    if (!$mail->send()){
        $_SESSION['error'] = 'Message not sent';
        ?>
        <script>
            window.location="manage-msg-inbox.php?error=NoInternet";
        </script>
        <?php
    } else {
        $_SESSION['success'] = 'Message successfuly send';
                ?>
        <script>
            window.location="manage-msg-inbox.php?error=successfulysent";
        </script>
        <?php

    }


}

// Reply Respondents 
if (isset($_POST['reply-respondents'])) {
    $email_id = $_POST['msg_id'];
    $message_response = $_POST['message_response'];
    var_dump($message_response);
    $queries = $conn->query("SELECT * FROM tbl_messages WHERE msg_id = '$email_id'");
    while ($rows = $queries->fetch_array()) {
        $email1 = $rows['msg_email'];
        $name1 = $rows['msg_fullname'];
    }

    require 'sendmail/PHPMailer/PHPMailerAutoload.php';
    require 'sendmail/constants.php';
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth =true;
    $mail->SMTPSecure='tls';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet='UTF-8';
    $mail->Username='studentcouncilorganiz@gmail.com';
    $mail->Password='sco12345678';
    $mail->SetFrom('studentcouncilorganiz@gmail.com', 'Saint. Cecilias College');
    $mail->AddAddress($email1);
    $mail->addReplyTo('no-reply@gmail.com', 'No-reply');
    $mail->addCC($email1);
    $mail->addBCC($email1);  
    $mail->Subject = 'Saint. Cecilias College';
    $mail->Body="<div style='width:100%; max-width: auto; background-color: #f6f6f7; padding:2px; margin: auto;'>
                            <div style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);border-radius: 5px;font-family:tahoma;'>
                                    
                                    <div style='background-color: #2ECC71;margin: 0;padding: 0.5em;'>
                                        <div align-content='center'>
                                            <h2 style='font-weight:bold; color:white; font-size: 24px;' align='center'> St. Cecilia's College Cebu-Inc. </h2>
                                            <h3 style='color:white; font-size: 14px;' align='center'> Saint. Cecilias College </h3>
                                        </div>
                                    </div>

                                    <div style='padding:1.5em; padding-bottom: 0;'>
                                        <h3 style= 'padding:18px; font-size:20px'> Announcements:</h3>
                                        <p style= 'padding:10px; font-size:18px' align='justified'>$message_response</p>
                                    </div>
                                    <div style='background-color: #dae0db;'>
                                        <p style= 'font-size: 14px; padding:10px' align='left'>Notice From: <strong>Saint. Cecilias College</strong><br>                                       
                                        Location: Poblacion Ward II Minglanilla, Cebu.<br>
                                        Phone: </strong>490-0767 / 268-4776 (Register's Office)<br>
                                        Email: </strong>info.cecilian@gmail.com<br>
                                        Facebook: <a href='https://www.facebook.com/St.CeciliasCollege/'>Facebook/scc</a>
                                        </p>
                                    </div>
                             </div>
                        </div>";

    if (!$mail->send()){
        $_SESSION['error'] = 'Message not sent';
        ?>
        <script>
            window.location="manage-msg-inbox.php?error=NoInternet";
        </script>
        <?php
    } else {
        $_SESSION['success'] = 'Message successfuly send';
        ?>
        <script>
            window.location="manage-msg-inbox.php?error=successfulysent";
        </script>
        <?php

    }
}

//delete message
if (isset($_POST['remove_message'])) {
  $msg_id = $_POST['msg_id'];
  $conn->query("DELETE FROM tbl_messages WHERE msg_id = '$msg_id'");
  $_SESSION['success'] = 'Message successfuly remove';
        ?>
        <script>
            window.location="manage-msg-inbox.php";
        </script>
        <?php
}
?>
