<?php
require_once('includes/dbconnect.php');
require_once('includes/dbconfig.php');
if(isset($_POST['loginSubmit']))
{
	$uname=$_POST['username'];
	$upass =$_POST['upassword'];

	$query="select * from customers where (email='".$uname."') OR (username='".$uname."')";
	$result=mysqli_query($link,$query) or die("Can not fetch user data.");
	$row=mysqli_fetch_assoc($result);
	
	if(password_verify($upass,$row['password'])){
		session_start();
		$_SESSION['uid']=$row['customerId'];
		$_SESSION['uname']=$row['username'];
		$_SESSION['email']=$row['email'];
		$_SESSION['firstName']=$row['firstName'];
		header("Location:preferences.php");
	}
	else {
		echo "<h5 class='error'>Incorrect Username or Password</h5>";
	}
}
?>

<?php
	session_start();
	if(isset($_SESSION['uid'])){
		include_once('includes/headerLogin.php');
	}
	else
		include_once('includes/header.php');
?>
<br><br>
<div class="topspc"><br/><br/>
	<div class="container">
		<div class="containerlogin">
			<div class="row">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-6 bg-light">
					<form class="form-signin" method="post">
						<h1 class="form-signin-heading text-center">Login<span aria-hidden="true"><img align="right" width="50" src="images/icons/ic_lock_outline_black_48dp.png"/></span></h1><hr class="hr-white"/>

						<h4 class="">Email/Username</h4>
						<label for="inputEmail" class="sr-only">Email/Username</label>
						<input type="text" id="inputEmail" class="form-control" name="username" required autofocus>

						<h4 class="">Password</h4>
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
							<h5 class="text-center ">Not a member yet? | Sign up <a href="" class="text-inverse">here</a></h5>
							<h5 class="text-center ">Forgot your password? | Click <a href="" class="text-inverse">here</a> to reset it</h5>
						</div>
					  </form>
				</div>
				<div class="col-sm-3">
				</div>
			</div>
		</div>
    </div> 
</div>	<!-- /container -->
<?php
	include_once('includes/footer.php');
?>
</body>
</html>