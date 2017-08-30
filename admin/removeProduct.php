<?php
$page="removeproduct";
session_start();
error_reporting(0);
if(!isset($_SESSION['auid'])){
	header('Location:Login.php');
}
$auid=$_SESSION['auid'];
include_once('includes/header.php');
include_once('includes/sideHeader.php');
require_once('../includes/dbconfig.php');
require_once('../includes/dbconnect.php');

$removemessage="";
if(isset($_POST['bookname'])) {
	$productId=$_POST['bookname'];
	$query3="SELECT image from product where name='$bookname'";
	$delete = mysqli_query($link, $query3);
	$rs = mysqli_fetch_assoc($delete);
	$imagepath=$rs['image'];	
	unlink($imagepath);
	
	$query="DELETE from product where productId='$productId'";
	mysqli_query($link,$query) or die("Error updating data.".mysqli_error($link));
	$removemessage="Selected book has been successfully removed from database!";
}
?>
<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
	<h4 class="text-right">Welcome <?php echo $aname;?></h4>
	<hr/>
	<div class="row">
		<div class="col-sm-6">
			<h3 class="text-material-red">Remove Product</h3>
		</div>
		<div class="col-sm-6">
			<h5><?php echo $removemessage;?></h5>
		</div>
	</div>
	<hr/>
	<h4 class="text-material-red rob-regular">Remove Book by name</h4>
		<form method="POST" enctype="multipart/form-data">
			<div class="row rob-regular" id="changeDetails">
				<div class="col-md-6">
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Name</label>
					  <div class="col-6">
					  <select class="form-control" name="bookname" id="exampleSelect1">
						  <option value="0">---select book name---</option>
					  <?php
						$query1="SELECT name, productId from product";
						$result=mysqli_query($link,$query1) or die("Error updating data.".mysqli_error($link));
						while($bookremove=mysqli_fetch_assoc($result)){
							echo '<option value="';
							echo $bookremove['productId'];
							echo '">';
							echo $bookremove['productId'];
							echo ". ";
							echo $bookremove['name'];
							echo '</option>
							';
						}
					  ?>
						</select>
					  </div>
					</div>
				</div>
				<div class="col-md-6 p-0 col-md-offset-1">
						<div class="form-group ">
							<button type="submit" class="btn btn-danger" id="profilePhotoBtn" name="removeBook">Delete!</button>
						</div>
				</div>
			</div>
		</form>	
		<hr/>
	
</main>