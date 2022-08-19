<!--add Modal -->
<div class="modal fade" id="accounting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Accounting User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="forms-sample" method="post" action="accounting-accounts.php">
        <div class="form-group">
          <label for="exampleInputName1">Name</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" required name="fname">
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Lastname</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="Lastname" required name="flastname">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail3">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" required name="email">
        </div>
          <div class="form-group">
          <label for="exampleInputPassword4">Username</label>
          <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Password" required name="username">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword4">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" required name="password">
        </div>

        <button type="submit" class="btn btn-primary mr-2" name="addAccounting">Submit</button>
        <button class="btn btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
        </form>

      </div>
    </div>
  </div>
</div>
<!-- EDIT ACCOUNT -->
<div class="modal fade" id="editAccounting<?php echo $ac_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Accounting User</h5>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
      <form class="forms-sample" method="post" action="accounting-accounts.php">
        <input type="hidden" name="ac_id" value="<?php echo $ac_id ?>">
        <div class="form-group">
          <label for="exampleInputName1">Name</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" required name="fname" value="<?php echo $rowData['ac_firstname']; ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Lastname</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" required name="flastname" value="<?php echo $rowData['ac_lastname']; ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail3">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" required name="email" value="<?php echo $rowData['ac_email']; ?>">
        </div>
        <button type="submit" class="btn btn-primary mr-2" name="editAccounting">Update</button>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- DELETE ACCOUNT -->
<div class="modal fade" id="deleteAccounting<?php echo $ac_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
      <form class="forms-sample" method="post" action="accounting-accounts.php">
        <input type="hidden" name="ac_id" value="<?php echo $ac_id ?>">

        <button type="submit" class="btn btn-primary mr-2" name="deleteAccounting">Confirm</button>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- CHANGE PASS ACCOUNT -->
<div class="modal fade" id="changePassAccounting<?php echo $ac_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Pass</h5>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
          <form action="accounting-accounts.php" method = "post" enctype = "multipart/form-data">
             <input type="hidden" name="ac_id" value="<?php echo $ac_id ?>">
            <div class="form-group">
                <label>Current Password</label><br>
                <input class="form-control" type="password" name="currentpass" placeholder="Enter current password">
            </div>

            <div class="form-group">
                <label>New Password</label>
                <input class="form-control" type="password" name="newpass" placeholder="Enter new password" id="psw" class="demoInputBox" onKeyUp="checkPasswordStrength();">
                <div id="password-strength-status"></div>
            </div>
                <script>
                    function checkPasswordStrength() {
                        var number = /([0-9])/;
                        var alphabets = /([a-zA-Z])/;
                        var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
                        if ($('#psw').val().length < 8) {
                            $('#password-strength-status').removeClass();
                            $('#password-strength-status').addClass('weak-password');
                            $('#password-strength-status').html("Weak (should be atleast 8 characters.)");
                            $('#password-strength-status').css("color", "red");
                        } else {
                            if ($('#psw').val().match(number) && $('#psw').val().match(alphabets) && $('#psw').val().match(special_characters)) {
                                $('#password-strength-status').removeClass();
                                $('#password-strength-status').addClass('strong-password');
                                $('#password-strength-status').html("Password is Strong");
                                $('#password-strength-status').css("color", "green");
                            } else {
                                $('#password-strength-status').removeClass();
                                $('#password-strength-status').addClass('medium-password');
                                $('#password-strength-status').html("Medium (should include alphabets, numbers and special characters.)");
                                $('#password-strength-status').css("color", "blue");
                            }
                        }
                    }
                </script>
            <div class="form-group">
                <label>Confirm Password</label>
                <input class="form-control" type="password" name="newpass1" placeholder="Confirm password" id="psw1" onKeyUp="matchPassword();">
                <div id="newpasswordId"></div>
            </div>
            <script type="text/javascript">
              function matchPassword(){
                if($("#psw").val()!== ($("#psw1").val())){
                    $('#newpasswordId').html('<font color="red">Your password does not match</font>');
                    $("#psw1").focus();

                    return false;
                }else{
                    $('#newpasswordId').html('<font color="green">Your password match</font>');              

                    return false;
                }
              }

            </script>
            <div class="form-group">
                <input type="checkbox" onclick="myFunction()"><label>Show Password</label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary mr-2" name="changpassAccounting">Confirm</button> 
            </div>  
          <script type="text/javascript">
          function myFunction() {
            var x = document.getElementById("psw");
            if (x.type === "password") {
              x.type = "text";
            } else {
              x.type = "password";
            }
            }
        </script>
        </form>  
      </div>

    </div>
  </div>
</div>
