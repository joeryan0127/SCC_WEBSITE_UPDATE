
<!--add Modal -->
<div class="modal fade" id="accadYear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Year</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="forms-sample" method="post" action="add-acadyear.php">
        <div class="form-group">
          <label for="exampleInputName1">Academic Year</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="Academic year" required name="acaddyear">
        </div>

        <button type="submit" class="btn btn-primary mr-2" name="addAcadYear">Submit</button>
        <button class="btn btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- <?php
if (!$bool) {
?> -->
<!-- EDIT YEAR -->
<div class="modal fade" id="editAcad<?php echo $acad_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Academic Year</h5>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
      <form class="forms-sample" method="post" action="add-acadyear.php">
        <input type="hidden" name="acad_id" value="<?php echo $acad_id ?>">
        <div class="form-group">
          <label for="exampleInputName1">Academic Year</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" required name="academic" value="<?php echo $rowData['acad_year']; ?>">
        </div>
        <button type="submit" class="btn btn-primary mr-2" name="editacademic">Update</button>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- DELETE YEAR -->
<div class="modal fade" id="deleteAcad<?php echo $acad_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Academic Year</h5>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
      <form class="forms-sample" method="post" action="add-acadyear.php">
        <input type="hidden" name="acad_id" value="<?php echo $acad_id ?>">

        <button type="submit" class="btn btn-primary mr-2" name="deleteacademic">Confirm</button>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- <?php
}
?> -->