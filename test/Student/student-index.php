<?php
session_start();
include 'includes/conn.php';
if(!isset($_SESSION['student'])){
	header("Location: ../index.php");
}

$sql = "SELECT * FROM tbl_student WHERE Student_id ='".$_SESSION['student']."'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$row = mysqli_fetch_assoc($resultset);
$Sy=$row['SY'];

$sql21 = "SELECT * FROM tbl_acadyear WHERE acad_id = $Sy";
$resultset21 = mysqli_query($conn, $sql21) or die("database error:". mysqli_error($conn));
$row21 = mysqli_fetch_assoc($resultset21);
$iyot=$row21['acad_id'];
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets2/img/favicon.ico">

	<title>Student Profile</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="assets2/img/apple-icon.webp" />
	<link rel="icon" type="image/png" href="assets2/img/favicon.webp" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="assets2/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets2/css/student-style.css" rel="stylesheet" />

</head>

<body>


	<!-- SCC Background Layout -->
	<div class="image-container set-full-height" style="background-image: url('assets2/img/scc-background.jpg')">
		<!-- SCC Logo Layout-->
		<div class="logo-container">
			<div class="logo">
				<img src="assets2/img/scc-logo.webp">
			</div>
			<div class="masthead-container text-center">
				<p class="masthead-heading">St. Cecilia's College - Cebu</p>
				<p class="masthead-subheading">De La Salle Supervised School</p>
				<p class="masthead-subheading-2">Minglanilla, Cebu.</p>
			</div>
		</div>
		<!--  Made With Material Kit  -->
		<a href="../index.php" class="made-with-mk">
			<div class="brand"><i class="fa fa-2x fa-home"></i></div>
			<div class="made-with">Go to <strong><b>SCC</b> Home Page</strong></div>
		</a>

		<!--   Big container   -->
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<!--      Wizard container        -->
					<div class="wizard-container">
						<div class="card wizard-card" data-color="green" id="wizardProfile">						
							<form action="" method="post" enctype="multipart/form-data">
								<div class="wizard-header" id="profile-student">

									<h5 class="header-bg" >
										Welcome Back !!<br><strong>
										<?php echo $row['FullName']; ?></strong> 
									</h5>	
									<br> 
									<p id="pi"> S.Y.  </p>
									<?php									
									$sql0 = "SELECT * FROM tbl_acadyear";
									$resultset0 = mysqli_query($conn, $sql0) or die("database error:". mysqli_error($conn));									
									?>
									<input class="igit" list="datalistOptions" name="acad1" placeholder="Select S.Y.">
									<datalist id="datalistOptions">
									<?php   while($row0 = mysqli_fetch_assoc($resultset0)){?>
									<option value=<?=$row0['acad_year'] ?>> </option>
									<?php
									}
									?>
							</datalist>
							</form>
								<!-- End Edit -->
								</div>
										
								<div class="wizard-navigation">
									<ul>
										<li><a href="#about" data-toggle="tab">Profile</a></li>
										<li><a href="#account" data-toggle="tab">1st semester</a></li>
										<li><a href="#address" data-toggle="tab">2nd semester</a></li>
									</ul>
								</div>
								<!-- ======= Student Profile ======= -->

								
							
							<form role="form" action="save.php" method="post" enctype="multipart/form-data">									
								<div class="tab-content">
									<div class="tab-pane" id="about">
										<div class="row">
											<h4 class="info-text"> " Settle your payments " </h4>
											<div class="col-sm-4 col-sm-offset-1">
												<div class="picture-container">
													<div class="picture">
													<!-- <span class="circle-image">	 -->
														<img src="<?php echo (!empty($row['img'])) ? '../images/'.$row['img'] : 'assets2/img/default-avatar.png'; ?>" class="picture-src circular_image" id="wizardPicturePreview" title="" />
													<!-- </span> -->
														<input type="file" name="profile" id="wizard-picture">
													</div>
													<h6>Choose Picture</h6>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">label</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label"></label>
														<input id="schoolId" type="text" class="form-control" value="<?php echo $row['Student_id']; ?>" readonly>
													</div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label"></label>
														<input id="fullname" class="form-control" value="<?php echo $row['FullName']; ?>"readonly>
													</div>
												</div>
												<br>
												<div>
													<p class="stat"> Status: <span class="stat2"><?php echo $row['Status']; ?></span> </p>
													<p class="stat2" style="text-align: center"> (S.Y.<?php echo $row21['acad_year']; ?>) </p>
												</div>
											</div>

										</div>
									</div>  <!-- ======= end of about ======= -->
									<!-- ======= Student First Semester Account ======= -->
									<div class="tab-pane" id="account">
										<h4 class="info-text"> " Watch your table of payments " </h4>
										
										<div class="table-wrapper">
											<table class="fl-table">
												
												<?php
												if(isset($_POST["acad1"])){
													$sy=$_POST['acad1'];

													$sql11 = "SELECT * FROM tbl_acadyear WHERE acad_year = '".$sy."' ";
												$resultset11 = mysqli_query($conn, $sql11) or die("database error:". mysqli_error($conn));
												$row11 = mysqli_fetch_assoc($resultset11);
												$acad_id=$row11['acad_id'];

												$sql1 = "SELECT * FROM tbl_tuition WHERE Student_id ='".$_SESSION['student']."' AND period_id ='101' AND Acad_id ='".$acad_id."' and sem_id = '101' ";
												$resultset1 = mysqli_query($conn, $sql1) or die("database error:". mysqli_error($conn));
												$row1 = mysqli_fetch_assoc($resultset1);

												$sql2 = "SELECT * FROM tbl_tuition WHERE Student_id ='".$_SESSION['student']."' AND period_id ='102' AND Acad_id ='".$acad_id."' and sem_id = '101' ";
												$resultset2 = mysqli_query($conn, $sql2) or die("database error:". mysqli_error($conn));
												$row2 = mysqli_fetch_assoc($resultset2);

												$sql3 = "SELECT * FROM tbl_tuition WHERE Student_id ='".$_SESSION['student']."' AND period_id ='103' AND Acad_id ='".$acad_id."' and sem_id = '101' ";
												$resultset3 = mysqli_query($conn, $sql3) or die("database error:". mysqli_error($conn));
												$row3 = mysqli_fetch_assoc($resultset3);

												$sql4 = "SELECT * FROM tbl_tuition WHERE Student_id ='".$_SESSION['student']."' AND period_id ='104' AND Acad_id ='".$acad_id."' and sem_id = '101' ";
												$resultset4 = mysqli_query($conn, $sql4) or die("database error:". mysqli_error($conn));
												$row4 = mysqli_fetch_assoc($resultset4);
												}else{

													$sql1 = "SELECT * FROM tbl_tuition WHERE Student_id ='".$_SESSION['student']."' AND period_id ='101' AND Acad_id ='$iyot' and sem_id = '101' ";
												$resultset1 = mysqli_query($conn, $sql1) or die("database error:". mysqli_error($conn));
												$row1 = mysqli_fetch_assoc($resultset1);

												$sql2 = "SELECT * FROM tbl_tuition WHERE Student_id ='".$_SESSION['student']."' AND period_id ='102' AND Acad_id ='$iyot' and sem_id = '101' ";
												$resultset2 = mysqli_query($conn, $sql2) or die("database error:". mysqli_error($conn));
												$row2 = mysqli_fetch_assoc($resultset2);

												$sql3 = "SELECT * FROM tbl_tuition WHERE Student_id ='".$_SESSION['student']."' AND period_id ='103' AND Acad_id ='$iyot' and sem_id = '101' ";
												$resultset3 = mysqli_query($conn, $sql3) or die("database error:". mysqli_error($conn));
												$row3 = mysqli_fetch_assoc($resultset3);

												$sql4 = "SELECT * FROM tbl_tuition WHERE Student_id ='".$_SESSION['student']."' AND period_id ='104' AND Acad_id ='$iyot' and sem_id = '101' ";
												$resultset4 = mysqli_query($conn, $sql4) or die("database error:". mysqli_error($conn));
												$row4 = mysqli_fetch_assoc($resultset4);
												}
												?>
												<thead>
												<tr>
													<th>Prelim</th>
													<th>Midterm</th>
													<th>Pre-Final</th>
													<th>Final</th>
												</tr>
												</thead>

												<tbody>
												<tr>
												<?php
												$zero1 = ",00";
												$zero = "00.00";
												if($row1['Balance'] >= 1){
													$Balance1 = $row1['Balance']."".$zero1;
												}else{
													$Balance1 = $zero;
												}
												if($row2['Balance'] >= 1){
													$Balance2 = $row2['Balance']."".$zero1;
												}else{
													$Balance2 = $zero;
												}
												if($row3['Balance']>=1){
													$Balance3 = $row3['Balance']."".$zero1;
												}else{
													$Balance3 = $zero;
												}

												if($row4['Balance']>=1){
													$Balance4 = $row4['Balance']."".$zero1;
												}else{
													$Balance4 = $zero;
												}
										
												?>
													<td><span>&#8369;</span> <?php echo $Balance1; ?></td>
													<td><span>&#8369;</span> <?php echo $Balance2; ?></td>
													<td><span>&#8369;</span> <?php echo $Balance3; ?></td>
													<td><span>&#8369;</span> <?php echo $Balance4; ?></td>


												</tr>
												<tr>
													<td><?php echo $row1['Remarks'] ; ?></td>
													<td><?php echo $row2['Remarks'] ; ?></td>
													<td><?php echo $row3['Remarks'] ; ?></td>
													<td><?php echo $row4['Remarks'] ; ?></td>


												</tr>
												
												<tbody>
											</table>
										</div>

									</div> <!-- ======= End First Semester ======= -->
									<!-- ======= Student Second Semester Account ======= -->
									<div class="tab-pane" id="address">
										<h4 class="info-text"> " You should pay in time. " </h4>
										<div class="table-wrapper">
											<table class="fl-table">
												<?php
													if(isset($_POST["acad1"])){
														$sy=$_POST['acad1'];
	
														$sql111 = "SELECT * FROM tbl_acadyear WHERE acad_year = '".$sy."' ";
													$resultset111 = mysqli_query($conn, $sql111) or die("database error:". mysqli_error($conn));
													$row111 = mysqli_fetch_assoc($resultset111);
													$acad_id1=$row111['acad_id'];
													
												$sql5 = "SELECT * FROM tbl_tuition WHERE Student_id ='".$_SESSION['student']."' AND period_id ='101' AND Acad_id ='".$acad_id1."' and sem_id = '102' ";
												$resultset5 = mysqli_query($conn, $sql5) or die("database error:". mysqli_error($conn));
												$row5 = mysqli_fetch_assoc($resultset5);

												$sql6 = "SELECT * FROM tbl_tuition WHERE Student_id ='".$_SESSION['student']."' AND period_id ='102' AND Acad_id ='".$acad_id1."' and sem_id = '102' ";
												$resultset6 = mysqli_query($conn, $sql6) or die("database error:". mysqli_error($conn));
												$row6 = mysqli_fetch_assoc($resultset6);

												$sql7 = "SELECT * FROM tbl_tuition WHERE Student_id ='".$_SESSION['student']."' AND period_id ='103' AND Acad_id ='".$acad_id1."' and sem_id = '102' ";
												$resultset7 = mysqli_query($conn, $sql7) or die("database error:". mysqli_error($conn));
												$row7 = mysqli_fetch_assoc($resultset7);

												$sql8 = "SELECT * FROM tbl_tuition WHERE Student_id ='".$_SESSION['student']."' AND period_id ='104' AND Acad_id ='".$acad_id1."' and sem_id = '102' ";
												$resultset8 = mysqli_query($conn, $sql8) or die("database error:". mysqli_error($conn));
												$row8 = mysqli_fetch_assoc($resultset8);
												}else{

													$sql5 = "SELECT * FROM tbl_tuition WHERE Student_id ='".$_SESSION['student']."' AND period_id ='101' AND Acad_id ='$iyot' and sem_id = '102' ";
												$resultset5 = mysqli_query($conn, $sql5) or die("database error:". mysqli_error($conn));
												$row5 = mysqli_fetch_assoc($resultset5);

												$sql6 = "SELECT * FROM tbl_tuition WHERE Student_id ='".$_SESSION['student']."' AND period_id ='102' AND Acad_id ='$iyot' and sem_id = '102' ";
												$resultset6 = mysqli_query($conn, $sql6) or die("database error:". mysqli_error($conn));
												$row6 = mysqli_fetch_assoc($resultset6);

												$sql7 = "SELECT * FROM tbl_tuition WHERE Student_id ='".$_SESSION['student']."' AND period_id ='103' AND Acad_id ='$iyot' and sem_id = '102' ";
												$resultset7 = mysqli_query($conn, $sql7) or die("database error:". mysqli_error($conn));
												$row7 = mysqli_fetch_assoc($resultset7);

												$sql8 = "SELECT * FROM tbl_tuition WHERE Student_id ='".$_SESSION['student']."' AND period_id ='104' AND Acad_id ='$iyot' and sem_id = '102' ";
												$resultset8 = mysqli_query($conn, $sql8) or die("database error:". mysqli_error($conn));
												$row8 = mysqli_fetch_assoc($resultset8);
												}
												?>
												<thead>
												<?php
												$zero1 = ",00";
												$zero = "00.00";
												if($row5['Balance'] >= 1){
													$Balance5 = $row5['Balance']."".$zero1;
												}else{
													$Balance5 = $zero;
												}
												if($row6['Balance'] >= 1){
													$Balance6 = $row6['Balance']."".$zero1;
												}else{
													$Balance6 = $zero;
												}
												if($row7['Balance']>=1){
													$Balance7 = $row7['Balance']."".$zero1;
												}else{
													$Balance7 = $zero;
												}

												if($row8['Balance']>=1){
													$Balance8 = $row8['Balance']."".$zero1;
												}else{
													$Balance8 = $zero;
												}
										
												?>
												<tr>
													<th>Prelim</th>
													<th>Midterm</th>
													<th>Pre-Final</th>
													<th>Final</th>
												</tr>
												</thead>

												<tbody>
												<tr>
													<td><span>&#8369;</span> <?php echo $Balance5;?></td>
													<td><span>&#8369;</span> <?php echo $Balance6;?></td>
													<td><span>&#8369;</span> <?php echo $Balance7;?></td>
													<td><span>&#8369;</span> <?php echo $Balance8;?></td>


												</tr>
												<tr>
													<td><?php echo $row5['Remarks'] ; ?></td>
													<td><?php echo $row6['Remarks'] ; ?></td>
													<td><?php echo $row7['Remarks'] ; ?></td>
													<td><?php echo $row8['Remarks'] ; ?></td>


												</tr>
												
												<tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="wizard-footer">
									<div class="pull-right">
											<input type='button' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Logout' href="#" data-toggle="modal" data-target="#logoutModal"/>
									</div>
									<div class="pull-left">
										<input disabled type='submit' class='btn btn-save btn-fill btn-info btn-wd' id="submitphoto" name="upload" value='Save' />
									</div>
									<div class="clearfix">
										 <p style = "text-align: center; font-size: 25px; padding-top: 20px" class="stat2 center"><!--  (Sample Date) --> </p> 
									</div>
								</div>
							</form>
						</div>
					</div> <!-- wizard container -->
				</div>
			</div><!-- end row -->
		</div> <!--  big container -->

	
		<div class="footer">
			<div class="container text-center">
				© Alrights Reserved 2022 | <strong>Team Hoodlums</strong>. <i class="fa fa-heart heart"></i>
			</div>
		</div>
	</div>

	<!-- Small modal -->
	<div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h4>Log Out <i class="fa fa-lock"></i></h4>
			</div>
			<div class="modal-body">
				<p><i class="fa fa-question-circle"></i> Are you sure you want to logout? <br /></p>
				<div class="actionsBtns">
				<form action="logout.php" method="post">
							<div class="row"> 
								<div class="column">
									<a class="appear-button1" href="logout.php">Logout</a>
								</div>
								<div class="column">
									<a class="appear-button2" data-dismiss="modal">Cancel</a>
								</div>
							</div>

					</form>
				</div>
			</div>
			</div>
		</div>
	</div>
</body>


<!--   Core JS Files   -->
<script src="assets2/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="assets2/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets2/js/jquery.bootstrap.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="assets2/js/material-bootstrap-wizard.js"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="assets2/js/jquery.validate.min.js"></script>
<script>
  $(document).ready(function(){
  $("#wizard-picture").change(function(){
    $("#submitphoto").removeAttr("disabled");
  });
});
</script>
</html>

