<?php
	$page="preferences";
	session_start();
	if(isset($_SESSION['uid'])){
		include_once('includes/headerLogin.php');
		$uid=$_SESSION['uid'];
	}
	else
		header('Location:Login.php');
?>
<br/><br/>
<?php
				include_once('includes/headerusers.php');
?>
<div class="topspc container-fluid">
	<div class="container">
		<h3 class="text-right">Welcome!</h3>
		<div id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="card">
				<div class="card-header" role="tab" id="headingOne">
				  <h5 class="mb-0">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					  Personal Info
					</a>
				  </h5>
				</div>

				<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
				  <div class="card-block">
					<?php
						require_once('includes/dbconfig.php');
						require_once('includes/dbconnect.php');
						
						if(isset($_POST['firstName'])) {
							$firstName=$_POST['firstName'];
							$lastName=$_POST['lastName'];
							$username=$_POST['username'];
							$email=$_POST['email'];
							$contactno=$_POST['contactno'];
							$country=$_POST['country'];
							//$address=$_POST['address'];
							$query="update customers set firstName='$firstName', lastName='$lastName', username='$username', email='$email', contactno='$contactno', country='$country' where customerId='$uid'";
							mysqli_query($link,$query) or die("Error updating data.".mysqli_error($link));
						}
						$query1="select * from customers where customerId='$uid'";
						$result=mysqli_query($link,$query1) or die("Error fetching data.".mysqli_error($link));
						$profileDetails=mysqli_fetch_assoc($result);
						mysqli_free_result($result);
					?>
					<form method="post">
						<div class="row" id="changeDetails">
							<div class="col-sm-6">
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
								
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									  <div class="input-group">
										<span class="input-group-addon">Email</span>
										<input type="email" class="form-control" name="email" value="<?php echo ($profileDetails['email']); ?>">
									  </div>
								</div>
								<div class="form-group">
									  <div class="input-group">
										<span class="input-group-addon">Contact No</span>
										<input type="text" class="form-control" name="contactno" value="<?php echo ($profileDetails['contactNo']); ?>">
									  </div>
								</div>
								<div class="form-group">
									  <div class="input-group">
										<span class="input-group-addon">Country</span>
										<input type="text" class="form-control" name="country" value="<?php echo ($profileDetails['country']); ?>">
									  </div>
								</div>
							</div>
							<div class="col-12 form-group clearfix">
								<button type="submit" class="btn" name="userInfo1">Update</button>
							</div>
						
					</div>
				  </form>
				</div>
			  </div>
			  
			  <div class="card">
				<div class="card-header" role="tab" id="headingTwo">
				  <h5 class="mb-0">
					<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					  Change Password
					</a>
				  </h5>
				</div>
				<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
				  <div class="card-block">
					<?php
						require_once('includes/dbconfig.php');
						require_once('includes/dbconnect.php');
						
						if(isset($_POST['updatePassword'])){
							$oldPass=$_POST['oldpassword'];
							$newPass=$_POST['newpassword'];
							$rePass=$_POST['renewpassword'];
							$uid=$_SESSION['uid'];
							if($newPass!==$rePass)
								echo "<div class='error'>New password and Re-enter password should match!</div>";
							else {
								$query="select * from customers where customerId='$uid'";
								$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
								$user=mysqli_fetch_assoc($result);
								if(!password_verify($oldPass,$user['password']))
									echo "Old password does not match.";
								else {
									$query="update customers set password='".password_hash($newPass,PASSWORD_DEFAULT)."' where customerId='$uid'";
									mysqli_query($link,$query) or die("Error updating data.".mysqli_error($link));
								}
							}
						}
						
					?>
					 
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
				  </div>
				</div>
			  </div>
			  <div class="card">
				<div class="card-header" role="tab" id="headingThree">
				  <h5 class="mb-0">
					<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					  Orders
					</a>
				  </h5>
				</div>
				<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
				  <div class="card-block">
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				  </div>
				</div>
			  </div>
			  
			   <div class="card">
				<div class="card-header" role="tab" id="headingFour">
				  <h5 class="mb-0">
					<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
					  Wishlist
					</a>
				  </h5>
				</div>
				<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
				  <div class="card-block">
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				  </div>
				</div>
			  </div>
			</div>
	</div>
</div>
</div>
<br/>
<?php
	include_once('includes/footer.php');
?>
</body>
</html>