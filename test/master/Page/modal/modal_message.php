<!--Reply all concern -->
<div class="modal fade" id="messageConcern" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reply</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="forms-sample" method="post" action="reply-message.php">
        <div class="form-group">
          <label for="exampleInputName1">Reply</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="Write message to reply.." required name="message_all">
        </div>

        <button type="submit" class="btn btn-primary mr-2" name="reply-all">Submit</button>
        <button class="btn btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
        </form>

      </div>
    </div>
  </div>
</div>
<!--Reply Respondents -->
<div class="modal fade" id="messageReply<?php echo $msg_id;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reply to <?php echo $rowData['msg_fullname'];?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="forms-sample" method="post" action="reply-message.php">
         <input type="hidden" name="msg_id" value="<?php echo $msg_id ?>">
        <div class="form-group">
          <label for="exampleInputName1">Reply</label>
          <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $rowData['msg_messages'];?>" required >
        </div>

        <div class="form-group">
          <label for="exampleInputName1">Reply</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="Write to reply message.." required name="message_response">
        </div>

        <button type="submit" class="btn btn-primary mr-2" name="reply-respondents">Submit</button>
        <button class="btn btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
        </form>

      </div>
    </div>
  </div>
</div>

<!-- DELETE respondents -->
<div class="modal fade" id="removeMsg<?php echo $msg_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Message</h5>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
      <form class="forms-sample" method="post" action="reply-message.php">
        <input type="hidden" name="msg_id" value="<?php echo $msg_id ?>">        
          <div class="form-group">          
            Do you want to remove this Message?
          </div>  

        <button type="submit" class="btn btn-primary mr-2" name="remove_message">Confirm</button>
        <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>