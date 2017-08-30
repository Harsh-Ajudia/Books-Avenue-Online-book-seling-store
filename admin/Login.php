<?php
require_once('includes/dbconnect.php');
require_once('includes/dbconfig.php');
if(isset($_POST['loginSubmit']))
{
	$uname=$_POST['username'];
	$upass =$_POST['upassword'];

	$query="select * from administrator where (email='".$uname."') OR (username='".$uname."')";
	$result=mysqli_query($link,$query) or die("Can not fetch user data.");
	$row=mysqli_fetch_assoc($result);
	
	if(password_verify($upass,$row['password'])){
		session_start();
		$_SESSION['auid']=$row['adminId'];
		$_SESSION['uname']=$row['username'];
		$_SESSION['email']=$row['email'];
		$_SESSION['firstName']=$row['firstName'];
		$_SESSION['avatar']=$row['profilePicture'];
		header("Location:index.php");
	}
	else {
		echo "<h5 class='error'>Incorrect Username or Password</h5>";
	}
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
  </head>
<?php
	session_start();
?><div class="container">
	<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<h1 class="text-center text-material-red">Please sign-in to access</h1>
		<br/>
		<div class="container">
			<div class="col-md-12">
			  <form class="formsignin" method="post">
				<h1 class="form-signin-heading text-center">Login<span aria-hidden="true"><img align="right" width="50" src="../images/icons/ic_lock_outline_black_48dp.png"/></span></h1>
				<hr class="hr-white"/>
				
				<h4>Email/Username</h4>
				<label for="inputEmail" class="sr-only">Email/Username</label>
				<input type="text" id="inputEmail" class="form-control" name="username" required>
				<br/>
				<h4>Password</h4>
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" id="inputPassword" class="form-control" name="upassword" required>
				
				<div class="form-group">
					<label class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">Remember me</span>
					</label>
				</div>
				<div class="">
					<button class="btn btn-lg btn-primary btn-block text-center" name="loginSubmit" type="submit">Sign in</button>
				</div><br/>
				<div class="form-group">
					<hr/>
					<h5 class="text-center">Not a member yet? | Sign up <a href="register.php" class="text-inverse">here</a></h5>
					<h5 class="text-center">Forgot your password? | Click <a href="#" class="text-inverse">here</a> to reset it</h5>
				</div>
			  </form>
			  </div>
			  </div>
		</div>
		<div class="col-sm-3"></div>
		</div>
    </div>
<!-- /container -->
</body>
</html>