<?php
$page="preferences";
session_start();
if(!isset($_SESSION['auid'])){
	header('Location:Login.php');
}
include_once('includes/header.php');
include_once('includes/sideHeader.php');
require_once('../includes/dbconfig.php');
require_once('../includes/dbconnect.php');

if(isset($_POST['updatePassword'])){
		$oldPass=$_POST['oldpassword'];
		$newPass=$_POST['newpassword'];
		$rePass=$_POST['renewpassword'];
		$auid=$_SESSION['auid'];
		if($newPass!==$rePass)
			echo "<div class='error'>New password and Re-enter password should match!</div>";
		else {
			$query="select * from administrator where adminid='$auid'";
			$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
			$user=mysqli_fetch_assoc($result);
			if(!password_verify($oldPass,$user['password']))
				echo "Old password does not match.";
			else {
				$query="update administrator set password='".password_hash($newPass,PASSWORD_DEFAULT)."' where adminid='$auid'";
				mysqli_query($link,$query) or die("Error updating data.".mysqli_error($link));
			}
		}
	}
?>
	  <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
          <h4 class="text-right">Welcome <?php echo $aname;?></h4>
		  <hr/>
		  <!--Page Content-->
		  <h3 class="text-material-red">Admin Change Password</h3><hr/><br/>
		  <form method="post">
			  <div class="container" id="changeDetails">
				  <div class="row">
						<div class="col-sm-6">
						  <label class="sr-only" for="inlineFormInputGroup">Old</label>
						  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
							<div class="input-group-addon">Old Password</div>
							<input type="password" name="oldpassword" class="form-control" id="inlineFormInputGroup" placeholder="Old Password">
						  </div><br/>
						  <label class="sr-only" for="inlineFormInputGroup">New</label>
						  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
							<div class="input-group-addon">New Password</div>
							<input type="password" name="newpassword" class="form-control" id="inlineFormInputGroup" placeholder="New Password">
						  </div><br/>
						  <label class="sr-only" for="inlineFormInputGroup">Re-Enter</label>
						  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
							<div class="input-group-addon">Re-Enter Password</div>
							<input type="password" name="renewpassword" class="form-control" id="inlineFormInputGroup" placeholder="Re-Enter Password">
						  </div>
						</div>
				  </div>
				  <br/>
			  <button type="submit" class="btn btn-default btn-primary" name="updatePassword">Update</button>
			  </div>
		  </form>
			  <!--Page Content-->
        </main>
      </div>
    </div>
<?php
include_once('includes/footer.php');
?>
  </body>
</html>
