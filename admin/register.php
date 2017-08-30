<?php
$page="register";
session_start();
error_reporting(0);
if(!isset($_SESSION['auid'])){
	header('Location:Login.php');
}
else{
	
}
$auid=$_SESSION['auid'];
require_once('includes/dbconfig.php');
require_once('includes/dbconnect.php');
$emailErr = $usernameErr = $passErr = $fnameErr = $lnameErr = "";
$email = $username = $pass = $fname = $lname = "";
if(isset($_POST['email'])){
	if(empty($_POST['email'])){
		$emailErr="* Email is required";
	}
	else{
		$email=$_POST['email'];
	}
	
	if(empty($_POST['username'])){
		$usernameErr="* Username is required";
	}
	else{
		$uname=$_POST['username'];
	}
	
	if(empty($_POST['upassword'])){
		$passErr="* Password is required";
	}
	else{
		$upass=$_POST['upassword'];
	}
	
	if(empty($_POST['fname'])){
		$fnameErr="* First name is required";
	}
	else{
		$fname=$_POST['fname'];
	}
	
	if(empty($_POST['lname'])){
		$lnameErr="* Last name is required";
	}
	else{
		$lname=$_POST['lname'];
	}
	$upass = password_hash($upass, PASSWORD_DEFAULT);
	$query="INSERT INTO administrator (firstName, lastName, username, password, email) VALUES ('$fname', '$lname', '$uname', '$upass', '$email')";
	$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
}



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Admin</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/custom.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
	<style>
	.error{
		color:#f00;
	}
	</style>
  </head>
<div class="container">
	<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<h1 class="text-center text-material-red">Admin Registration</h1>
		<br/>
		<div class="container">
			<div class="col-md-12">
			  <form class="formsignin" method="post">
				<hr class="hr-white"/>
				<h5>First Name</h5>
				<div class="row">
				<div class="col-sm-6"><input type="text" id="inputEmail" class="form-control" name="fname" ></div>
				<div class="col-sm-6"><p class="error"><?php echo $fnameErr;?></p></div>
				</div>
				
				<h5>Last Name</h5>
				<div class="row">
				<div class="col-sm-6"><input type="text" id="inputEmail" class="form-control" name="lname" ></div>
				<div class="col-sm-6"><p class="error"><?php echo $lnameErr;?></p></div>
				</div>
				
				<h5>Email</h5>
				<div class="row">
				<div class="col-sm-6"><input type="text" id="inputEmail" class="form-control" name="email" ></div>
				<div class="col-sm-6"><p class="error"><?php echo $emailErr;?></p></div>
				</div>
				
				<h5>Username</h5>
				<label for="inputEmail" class="sr-only">Username</label>
				<div class="row">
				<div class="col-sm-6"><input type="text" id="inputEmail" class="form-control" name="username" ></div>
				<div class="col-sm-6"><p class="error"><?php echo $usernameErr;?></p></div>
				</div>
				
				<h5>Password</h5>
				<label for="inputPassword" class="sr-only">Password</label>
				<div class="row">
				<div class="col-sm-6"><input type="password" id="inputPassword" class="form-control" name="upassword" ></div>
				<div class="col-sm-6"><p class="error"><?php echo $passErr;?></p></div>
				</div>
				
				<div class="form-group">
					<label class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">Remember me</span>
					</label>
				</div>
				<div class="">
					<button class="btn btn-lg btn-primary btn-block text-center" name="loginSubmit" type="submit">Register</button>
				</div><br/>
				<div class="form-group">
					<hr/>
					<h5 class="text-center">Already a member? | Login in <a href="Login.php" class="text-inverse">here</a></h5>
					<h5 class="text-center">Forgot your password? | Click <a href="" class="text-inverse">here</a> to reset it</h5>
				</div>
			  </form>
			  </div>
			  </div>
		</div>
		<div class="col-sm-3"></div>
		</div>
    </div>
</body>
</html>