
<?php
	$page="contactus";
	session_start();
	if(isset($_SESSION['uid'])){
		include_once('includes/headerLogin.php');
	}
	else
		include_once('includes/header.php');
?>
	<br/><br/>
	<div class="jumbotron cnctimg topspc cnctimgwood">
		<div class="container text-center">
			<h1><strong>Contact Us</strong></h1><hr/>
			<h3>For any Queries related to purchase, returns, payment anything</h3><br/>
			<h3>" Customer Satisfaction is our primary need "</h3>
		</div>
	</div>
	<br/>
	<h1 class="text-center text-primary">Get in touch with Us</h1>
	<br/>
	
	<div class="row">
		<div class="col-md-6 addressclass"><br/>
			<h2 class="text-primary">Contact Information</h2><hr class="hr-black"/>
			<br/>
			<div class="contacttablediv">
				<table border="0" class="contacttable" cellpadding="2" align="center">
					<tr>
						<td>
							<img src="images/icons/ic_place_black_48dp.png" width="40"/>
						</td>
						<td>
							<h3 class="text-material-purple"> Address: </h3>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<h5 class="text-material-brown">Books-Avenue India Pvt Ltd, 2nd Floor,<br/>3 North Avenue, Maker Maxity,<br/>Bandra Kurla Complex, Bandra East,<br/> Mumbai, 400051, India.</h5>
							<hr class="hr-black"/>
						</td>
					</tr>
							
					<tr>
						<td>
							<img src="images/icons/ic_email_black_48dp.png" width="40"/>
						</td>
						<td>
							<h3 class="text-material-purple"> E-Mail: </h3>
						</td>
					</tr>
					<tr>
							<td></td>
							<td>
								<h5 class="text-material-brown">booksavenue@gmail.com</h5>
								<hr class="hr-black"/>
							</td>
					</tr>	
					<tr>	
						<td>
							<img src="images/icons/ic_call_black_48dp.png" width="40"/>
						</td>
						<td>
							<h3 class="text-material-purple"> Contact Number: </h3>
						</td>
					</tr>
					<tr> 
							<td></td>
							<td>
								<h5 class="text-material-brown">Primary: 1800 888 9898</h5><h5 class="text-material-brown">Alternate: 1800 999 8989</h5>
								<hr class="hr-black"/>
							</td>
					</tr>
					<tr>
						<td>
							<img src="images/icons/ic_web_black_48dp.png" width="40"/>
						</td>
						<td>
							<h3 class="text-material-purple"> Website: </h3>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<h5 class="text-material-brown"><a href="index.html" class="action-link">https://www.booksavenue.com</a></h5>
							<hr class="hr-black"/>
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="col-md-6 contactform"><br/>
			<h2 class="text-primary">Contact Form</h2><hr class="hr-black"/>
			<h4>Please Note: All the fields are Required</h4><br/>
				<div class="form-style">
						<form action="" name="contact" method="Post">
							<input type="text" placeholder="Your Name..." name="contactName" required/><br/>
							<input type="email" placeholder="Your Email ID..." name="contactEmail" required/><br/>
							<input type="text" placeholder="Subject..." name="contactSubject" required/><br/>
							<input type="text" placeholder="Message..." name="contactMessage" required/><br/>
							<input type="hidden" name="contactDate"/>
							<button type="submit" class="btn float-left btn-form" name="contactSubmit"><img src="images/icons/ic_done_white_48dp.png" width="25"/> Submit</button>
							<button type="reset" name="clear" class="btn float-right btn-form"><img src="images/icons/ic_history_white_48dp.png" width="25"/>  Reset</button>
						</form>
				</div>
		</div>
	</div>
	
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.210246359526!2d72.8484926873645!3d19.05449155105403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3f8a301dbe5999fb!2sMaker+Maxity!5e0!3m2!1sen!2sin!4v1488825667192" width="1351" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
	
	<div class="jumbotron cnctimg topspc cnctimgwood">
		<div class="container text-center">
			<h1><strong>Already a Member?</strong></h1>
			<h3>Contact our Award Winning 24 X 7 Support</h3>
			<h6>Our Customer Support services are the best, with a 99.99% customer satisfaction rating.</h6>
			<h6>They are standing to help you</h6><br/>
			<button class="btn btn-cnct" name="">Contact Now</button>
		</div>
	</div>
	
<?php
	include_once('includes/footer.php');
?>
</body>
</html>