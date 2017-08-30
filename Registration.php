<?php
	session_start();
	if(isset($_SESSION['uid'])){
		include_once('includes/headerLogin.php');
	}
	else
		include_once('includes/header.php');
?>
<script>
function validate() {
	 var allLetters = /^[a-zA-Z]+$/;
	 var letter = /[a-zA-Z]/;
     var number = /[0-9]/;
		
	var firstName = document.Rform.firstName.value;
	var lastName = document.Rform.lastName.value;
	var username = document.Rform.username.value;
	var email = document.Rform.email.value;
	var pwd1 = document.Rform.pwd1.value;
	var pwd2 = document.Rform.pwd2.value;
	if (!allLetters.test(firstName)) {
        alert("First name should contain a-z or A-Z");
		return false;
    }
	if (!allLetters.test(lastName)) {
        alert("last name should contain a-z or A-Z");
		return false;
    }
	if(!allLetters.test(username)){
		alert("username should contain a-z or A-Z");
		return false;
	}
	if (email.indexOf("@") < 1 || email.lastIndexOf(".") < email.indexOf("@") + 2 || email.lastIndexOf(".") + 2 >= email.length) {
        alert("Email should contain '@' and '.'");
		return false;
    }
	if (pwd1.length < 6 || !letter.test(pwd1) || !number.test(pwd1)){
        alert("Password (length min 6, should contain a-z A-Z and 0-9)");
		return false;
    }
	return true;
}
</script>
	<br><br>
	<div class="jumbotron cnctimg cnctimgblue topspc">
		<div class="container text-center">
			<h1><strong>Join Us</strong></h1><hr/>
			<h3>For The Best Customer Experience</h3><br/>
			<h2>Create your Books-Avenue Account</h2>
		</div>
	</div>
	<div class="bg-inverse">
		<div class="container bg-lighter"><br/>
			<h1 class="text-center text-black">Registration Form</h1><hr class="hr-black"/><br/>
				<div class="container registrationForm">
					<div class="container text-black">
							<form action="" name="Rform" onsubmit="return validate()" method="POST">
								  <input type="hidden" name="dateRegistration" value="<?php echo date('M d, Y'); ?>"/>
								  <div class="form-group form-check-inline">
									<label for="exampleInputEmail1"><h4>First Name *</h4></label>
									<input type="text" name="firstName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First Name" size="43">
								  </div>
								  
								  <div class="form-group form-check-inline">
									<label for="exampleInputEmail1"><h4>Last Name *</h4></label>
									<input type="text" name="lastName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last Name" size="42">
								  </div>
								  
								  <div class="form-group">
									<label for="exampleInputEmail1"><h4>Email address *</h4></label>
									<input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
									<small id="emailHelp" class="form-text text-default">We'll never share your email with anyone else.</small>
								  </div>
								  
								  <div class="form-group">
									<label for="exampleInputEmail1"><h4>Username *</h4></label>
									<input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last Name">
								  </div>
								  
								  <div class="form-group">
									<label for="exampleInputPassword1"><h4>Password *</h4></label>
									<input type="password" name="pwd1" class="form-control" id="exampleInputPassword1" placeholder="Password">
									<small id="emailHelp" class="form-text text-default">Password should contain at least one: Uppercase, special Character</small>
								  </div>
								  <div class="form-group">
									<label for="exampleInputPassword1"><h4>Confirm Password *</h4></label>
									<input type="password" name="pwd2" class="form-control" id="exampleInputPassword2" placeholder="Re-Enter Password">
								  </div>
								  <div class="form-group">
									  <label for="example-date-input"><h4>Date of Birth</h4></label>
										<input name="dateOfBirth" class="form-control" type="date" value="" id="example-date-input">
									</div>
								  <div class="form-group">
									  <label for="example-tel-input" class="col-form-label"><h4>Contact Number</h4></label>
										<input name="contactNo" class="form-control" type="tel" value="" id="example-tel-input">
								  </div>
								  
								  <div class="form-group">
									<label for="exampleSelect1"><h4>Country</h4></label>
									<select name="country" class="form-control" id="exampleSelect1">
									  <option>Algeria</option>
									  <option>China</option>
									  <option>India</option>
									  <option>Russia</option>
									</select>
								  </div>
  
								  <div class="form-group">
									<label for="Gender"><h4>Gender *</h4></label><br/>
									<label class="custom-control custom-radio">
										<input id="radio1" name="mgender" type="radio" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description"><h4>Male</h4></span>
									</label>
									<label class="custom-control custom-radio">
										<input id="radio2" name="fgender" type="radio" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description"><h4>Female</h4></span>
									</label>
									
								   </div>
								   <div class="form-group">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">I agree to the <a class="text-primary" href="">Terms and Conditions</a> stated by Books Avenue</span>
									</label>
									</div>
									<div class="form-group" align="center">
									  <button type="submit" class="btn btn-primary">Submit</button>
									  <button type="clear" class="btn btn-primary">Clear</button>
									</div>
									
									<div class="form-group">
										<h5 class="text-center">Already a member? | Log In <a href="" class="text-primary">here</a></h5>
								  </div>
							</form>
					</div>
					<br/>
				</div>
		</div>
		
	</div>
<?php
	include_once('includes/footer.php');
?>
</body>
</html>