

<?php
  if(!$bool){
?>
<!-- Edit news and updates sco -->
<div class="modal fade" id="editNewsupdates<?php echo $rowEvents['evnts_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
      <form  method="post" action="addeditdelete_sconews.php" enctype="multipart/form-data"  >
        <input type="hidden" name="evnts_id" value="<?php echo $rowEvents['evnts_id']; ?>">

        <div class="form-group">
        <label>Year</label>
        <input id="<?php echo$data['acad_id'];?>" name="acad_id" list="encodings" class="form-control" placeholder="Search Academic year" value="<?php echo $rowEvents['evnts_year'];?>">
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
          <label for="exampleInputName1">News Title</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="News title" required name="news_title" value="<?php echo $rowEvents['evnts_news'];?>" >
        </div>

        <div class="form-group">
          <label for="exampleInputName1">News Date</label>
          <input type="date" class="form-control" id="exampleInputName1" placeholder="News title" required name="news_date" value="<?php echo strftime('%Y-%m-%d',
  strtotime($rowEvents['evnts_date'])); ?>" >
        </div>

        <div class="form-group">
          <label for="exampleInputName1">Description</label>
          <textarea class="form-control" name="news_description" value="<?php echo $rowEvents['evnts_description'];?>"placeholder="Write description ....."><?php echo $rowEvents['evnts_description'];?></textarea>
        </div>

      <div class="form-group">
          <label for="exampleInputName1">Photo</label>
          <input type="file" class="form-control" id="exampleInputName1" placeholder="Select File" required name="filename">
        </div>

        <button type="submit" class="btn btn-primary mr-2" name="update_newsevnts">Update</button>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- DELETE news and updates sco -->
<div class="modal fade" id="deleteNewsupdates<?php echo $rowEvents['evnts_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
      	<div class="form-group">      		
      	Do you want to remove this event?
      	</div>
      <form class="forms-sample" method="post" action="addeditdelete_sconews.php">
        <input type="hidden" name="evnts_id" value="<?php echo $rowEvents['evnts_id']; ?>">

        <button type="submit" class="btn btn-primary mr-2" name="delete">Confirm</button>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
        </form>
      </div>

    </div>
  </div>
</div>
<?php
}
?>