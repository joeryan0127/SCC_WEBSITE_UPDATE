<div class="modal fade" id="portfolioModal1<?php echo $q['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
   
      <div class="modal-header">
        <h5 class="modal-title" ><?php echo $q['post_title']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="<?php echo '../master/images/'.$q['post_photo'];?>" style="width:80%">
                                <p class="mb-4"><strong><i>Date Posted:<br><?php echo $q['post_date'];?></i></strong></p>
                                <p class="mb-4"> Description</p>
                                <p class="mb-4"> <?php echo $q['post_description']; ?></p>
      </div>
   
    </div>
  </div>
</div>