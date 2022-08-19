
<?php
session_start();
include 'header.php';
?>

<section>
    <div class="d-inline-block w-100">
        <div class="text-center w-100 pb-4">
            <a href="../index.php">
                <img class="text-center" src="../assets/img/scc-logo.webp" width="100" height="100">
            </a>
        </div>
        <div class="row">
            <main>
                <div class="auth-form">
                    <div class="text-center">
                        <p class="fs-4 fw-light">Change Password</p>
                    </div>
                    <div class="auth-form-body border border-top rounded-3">
                        <form action="changepass-student.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="idStudent" value="<?php echo $_GET['id']; ?>">
                            <label for="student-id" class="d-block mb-2">Old password</label>
                            <input type="password" name="oldpass" id="oldpass" class="form-control d-block w-100 mb-3" required>
                            <div class="position-relative">
                                <label for="password" class="d-block mb-2">Enter new password</label>
                                <input type="password" name="newpass" id="psw" class="demoInputBox form-control mb-4" onKeyUp="checkPasswordStrength();" required>
                                <div id="password-strength-status"></div>
                                <script>
                                    function checkPasswordStrength(){
                                        var number = /([0-9])/;
                                        var alphabets = /([a-zA-Z])/;
                                        var bt = document.getElementById('button');
                                        var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
                                        if ($('#psw').val().length < 8) {
                                            $('#password-strength-status').removeClass();
                                            $('#password-strength-status').addClass('weak-password');
                                            $('#password-strength-status').html("(should be atleast 8 characters.)");
                                            $('#password-strength-status').css("color", "red");
                                            $("#button").prop('disabled', false);
                                            return false;

                                        } else {
                                            if ($('#psw').val().match(number) && $('#psw').val().match(alphabets) && $('#psw').val().match(special_characters)) {
                                                $('#password-strength-status').removeClass();
                                                $('#password-strength-status').addClass('strong-password');
                                                $('#password-strength-status').html("Password is Strong");
                                                $('#password-strength-status').css("color", "green");
                                                $("#button").prop('disabled', false);

                                            } else {
                                                $('#password-strength-status').removeClass();
                                                $('#password-strength-status').addClass('medium-password');
                                                $('#password-strength-status').html("Medium (should include alphabets, numbers and special characters.)");
                                                $('#password-strength-status').css("color", "blue");
                                                $("#button").prop('disabled', true);
                                            }
                                        }
                                    }
                                </script>
                                <label for="password" class="d-block mb-2">Confirm password</label>
                                <input type="password" name="confirmpass" id="psw1" class="form-control mb-4" onKeyUp="matchPassword();" required>
                                <div id="newpasswordId"></div>

                                <script type="text/javascript">
                                    function matchPassword(){
                                        if ($("#psw").val() !== ($("#psw1").val())){
                                            $('#newpasswordId').html('<font color="red">Your password does not match</font>');
                                            $("#psw1").focus();

                                            return false;
                                        } else {
                                            $('#newpasswordId').html('<font color="green">Your password match</font>');
                                            return false;
                                        }
                                    }
                                </script>
                                <div class="text-center">
                            <?php
                            if (isset($_SESSION['error'])) {
                                echo "<div style='color:red;'>
                                    <p>" . $_SESSION['error']."</p> 
                                    </div>";
                                    unset($_SESSION['error']);
                                    }
                                    ?>
                                 </div>
                                <input type="submit" name="change-pass" id="button" value="Sign In" class="btn btn-success d-block w-100 fw-bold" style="font-size: 14px;">
                            </div>
                        </form>

                    </div>
                </div>
            </main>
        </div>
    </div>
</section>
