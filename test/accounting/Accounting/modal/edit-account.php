<?php
if(!$bool){
?>
<div class="modal fade" id="editProfile<?php echo $ac_id;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
      <form  method="post" action="edits-account.php" enctype="multipart/form-data"  >
        <input type="hidden" name="ac_id" value="<?php echo $ac_id;?>">
      <div class="form-group">
          <label for="exampleInputName1">Firsname</label>
          <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $rowData['ac_firstname'] ;?>" placeholder="" required name="profileName" >
        </div>

        <div class="form-group">
          <label for="exampleInputName1">Lastname</label>
          <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $rowData['ac_lastname'] ;?>" placeholder="" required name="profileLastname" >
        </div>

       <div class="form-group">
          <label for="exampleInputName1">Email</label>
          <input type="text" class="form-control" id="exampleInputName1" value="<?php echo$rowData['ac_email'] ;?>" placeholder="" required name="profileEmail" >
        </div>

        <button type="submit" class="btn btn-primary mr-2" name="updateProfile">Update</button>
      <button type="button" class="btn btn-inverse-success btn-fw" data-bs-toggle="modal" data-bs-target="#changepass">Changepass</button>
                  
        </form>
      </div>

    </div>
  </div>
</div>

<!-- Remark Modal -->

<div class="modal fade" id="edit3_<?php echo $rowData['ID']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TUITIONS</h5>
        <button type="button" class="btn-close btn-dark" data-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">

      <form  method="post" action="edits-account.php" enctype="multipart/form-data"  >
        <input type="hidden" name="remark_id" value="<?php echo $rowData['ID']; ?>">
      <div class="form-group">
          <label for="exampleInputName1">Full Name</label>
          <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $rowData['FullName'] ;?>" placeholder="" required name="profileName" >
        </div>

        <div class="form-group">
          <label for="exampleInputName1">Period</label>
          <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $rowData['period'] ;?>" placeholder="" required name="" >
        </div>
      

       <div class="form-group">
          <label for="exampleInputName1">Balance</label>
          <input type="text" class="form-control" id="exampleInputName1" value="<?php echo$rowData['Balance'] ;?>" placeholder="" required name="balance" >
        </div>

        <div class="form-group">
          <label for="exampleInputName1">Remarks</label>
          <!-- <input type="text" class="form-control" id="exampleInputName1"  placeholder="" required name="profileEmail" > -->
          
          <select class="custom-select " name="remarks" value="<?php echo$rowData['Remarks'] ;?>">
             <option disable selected value="<?php echo$rowData['Remarks'] ;?>"><?php echo$rowData['Remarks'] ;?></option>
             <option value="Paid">Paid</option>
             <option value="Unpaid">Unpaid</option>
             <option value="Promi">Promi</option>
          </select>
      
        </div>

        <button type="submit" class="btn btn-primary mr-2" name="Remark">Update</button>
      <!-- <button type="button" class="btn btn-inverse-success btn-fw" data-bs-toggle="modal" data-bs-target="#changepass">Changepass</button> -->
                  
        </form>
      </div>

    </div>
  </div>
</div>




<div class="modal fade" id="changepass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
      <form  method="post" action="edits-account.php" enctype="multipart/form-data"  >
        <input type="hidden" name="ac_id" value="<?php echo $ac_id; ?>">
      <div class="form-group">
          <label for="exampleInputName1">Current password</label>
          <input type="password" class="form-control" id="exampleInputName1" placeholder="" required name="currentPass" >
        </div>

        <div class="form-group">
          <label for="exampleInputName1">New Password</label>
          <input type="password" class="form-control" id="exampleInputName1" placeholder="" required name="newPass" >
        </div>

       <div class="form-group">
          <label for="exampleInputName1">Retype Password</label>
          <input type="password" class="form-control" id="exampleInputName1" placeholder="Retype passwrod" required name="retypePass" >
        </div>

        <button type="submit" class="btn btn-primary mr-2" name="profileChangepass">Change</button>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
        </form>
      </div>

    </div>
  </div>
</div>
<?php
}
?>
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

