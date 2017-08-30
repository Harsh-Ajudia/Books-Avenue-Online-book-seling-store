	
<?php
	$page="faq";
	session_start();
	if(isset($_SESSION['uid'])){
		include_once('includes/headerLogin.php');
	}
	else
		include_once('includes/header.php');
?>
	<br><br>
	
	<div class="topspc">
		
		<div class="jumbotron cnctimg bg-material-red">
			<div class="container text-center"><br/><br/>
				<h1>We are here to help</h1><hr class="hr-white"/>
				<div class="search_bar">
					<form class="form-inline my-2 my-lg-1 faqSearch">
						<input class="form-control alignleft" type="text" placeholder="Search for anything you want help with..."/>
						<button class="btn alignleft btn-cnct" type="submit">Search</button>
					</form>
				</div>
			</div>
		</div><br/>
		<div class="container-fluid">
			<h2>Browse help Topics</h2><hr/>
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<a href="" class="action-link">
					<div class="bg-inverse text-white faqHelpContainer">
						<div class="faqHelpContainerImage">
							<img src="images/icons/ic_account_circle_white_48dp.png" width="75"/>
						</div>
						<hr class="hr-white"/>
						<div class="faqHelpContainerDescription">
							<h2>Your Account</h2><br/><br/><br/>
						</div>
					</div></a>
				</div>
				<div class="col-sm-6 col-md-3">
					<a href="" class="action-link">
					<div class="bg-material-red text-white faqHelpContainer">
						<div class="faqHelpContainerImage">
							<img src="images/icons/ic_description_white_48dp.png" width="75"/>
						</div>
						<hr class="hr-white"/>
						<div class="faqHelpContainerDescription">
							<h2>Legal & Privacy</h2><br/><br/><br/>
						</div>
					</div><a/>
				</div>
				<div class="col-sm-6 col-md-3">
					<a href="" class="action-link">
					<div class="bg-material-blue text-white faqHelpContainer">
						<div class="faqHelpContainerImage">
							<img src="images/icons/ic_business_white_48dp.png" width="75"/>
						</div>
						<hr class="hr-white"/>
						<div class="faqHelpContainerDescription">
							<h2>Business and Website</h2>
						</div>
					</div><a/>
				</div>
				<div class="col-sm-6 col-md-3">
					<a href="" class="action-link">
					<div class="bg-material-pink text-white faqHelpContainer">
						<div class="faqHelpContainerImage">
							<img src="images/icons/ic_report_problem_white_48dp.png" width="75"/>
						</div>
						<hr class="hr-white"/>
						<div class="faqHelpContainerDescription">
							<h2>Fix a Problem</h2><br/><br/><br/>
						</div>
					</div><a/>
				</div>
			</div>
			
			<!--2nd Row-->
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<a href="" class="action-link">
					<div class="bg-material-brown text-white faqHelpContainer">
						<div class="faqHelpContainerImage">
							<img src="images/icons/ic_security_white_48dp.png" width="75"/>
						</div>
						<hr class="hr-white"/>
						<div class="faqHelpContainerDescription">
							<h2>Safety and Standards</h2>
						</div>
					</div><a/>
				</div>
				<div class="col-sm-6 col-md-3">
					<a href="" class="action-link">
					<div class="bg-material-yellow text-white faqHelpContainer">
						<div class="faqHelpContainerImage">
							<img src="images/icons/ic_history_white_48dp.png" width="75"/>
						</div>
						<hr class="hr-white"/>
						<div class="faqHelpContainerDescription">
							<h2>Books-Avenue Basics</h2>
						</div>
					</div><a/>
				</div>
				<div class="col-sm-6 col-md-3">
					<a href="" class="action-link">
					<div class="bg-darker text-white faqHelpContainer">
						<div class="faqHelpContainerImage">
							<img src="images/icons/ic_store_white_48dp.png" width="75"/>
						</div>
						<hr class="hr-white"/>
						<div class="faqHelpContainerDescription">
							<h2>Shopping on Books-Avenue</h2>
						</div>
					</div><a/>
				</div>
				<div class="col-sm-6 col-md-3">
					<a href="" class="action-link">
					<div class="bg-inverse text-white faqHelpContainer">
						<div class="faqHelpContainerImage">
							<img src="images/icons/ic_gps_fixed_white_48dp.png" width="75"/>
						</div>
						<hr class="hr-white"/>
						<div class="faqHelpContainerDescription">
							<h2>A guide to Books-Avenue</h2>
						</div>
					</div><a/>
				</div>
			</div>
		</div><br/>
		<div class="bg-light">
			<br/>
			<h2 class="rob-regular text-center">What do you think of this Guide? Tell us by giving <a href="" class="action-link">feedback</a></h2>
			<br/>
		</div>
		
	</div>
	
<!--Footer-->	
<?php
	include_once('includes/footer.php');
?>
</body>
</html>