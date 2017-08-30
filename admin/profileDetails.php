<?php
$page="preferences";
session_start();
if(!isset($_SESSION['auid'])){
	header('Location:Login.php');
}
$auid=$_SESSION['auid'];
include_once('includes/header.php');
include_once('includes/sideHeader.php');
require_once('../includes/dbconfig.php');
require_once('../includes/dbconnect.php');
if(isset($_POST['firstName'])) {
		$firstName=$_POST['firstName'];
		$lastName=$_POST['lastName'];
		$username=$_POST['username'];
		$query="update administrator set firstName='$firstName', lastName='$lastName', username='$username' where adminid='$auid'";
		mysqli_query($link,$query) or die("Error updating data.".mysqli_error($link));
}
if(isset($_POST['contactNo'])) {
		$contactNo=$_POST['contactNo'];
		$email=$_POST['email'];
		$query="update administrator set contactNo='$contactNo', email='$email' where adminid='$auid'";
		mysqli_query($link,$query) or die("Error updating data.".mysqli_error($link));
}
if(isset($_POST['profilePicSubmit'])) {
		$target = "image/".$_FILES['profilepic']['name'];
		$imagepath = "image/".$_FILES['profilepic']['name'];
		if(!move_uploaded_file($_FILES['profilepic']['tmp_name'],$target))
		{
			echo "Sorry can't upload file....";	
		}
		else
		{
			$query="update administrator set profilePicture='$imagepath' where adminid='$auid'";
			mysqli_query($link,$query) or die("Error updating data.".mysqli_error($link));
		}
}
?>
<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3 bg-light">
          <h4 class="text-right">Welcome <?php echo $aname;?></h4>
		  <hr/>
		  <!--Page Content-->
		  <h3 class="text-material-red">Admin Details</h3><hr/>
		  <?php
					$query="select * from administrator where adminid='$auid'";
					$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
					$profileDetails=mysqli_fetch_assoc($result);
					mysqli_free_result($result);
		  ?>
		<div class="container" id="avatarChange">
		<div class="row" >
			  <div class="col-sm-3">
			       <img src="<?php echo $profileDetails['profilePicture']; ?>" class="img-thumbnail"/>
			       <br/>
				  <h4>Profile Picture</h4>
    		  </div><br/>
			  <div class="col-sm-6 col-md-offset-1">
			  <br/><br/>
				  <h4>Update profile picture here</h4><br/>
					<form method="post" enctype="multipart/form-data" class="form-inline">
						<div class="">
							<input id="profilePhotoIn" class="pull-left" type="file" name="profilepic"><br/><br/>
							<button type="submit" class="btn btn-primary" id="profilePhotoBtn" name="profilePicSubmit">Submit</button>
						</div>
					</form>
				</div>
			<div class="col-sm-3"></div>
		</div>
		</div>
			  <hr/>
			  <div class="container">
					<div class="row" id="changeDetails">
						<div class="col-sm-6">
							<form method="post">
								<div class="form-group">
								  <div class="input-group">
									<span class="input-group-addon">First Name</span>
									<input type="text" class="form-control" name="firstName" value="<?php echo ($profileDetails['firstName']); ?>">
								  </div>
								</div>
								<div class="form-group">
								  <div class="input-group">
									<span class="input-group-addon">Last Name</span>
									<input type="text" class="form-control" name="lastName" value="<?php echo ($profileDetails['lastName']); ?>">
								  </div>
								</div>
								<div class="form-group">
								  <div class="input-group">
									<span class="input-group-addon">User name</span>
									<input type="text" class="form-control" name="username" value="<?php echo ($profileDetails['username']); ?>">
								  </div>
								</div>
								<div class="form-group clearfix">
									<button type="submit" class="btn" name="userInfo1">Update</button>
								</div>
							</form>
						</div>
						<div class="col-sm-6">
							<form method="post">
								<div class="form-group">
								  <div class="input-group">
									<span class="input-group-addon">Contact</span>
									<input type="text" class="form-control" name="contactNo" value="<?php echo ($profileDetails['contactNo']); ?>">
								  </div>
								</div>
								<div class="form-group">
								  <div class="input-group">
									<span class="input-group-addon">Email-Id</span>
									<input type="text" class="form-control" name="email" value="<?php echo ($profileDetails['email']); ?>">
								  </div>
								</div>
								<div class="form-group">
								  <div class="input-group">
									<span class="input-group-addon">Profile Pic</span>
									<input type="text" class="form-control" name="profilePicture" value="<?php echo ($profileDetails['profilePicture']); ?>">
								  </div>
								</div>
								
								<div class="form-group clearfix">
									<button type="submit" class="btn pull-left" name="userInfo2">Update</button>
								</div>
							</form>
						</div>
					  </div>
			  </div>
			  <!--Page Content-->
        </main>
      </div>
    </div>
<?php
include_once('includes/footer.php');
?>
  </body>
</html>
