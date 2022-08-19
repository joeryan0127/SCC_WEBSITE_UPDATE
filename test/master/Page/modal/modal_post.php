<!-- ADD POST -->
<div class="modal fade" id="addPost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add Post</h5>
				<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form class="row g-3 needs-validation" novalidate method="post" action="addpost_bsit.php" enctype="multipart/form-data">
					<div class="col-6">
						<label for="image" class="form-label">Image</label>
						<div class="input-group has-validation">
							<input type="file" name="image" class="form-control" id="image" required>
							<div class="invalid-feedback">Please enter image.</div>
						</div>
					</div>
					<div class="col-12" style="margin-top: 10px;">
						<label for="subjectDept" class="form-label">Title</label>
						<div class="input-group has-validation">
							<input type="text" name="subjectDept" class="form-control" id="subjectDept" required>
							<div class="invalid-feedback">Please enter title</div>
						</div>
					</div>

					<div class="col-12" style="margin-top: 10px;">
						<label for="description" class="form-label">Description</label>
						<textarea style="height: 6em;" class="form-control" id="description" name="description" required></textarea>
						<div class="invalid-feedback">Please enter content</div>
					</div>

					<div class="col-12">
						<input type="hidden" name="department" value="bsit" class="form-control">
					</div>

					<div class="col-12" style="margin-top: 20px;">
						<button type="button" class="btn btn-outline-danger btn-fw" data-dismiss="modal">Close</button>
						<button class="btn btn-outline-success btn-fw" type="submit" name="addpost_bsit">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<!-- EDIT POST -->
<div class="modal fade" id="edit<?php echo $a_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit</h5>
				<button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
			</div>
			<div class="modal-body">
				<form class="row g-3 needs-validation" method="POST" action="editpost_bsit.php" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $a_id ?>">
					<div class="col-6">
						<label for="image" class="form-label">Image</label>
						<div class="input-group has-validation">
							<input type="file" name="photo" class="form-control" id="photo">
							<div class="invalid-feedback">Please enter image.</div>
						</div>
					</div>
					<div class="col-12" style="margin-top: 10px;">
						<label for="subjectDept" class="form-label">Title</label>
						<div class="input-group has-validation">
							<input type="text" name="subjectDept" class="form-control" id="subjectDept" required value="<?php echo $rowData['post_title']; ?>">
						</div>
					</div>

					<div class="col-12" style="margin-top: 10px;">
						<label for="description" class="form-label">Description</label>
						<textarea style="height: 6em;" class="form-control" id="description" name="description" required><?php echo $rowData['post_description']; ?></textarea>
					</div>

					<div class="col-12">
						<input type="hidden" name="department" value="bsit" class="form-control">
					</div>

					<div class="col-12" style="margin-top: 20px;">
						<button class="btn btn-outline-success btn-fw" type="edit" name="edit">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- DELETE-->
<div class="modal fade" id="delete<?php echo $a_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
				<button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
			</div>
			<div class="modal-body">
				<form class="forms-sample" method="post" action="deletepost_bsit.php">
					<input type="hidden" name="id" value="<?php echo $a_id ?>">
					<div class="col-12" style="margin-top: 10px;">
						<label for="subjectDept" class="form-label">Title</label>
						<div class="input-group has-validation">
							<input type="text" name="subjectDept" class="form-control" id="subjectDept" required value="<?php echo $rowData['post_title']; ?>">
						</div>
					</div>
					<div class="col-12" style="margin-top: 20px;">
						<button type="submit" class="btn btn-primary mr-2" name="delete">Confirm</button>
						<button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>


<!-- ADD POST BSHM -->

<div class="modal fade" id="addPostbshm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add Post</h5>
				<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form class="row g-3 needs-validation" novalidate method="post" action="addpost_bsit.php" enctype="multipart/form-data">
					<div class="col-6">
						<label for="image" class="form-label">Image</label>
						<div class="input-group has-validation">
							<input type="file" name="image" class="form-control" id="image" required>
							<div class="invalid-feedback">Please enter image.</div>
						</div>
					</div>
					<div class="col-12" style="margin-top: 10px;">
						<label for="subjectDept" class="form-label">Title</label>
						<div class="input-group has-validation">
							<input type="text" name="subjectDept" class="form-control" id="subjectDept" required>
							<div class="invalid-feedback">Please enter title</div>
						</div>
					</div>

					<div class="col-12" style="margin-top: 10px;">
						<label for="description" class="form-label">Description</label>
						<textarea style="height: 6em;" class="form-control" id="description" name="description" required></textarea>
						<div class="invalid-feedback">Please enter content</div>
					</div>

					<div class="col-12">
						<input type="hidden" name="department" value="bshm" class="form-control">
					</div>

					<div class="col-12" style="margin-top: 20px;">
						<button type="button" class="btn btn-outline-danger btn-fw" data-dismiss="modal">Close</button>
						<button class="btn btn-outline-success btn-fw" type="submit" name="addpost_bshm">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- EDIT POST BSHM -->
<div class="modal fade" id="editbshm<?php echo $a_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit</h5>
				<button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
			</div>
			<div class="modal-body">
				<form class="row g-3 needs-validation" method="POST" action="editpost_bsit.php" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $a_id ?>">
					<div class="col-6">
						<label for="image" class="form-label">Image</label>
						<div class="input-group has-validation">
							<input type="file" name="photo" class="form-control" id="photo">
							<div class="invalid-feedback">Please enter image.</div>
						</div>
					</div>
					<div class="col-12" style="margin-top: 10px;">
						<label for="subjectDept" class="form-label">Title</label>
						<div class="input-group has-validation">
							<input type="text" name="subjectDept" class="form-control" id="subjectDept" required value="<?php echo $rowData['post_title']; ?>">
						</div>
					</div>

					<div class="col-12" style="margin-top: 10px;">
						<label for="description" class="form-label">Description</label>
						<textarea style="height: 6em;" class="form-control" id="description" name="description" required><?php echo $rowData['post_description']; ?></textarea>
					</div>

					<div class="col-12">
						<input type="hidden" name="department" value="bshm" class="form-control">
					</div>

					<div class="col-12" style="margin-top: 20px;">
						<button class="btn btn-outline-success btn-fw" type="edit" name="editbshm">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- DELETE BSHM-->
<div class="modal fade" id="deletebshm<?php echo $a_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
				<button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
			</div>
			<div class="modal-body">
				<form class="forms-sample" method="post" action="deletepost_bsit.php">
					<input type="hidden" name="id" value="<?php echo $a_id ?>">
					<div class="col-12" style="margin-top: 10px;">
						<label for="subjectDept" class="form-label">Title</label>
						<div class="input-group has-validation">
							<input type="text" name="subjectDept" class="form-control" id="subjectDept" required value="<?php echo $rowData['post_title']; ?>">
						</div>
					</div>
					<div class="col-12" style="margin-top: 20px;">
						<button type="submit" class="btn btn-primary mr-2" name="deletebshm">Confirm</button>
						<button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>


<!-- ADD POST BEED -->

<div class="modal fade" id="addPostbeed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add Post</h5>
				<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form class="row g-3 needs-validation" novalidate method="post" action="addpost_bsit.php" enctype="multipart/form-data">
					<div class="col-6">
						<label for="image" class="form-label">Image</label>
						<div class="input-group has-validation">
							<input type="file" name="image" class="form-control" id="image" required>
							<div class="invalid-feedback">Please enter image.</div>
						</div>
					</div>
					<div class="col-12" style="margin-top: 10px;">
						<label for="subjectDept" class="form-label">Title</label>
						<div class="input-group has-validation">
							<input type="text" name="subjectDept" class="form-control" id="subjectDept" required>
							<div class="invalid-feedback">Please enter title</div>
						</div>
					</div>

					<div class="col-12" style="margin-top: 10px;">
						<label for="description" class="form-label">Description</label>
						<textarea style="height: 6em;" class="form-control" id="description" name="description" required></textarea>
						<div class="invalid-feedback">Please enter content</div>
					</div>

					<div class="col-12">
						<input type="hidden" name="department" value="beed" class="form-control">
					</div>

					<div class="col-12" style="margin-top: 20px;">
						<button type="button" class="btn btn-outline-danger btn-fw" data-dismiss="modal">Close</button>
						<button class="btn btn-outline-success btn-fw" type="submit" name="addpost_beed">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- EDIT POST BEED -->
<div class="modal fade" id="editbeed<?php echo $a_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit</h5>
				<button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
			</div>
			<div class="modal-body">
				<form class="row g-3 needs-validation" method="POST" action="editpost_bsit.php" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $a_id ?>">
					<div class="col-6">
						<label for="image" class="form-label">Image</label>
						<div class="input-group has-validation">
							<input type="file" name="photo" class="form-control" id="photo">
							<div class="invalid-feedback">Please enter image.</div>
						</div>
					</div>
					<div class="col-12" style="margin-top: 10px;">
						<label for="subjectDept" class="form-label">Title</label>
						<div class="input-group has-validation">
							<input type="text" name="subjectDept" class="form-control" id="subjectDept" required value="<?php echo $rowData['post_title']; ?>">
						</div>
					</div>

					<div class="col-12" style="margin-top: 10px;">
						<label for="description" class="form-label">Description</label>
						<textarea style="height: 6em;" class="form-control" id="description" name="description" required><?php echo $rowData['post_description']; ?></textarea>
					</div>

					<div class="col-12">
						<input type="hidden" name="department" value="beed" class="form-control">
					</div>

					<div class="col-12" style="margin-top: 20px;">
						<button class="btn btn-outline-success btn-fw" type="edit" name="editbeed">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- DELETE BEED-->
<div class="modal fade" id="deletebeed<?php echo $a_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
				<button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
			</div>
			<div class="modal-body">
				<form class="forms-sample" method="post" action="deletepost_bsit.php">
					<input type="hidden" name="id" value="<?php echo $a_id ?>">
					<div class="col-12" style="margin-top: 10px;">
						<label for="subjectDept" class="form-label">Title</label>
						<div class="input-group has-validation">
							<input type="text" name="subjectDept" class="form-control" id="subjectDept" required value="<?php echo $rowData['post_title']; ?>">
						</div>
					</div>
					<div class="col-12" style="margin-top: 20px;">
						<button type="submit" class="btn btn-primary mr-2" name="deletebeed">Confirm</button>
						<button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>

<!-- ADD POST BSBA -->

<div class="modal fade" id="addPostbsba" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add Post</h5>
				<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form class="row g-3 needs-validation" novalidate method="post" action="addpost_bsit.php" enctype="multipart/form-data">
					<div class="col-6">
						<label for="image" class="form-label">Image</label>
						<div class="input-group has-validation">
							<input type="file" name="image" class="form-control" id="image" required>
							<div class="invalid-feedback">Please enter image.</div>
						</div>
					</div>
					<div class="col-12" style="margin-top: 10px;">
						<label for="subjectDept" class="form-label">Title</label>
						<div class="input-group has-validation">
							<input type="text" name="subjectDept" class="form-control" id="subjectDept" required>
							<div class="invalid-feedback">Please enter title</div>
						</div>
					</div>

					<div class="col-12" style="margin-top: 10px;">
						<label for="description" class="form-label">Description</label>
						<textarea style="height: 6em;" class="form-control" id="description" name="description" required></textarea>
						<div class="invalid-feedback">Please enter content</div>
					</div>

					<div class="col-12">
						<input type="hidden" name="department" value="bsba" class="form-control">
					</div>

					<div class="col-12" style="margin-top: 20px;">
						<button type="button" class="btn btn-outline-danger btn-fw" data-dismiss="modal">Close</button>
						<button class="btn btn-outline-success btn-fw" type="submit" name="addpost_bsba">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- EDIT POST BSBA -->
<div class="modal fade" id="editbsba<?php echo $a_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit</h5>
				<button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
			</div>
			<div class="modal-body">
				<form class="row g-3 needs-validation" method="POST" action="editpost_bsit.php" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $a_id ?>">
					<div class="col-6">
						<label for="image" class="form-label">Image</label>
						<div class="input-group has-validation">
							<input type="file" name="photo" class="form-control" id="photo">
							<div class="invalid-feedback">Please enter image.</div>
						</div>
					</div>
					<div class="col-12" style="margin-top: 10px;">
						<label for="subjectDept" class="form-label">Title</label>
						<div class="input-group has-validation">
							<input type="text" name="subjectDept" class="form-control" id="subjectDept" required value="<?php echo $rowData['post_title']; ?>">
						</div>
					</div>

					<div class="col-12" style="margin-top: 10px;">
						<label for="description" class="form-label">Description</label>
						<textarea style="height: 6em;" class="form-control" id="description" name="description" required><?php echo $rowData['post_description']; ?></textarea>
					</div>

					<div class="col-12">
						<input type="hidden" name="department" value="bsba" class="form-control">
					</div>

					<div class="col-12" style="margin-top: 20px;">
						<button class="btn btn-outline-success btn-fw" type="edit" name="editbsba">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- DELETE BSBA-->
<div class="modal fade" id="deletebsba<?php echo $a_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
				<button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
			</div>
			<div class="modal-body">
				<form class="forms-sample" method="post" action="deletepost_bsit.php">
					<input type="hidden" name="id" value="<?php echo $a_id ?>">
					<div class="col-12" style="margin-top: 10px;">
						<label for="subjectDept" class="form-label">Title</label>
						<div class="input-group has-validation">
							<input type="text" name="subjectDept" class="form-control" id="subjectDept" required value="<?php echo $rowData['post_title']; ?>">
						</div>
					</div>
					<div class="col-12" style="margin-top: 20px;">
						<button type="submit" class="btn btn-primary mr-2" name="deletebsba">Confirm</button>
						<button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>

<!-- ADD POST BSCRIM -->

<div class="modal fade" id="addPostbscrim" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add Post</h5>
				<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form class="row g-3 needs-validation" novalidate method="post" action="addpost_bsit.php" enctype="multipart/form-data">
					<div class="col-6">
						<label for="image" class="form-label">Image</label>
						<div class="input-group has-validation">
							<input type="file" name="image" class="form-control" id="image" required>
							<div class="invalid-feedback">Please enter image.</div>
						</div>
					</div>
					<div class="col-12" style="margin-top: 10px;">
						<label for="subjectDept" class="form-label">Title</label>
						<div class="input-group has-validation">
							<input type="text" name="subjectDept" class="form-control" id="subjectDept" required>
							<div class="invalid-feedback">Please enter title</div>
						</div>
					</div>

					<div class="col-12" style="margin-top: 10px;">
						<label for="description" class="form-label">Description</label>
						<textarea style="height: 6em;" class="form-control" id="description" name="description" required></textarea>
						<div class="invalid-feedback">Please enter content</div>
					</div>

					<div class="col-12">
						<input type="hidden" name="department" value="bscrim" class="form-control">
					</div>

					<div class="col-12" style="margin-top: 20px;">
						<button type="button" class="btn btn-outline-danger btn-fw" data-dismiss="modal">Close</button>
						<button class="btn btn-outline-success btn-fw" type="submit" name="addpost_bscrim">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- EDIT POST BSCRIM -->
<div class="modal fade" id="editbscrim<?php echo $a_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit</h5>
				<button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
			</div>
			<div class="modal-body">
				<form class="row g-3 needs-validation" method="POST" action="editpost_bsit.php" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $a_id ?>">
					<div class="col-6">
						<label for="image" class="form-label">Image</label>
						<div class="input-group has-validation">
							<input type="file" name="photo" class="form-control" id="photo">
							<div class="invalid-feedback">Please enter image.</div>
						</div>
					</div>
					<div class="col-12" style="margin-top: 10px;">
						<label for="subjectDept" class="form-label">Title</label>
						<div class="input-group has-validation">
							<input type="text" name="subjectDept" class="form-control" id="subjectDept" required value="<?php echo $rowData['post_title']; ?>">
						</div>
					</div>

					<div class="col-12" style="margin-top: 10px;">
						<label for="description" class="form-label">Description</label>
						<textarea style="height: 6em;" class="form-control" id="description" name="description" required><?php echo $rowData['post_description']; ?></textarea>
					</div>

					<div class="col-12">
						<input type="hidden" name="department" value="bscrim" class="form-control">
					</div>

					<div class="col-12" style="margin-top: 20px;">
						<button class="btn btn-outline-success btn-fw" type="edit" name="editbscrim">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- DELETE BSCRIM-->
<div class="modal fade" id="deletebscrim<?php echo $a_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
				<button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
			</div>
			<div class="modal-body">
				<form class="forms-sample" method="post" action="deletepost_bsit.php">
					<input type="hidden" name="id" value="<?php echo $a_id ?>">
					<div class="col-12" style="margin-top: 10px;">
						<label for="subjectDept" class="form-label">Title</label>
						<div class="input-group has-validation">
							<input type="text" name="subjectDept" class="form-control" id="subjectDept" required value="<?php echo $rowData['post_title']; ?>">
						</div>
					</div>
					<div class="col-12" style="margin-top: 20px;">
						<button type="submit" class="btn btn-primary mr-2" name="deletebscrim">Confirm</button>
						<button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>

<!-- ADD POST BSED -->

<div class="modal fade" id="addPostbsed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add Post</h5>
				<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form class="row g-3 needs-validation" novalidate method="post" action="addpost_bsit.php" enctype="multipart/form-data">
					<div class="col-6">
						<label for="image" class="form-label">Image</label>
						<div class="input-group has-validation">
							<input type="file" name="image" class="form-control" id="image" required>
							<div class="invalid-feedback">Please enter image.</div>
						</div>
					</div>
					<div class="col-12" style="margin-top: 10px;">
						<label for="subjectDept" class="form-label">Title</label>
						<div class="input-group has-validation">
							<input type="text" name="subjectDept" class="form-control" id="subjectDept" required>
							<div class="invalid-feedback">Please enter title</div>
						</div>
					</div>

					<div class="col-12" style="margin-top: 10px;">
						<label for="description" class="form-label">Description</label>
						<textarea style="height: 6em;" class="form-control" id="description" name="description" required></textarea>
						<div class="invalid-feedback">Please enter content</div>
					</div>

					<div class="col-12">
						<input type="hidden" name="department" value="bsed" class="form-control">
					</div>

					<div class="col-12" style="margin-top: 20px;">
						<button type="button" class="btn btn-outline-danger btn-fw" data-dismiss="modal">Close</button>
						<button class="btn btn-outline-success btn-fw" type="submit" name="addpost_bsed">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- EDIT POST BSED -->
<div class="modal fade" id="editbsed<?php echo $a_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit</h5>
				<button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
			</div>
			<div class="modal-body">
				<form class="row g-3 needs-validation" method="POST" action="editpost_bsit.php" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $a_id ?>">
					<div class="col-6">
						<label for="image" class="form-label">Image</label>
						<div class="input-group has-validation">
							<input type="file" name="photo" class="form-control" id="photo">
							<div class="invalid-feedback">Please enter image.</div>
						</div>
					</div>
					<div class="col-12" style="margin-top: 10px;">
						<label for="subjectDept" class="form-label">Title</label>
						<div class="input-group has-validation">
							<input type="text" name="subjectDept" class="form-control" id="subjectDept" required value="<?php echo $rowData['post_title']; ?>">
						</div>
					</div>

					<div class="col-12" style="margin-top: 10px;">
						<label for="description" class="form-label">Description</label>
						<textarea style="height: 6em;" class="form-control" id="description" name="description" required><?php echo $rowData['post_description']; ?></textarea>
					</div>

					<div class="col-12">
						<input type="hidden" name="department" value="bsed" class="form-control">
					</div>

					<div class="col-12" style="margin-top: 20px;">
						<button class="btn btn-outline-success btn-fw" type="edit" name="editbsed">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- DELETE BSED-->
<div class="modal fade" id="deletebsed<?php echo $a_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
				<button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
			</div>
			<div class="modal-body">
				<form class="forms-sample" method="post" action="deletepost_bsit.php">
					<input type="hidden" name="id" value="<?php echo $a_id ?>">
					<div class="col-12" style="margin-top: 10px;">
						<label for="subjectDept" class="form-label">Title</label>
						<div class="input-group has-validation">
							<input type="text" name="subjectDept" class="form-control" id="subjectDept" required value="<?php echo $rowData['post_title']; ?>">
						</div>
					</div>
					<div class="col-12" style="margin-top: 20px;">
						<button type="submit" class="btn btn-primary mr-2" name="deletebsed">Confirm</button>
						<button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>

<!-- ADD POST BSTM -->

<div class="modal fade" id="addPostbstm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add Post</h5>
				<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form class="row g-3 needs-validation" novalidate method="post" action="addpost_bsit.php" enctype="multipart/form-data">
					<div class="col-6">
						<label for="image" class="form-label">Image</label>
						<div class="input-group has-validation">
							<input type="file" name="image" class="form-control" id="image" required>
							<div class="invalid-feedback">Please enter image.</div>
						</div>
					</div>
					<div class="col-12" style="margin-top: 10px;">
						<label for="subjectDept" class="form-label">Title</label>
						<div class="input-group has-validation">
							<input type="text" name="subjectDept" class="form-control" id="subjectDept" required>
							<div class="invalid-feedback">Please enter title</div>
						</div>
					</div>

					<div class="col-12" style="margin-top: 10px;">
						<label for="description" class="form-label">Description</label>
						<textarea style="height: 6em;" class="form-control" id="description" name="description" required></textarea>
						<div class="invalid-feedback">Please enter content</div>
					</div>

					<div class="col-12">
						<input type="hidden" name="department" value="bstm" class="form-control">
					</div>

					<div class="col-12" style="margin-top: 20px;">
						<button type="button" class="btn btn-outline-danger btn-fw" data-dismiss="modal">Close</button>
						<button class="btn btn-outline-success btn-fw" type="submit" name="addpost_bstm">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- EDIT POST BSTM -->
<div class="modal fade" id="editbstm<?php echo $a_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit</h5>
				<button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
			</div>
			<div class="modal-body">
				<form class="row g-3 needs-validation" method="POST" action="editpost_bsit.php" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $a_id ?>">
					<div class="col-6">
						<label for="image" class="form-label">Image</label>
						<div class="input-group has-validation">
							<input type="file" name="photo" class="form-control" id="photo">
							<div class="invalid-feedback">Please enter image.</div>
						</div>
					</div>
					<div class="col-12" style="margin-top: 10px;">
						<label for="subjectDept" class="form-label">Title</label>
						<div class="input-group has-validation">
							<input type="text" name="subjectDept" class="form-control" id="subjectDept" required value="<?php echo $rowData['post_title']; ?>">
						</div>
					</div>

					<div class="col-12" style="margin-top: 10px;">
						<label for="description" class="form-label">Description</label>
						<textarea style="height: 6em;" class="form-control" id="description" name="description" required><?php echo $rowData['post_description']; ?></textarea>
					</div>

					<div class="col-12">
						<input type="hidden" name="department" value="bstm" class="form-control">
					</div>

					<div class="col-12" style="margin-top: 20px;">
						<button class="btn btn-outline-success btn-fw" type="edit" name="editbstm">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- DELETE BSTM-->
<div class="modal fade" id="deletebstm<?php echo $a_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
				<button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
			</div>
			<div class="modal-body">
				<form class="forms-sample" method="post" action="deletepost_bsit.php">
					<input type="hidden" name="id" value="<?php echo $a_id ?>">
					<div class="col-12" style="margin-top: 10px;">
						<label for="subjectDept" class="form-label">Title</label>
						<div class="input-group has-validation">
							<input type="text" name="subjectDept" class="form-control" id="subjectDept" required value="<?php echo $rowData['post_title']; ?>">
						</div>
					</div>
					<div class="col-12" style="margin-top: 20px;">
						<button type="submit" class="btn btn-primary mr-2" name="deletebstm">Confirm</button>
						<button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>
