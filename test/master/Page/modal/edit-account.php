
<!--add Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="forms-sample" method="post" action="edits-account.php">
        <div class="form-group">
          <label for="exampleInputName1">Status</label>
          <select class="form-control" name="status">
            <option >Select Status</option>
            <option>Admin</option>
            <option>SCO</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Name</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" required name="fname">
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Lastname</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" required name="flastname">
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

        <button type="submit" class="btn btn-primary mr-2" name="addAccount">Submit</button>
        <button class="btn btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
        </form>

      </div>
    </div>
  </div>
</div>
<!-- <?php
if (!$bool) {
?> -->
<!-- EDIT ACCOUNT -->
<div class="modal fade" id="editAccount<?php echo $a_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
      <form class="forms-sample" method="post" action="edits-account.php">
        <input type="hidden" name="a_id" value="<?php echo $a_id ?>">
        <div class="form-group">
          <label for="exampleInputName1">Name</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" required name="fname" value="<?php echo $rowData['a_firstname']; ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Lastname</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" required name="flastname" value="<?php echo $rowData['a_lastname']; ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail3">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" required name="email" value="<?php echo $rowData['a_email']; ?>">
        </div>
        <button type="submit" class="btn btn-primary mr-2" name="edit">Update</button>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- edit profile -->
<div class="modal fade" id="editProfile<?php echo $a_id;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
      <form  method="post" action="edits-account.php" enctype="multipart/form-data"  >
        <input type="hidden" name="a_id">
      <div class="form-group">
          <label for="exampleInputName1">Firsname</label>
          <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $rowData['a_firstname'] ;?>" placeholder="" required name="profileName" >
        </div>

        <div class="form-group">
          <label for="exampleInputName1">Lastname</label>
          <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $rowData['a_lastname'] ;?>" placeholder="" required name="profileLastname" >
        </div>

       <div class="form-group">
          <label for="exampleInputName1">Email</label>
          <input type="text" class="form-control" id="exampleInputName1" value="<?php echo$rowData['a_email'] ;?>" placeholder="" required name="profileEmail" >
        </div>

        <button type="submit" class="btn btn-primary mr-2" name="updateProfile">Update</button>
      <button type="button" class="btn btn-inverse-success btn-fw" data-bs-toggle="modal" data-bs-target="#changepass">Changepass</button>
                  
        </form>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="changepass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Changepass</h5>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
      <form  method="post" action="edits-account.php" enctype="multipart/form-data"  >
        <input type="hidden" name="a_id" value="<?php echo $a_id; ?>">
<div class="form-group">
                <label>Current Password</label><br>
                <input class="form-control" type="password" name="currentPass" placeholder="Enter current password">
            </div>

            <div class="form-group">
                <label>New Password</label>
                <input class="form-control" type="password" name="newPass" placeholder="Enter new password" id="psw" class="demoInputBox" onKeyUp="checkPasswordStrength();">
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
                <input class="form-control" type="password" name="retypePass" placeholder="Confirm password" id="psw1" onKeyUp="matchPassword();">
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
                <button type="submit" class="btn btn-primary mr-2" name="profileChangepass">Confirm</button> 
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

<!-- DELETE ACCOUNT -->
<div class="modal fade" id="deleteAccount<?php echo $a_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
      <form class="forms-sample" method="post" action="edits-account.php">
        <input type="hidden" name="a_id" value="<?php echo $a_id ?>">

        <button type="submit" class="btn btn-primary mr-2" name="delete">Confirm</button>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- CHANGE PASS ACCOUNT -->
<div class="modal fade" id="changePass<?php echo $a_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Pass</h5>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
          <form action="edits-account.php" method = "post" enctype = "multipart/form-data">
             <input type="hidden" name="a_id" value="<?php echo $a_id ?>">
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
                <button type="submit" class="btn btn-primary mr-2" name="changpass">Confirm</button> 
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

<!-- <?php
}
?> -->
<!-- Students entry Upload File -->
<div class="modal fade" id="UploadFile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload File</h5>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
      <form  method="post" action="edits-account.php" enctype="multipart/form-data"  >

        <div class="form-group">
        <label>Academic Year</label>
        <input id="<?php echo$data['acad_id'];?>" name="acad_id" list="encodings" class="form-control" placeholder="Search Academic year">
        <datalist id="encodings">
                  <?php
                  include 'include/dbcon.php';
                    $acadYear = $conn->query("SELECT * FROM `tbl_acadyear`");
                    while ($data = $acadYear->fetch_array()){
                      $acad_id = $data['acad_id'];
                        echo "<option value ='".$data['acad_id']."'>".$data['acad_year']."</option>";
                    }
                  ?>
        </datalist>
        </div>

      <div class="form-group">
          <label for="exampleInputName1">File</label>
          <input type="file" class="form-control" id="exampleInputName1" placeholder="Select File" required name="file" >
        </div>

        <button type="submit" class="btn btn-primary mr-2" name="upload">Confirm</button>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- Tuitions entry -->
<!-- Upload File -->
<div class="modal fade" id="UploadFile1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload</h5>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
      <form  method="post" action="edits-account.php" enctype="multipart/form-data"  >

        <div class="form-group">
        <label>Academic Year</label>
          <select class="form-control" name="acad_id">
          <option selected disabled >Select Semister</option>
          <?php
           include 'include/dbcon.php';
                    $acadYear = $conn->query("SELECT * FROM `tbl_acadyear`");
                    while ($data = $acadYear->fetch_array()){
                      // $acad_id = $data['acad_id'];
                        echo "<option value ='".$data['acad_id']."'>".$data['acad_year']."</option>";
                    }
                  ?>
          </select>
        </div>

        <div class="form-group">
        <label>Period</label>
        <select class="form-control" name="period_id">
            <option selected disabled >Select Period</option>
          <?php
            $partylist = $conn->query("SELECT * FROM tbl_period");
            while ($data = $partylist->fetch_array()) {
              // $sem_id = $data['period_id'];
              echo "<option value='".$data['period_id']."'>".$data['period']."</option>";
            }
          ?>
          </select>

        </div>

        <div class="form-group">
        <label>Semister</label>
        <select class="form-control" name="sem_id">
            <option selected disabled >Select Semister</option>
          <?php
            $partylist = $conn->query("SELECT * FROM tbl_semister");
            while ($data = $partylist->fetch_array()) {
              // $sem_id = $data['sem_id'];
              echo "<option value='".$data['sem_id']."'>".$data['sem_year']."</option>";
            }
          ?>
          </select>

        </div>

      <div class="form-group">
          <label for="exampleInputName1">File</label>
          <input type="file" class="form-control" id="exampleInputName1" placeholder="Select File" required name="file" >
        </div>

        <button type="submit" class="btn btn-primary mr-2" name="uploadTuitions">Confirm</button>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
        </form>
      </div>

    </div>
  </div>
</div>


<!-- RESET PASS MODAL -->

<div class="modal fade" id="edit3_<?php echo $rowData['Student_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Do You Want To Reset Password?</h5>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
      <form class="forms-sample" method="post" action="edits-account.php">
        <input type="hidden" name="reset_id" value="<?php echo $rowData['Student_id']; ?>">

        <button type="submit" class="btn btn-primary mr-2" name="RESET">Confirm</button>
        <button type="button" class="btn-close btn-dark" data-dismiss="modal" aria-label="Close">Cancel</button>
        </form>
      </div>

    </div>
  </div>
</div>