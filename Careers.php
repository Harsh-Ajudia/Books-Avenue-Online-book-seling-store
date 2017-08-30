	
<?php
	session_start();
	if(isset($_SESSION['uid'])){
		include_once('includes/headerLogin.php');
	}
	else
		include_once('includes/header.php');
?>
	<br><br>
	
	<div class="topspc">
		
		<div class="jumbotron cnctimg bg-material-brown">
			<div class="container text-center">
				<h1>Join Us for a Better Tomorrow</h1><hr class="hr-white"/>
				<h4>There's an Opportunity for Everyone</h4>
				<div class="search_bar">
					<form class="form-inline my-2 my-lg-1 faqSearch">
						<input class="form-control alignleft" type="text" placeholder="Search for Jobs or career"/>
						<button class="btn alignleft btn-cnct" type="submit">Search</button>
					</form>
				</div>
			</div>
		</div>
		<div id="carouselExampleIndicatorsCareers1" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicatorsCareers1" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicatorsCareers1" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicatorsCareers1" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicatorsCareers1" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicatorsCareers1" data-slide-to="4"></li>
					<li data-target="#carouselExampleIndicatorsCareers1" data-slide-to="5"></li>
					<li data-target="#carouselExampleIndicatorsCareers1" data-slide-to="6"></li>
					<li data-target="#carouselExampleIndicatorsCareers1" data-slide-to="7"></li>
					<li data-target="#carouselExampleIndicatorsCareers1" data-slide-to="8"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<img class="d-block img-fluid" src="images/slider/blue.png" alt="First slide">
							<div class="carousel-caption d-none d-md-block text-left">
								<h1>Software Development</h1>
								We hire the best minds in technology to innovate, build and break things for the benefit of our customers. That intense focus on customers is why we are one of the world’s most beloved brands – it’s part of our company DNA. Our challenges are big - impacting millions...<br/><br/>
								<button class="btn alignleft btn-cnct" type="submit">Apply Now</button>
							</div>
					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid" src="images/slider/black.png" alt="Second slide">
							<div class="carousel-caption d-none d-md-block text-left">
								<h1>UI/UX Designer</h1>
								We hire the best minds in technology to innovate, build and break things for the benefit of our customers. That intense focus on customers is why we are one of the world’s most beloved brands – it’s part of our company DNA. Our challenges are big - impacting millions...<br/><br/>
								<button class="btn alignleft btn-cnct" type="submit">Apply Now</button>
							</div>
					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid" src="images/slider/blue.png" alt="Second slide">
							<div class="carousel-caption d-none d-md-block text-left">
								<h1>Graphics Designer</h1>
								We hire the best minds in technology to innovate, build and break things for the benefit of our customers. That intense focus on customers is why we are one of the world’s most beloved brands – it’s part of our company DNA. Our challenges are big - impacting millions...<br/><br/>
								<button class="btn alignleft btn-cnct" type="submit">Apply Now</button>
							</div>
					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid" src="images/slider/red.png" alt="Second slide">
							<div class="carousel-caption d-none d-md-block text-left">
								<h1>Web Designer</h1>
								We hire the best minds in technology to innovate, build and break things for the benefit of our customers. That intense focus on customers is why we are one of the world’s most beloved brands – it’s part of our company DNA. Our challenges are big - impacting millions...<br/><br/>
								<button class="btn alignleft btn-cnct" type="submit">Apply Now</button>
							</div>
					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid" src="images/slider/black.png" alt="Third slide">
							<div class="carousel-caption d-none d-md-block text-left">
								<h1>Database Administrator</h1>
								We hire the best minds in technology to innovate, build and break things for the benefit of our customers. That intense focus on customers is why we are one of the world’s most beloved brands – it’s part of our company DNA. Our challenges are big - impacting millions...<br/><br/>
								<button class="btn alignleft btn-cnct" type="submit">Apply Now</button>
							</div>
					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid" src="images/slider/red.png" alt="Third slide">
							<div class="carousel-caption d-none d-md-block text-left">
								<h1>Sales Executive</h1>
								We hire the best minds in technology to innovate, build and break things for the benefit of our customers. That intense focus on customers is why we are one of the world’s most beloved brands – it’s part of our company DNA. Our challenges are big - impacting millions...<br/><br/>
								<button class="btn alignleft btn-cnct" type="submit">Apply Now</button>
							</div>
					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid" src="images/slider/blue.png" alt="Third slide">
							<div class="carousel-caption d-none d-md-block text-left">
								<h1>Marketing Executive</h1>
								We hire the best minds in technology to innovate, build and break things for the benefit of our customers. That intense focus on customers is why we are one of the world’s most beloved brands – it’s part of our company DNA. Our challenges are big - impacting millions...<br/><br/>
								<button class="btn alignleft btn-cnct" type="submit">Apply Now</button>
							</div>
					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid" src="images/slider/black.png" alt="Third slide">
							<div class="carousel-caption d-none d-md-block text-left">
								<h1>Jobs in India</h1>
								We hire the best minds in technology to innovate, build and break things for the benefit of our customers. That intense focus on customers is why we are one of the world’s most beloved brands – it’s part of our company DNA. Our challenges are big - impacting millions...<br/><br/>
								<button class="btn alignleft btn-cnct" type="submit">Search Jobs</button>
							</div>
					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid" src="images/slider/blue.png" alt="Third slide">
							<div class="carousel-caption d-none d-md-block text-left">
								<h1>Jobs in Foreign countries</h1>
								We hire the best minds in technology to innovate, build and break things for the benefit of our customers. That intense focus on customers is why we are one of the world’s most beloved brands – it’s part of our company DNA. Our challenges are big - impacting millions...<br/><br/>
								<button class="btn alignleft btn-cnct" type="submit">Search Jobs</button>
							</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicatorsCareers1" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicatorsCareers1" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
				</a>
			</div>
			
			<hr/>
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<a href="" class="action-link">
					<div class="bg-inverse text-white faqHelpContainer">
						<div class="faqHelpContainerImage">
							<img src="images/icons/ic_school_white_48dp.png" width="75"/>
						</div>
						<hr class="hr-white"/>
						<div class="faqHelpContainerDescription">
							<h2>University Recruiting</h2>
						</div>
					</div><a/>
				</div>
				<div class="col-sm-6 col-md-3">
					<a href="" class="action-link">
					<div class="bg-material-red text-white faqHelpContainer">
						<div class="faqHelpContainerImage">
							<img src="images/icons/ic_location_city_white_48dp.png" width="75"/>
						</div>
						<hr class="hr-white"/>
						<div class="faqHelpContainerDescription">
							<h2>Remote career opportunities</h2>
						</div>
					</div><a/>
				</div>
				<div class="col-sm-6 col-md-3">
					<a href="" class="action-link">
					<div class="bg-material-green text-white faqHelpContainer">
						<div class="faqHelpContainerImage">
							<img src="images/icons/ic_local_convenience_store_white_48dp.png" width="75"/>
						</div>
						<hr class="hr-white"/>
						<div class="faqHelpContainerDescription">
							<h2>Full Time <br/>Jobs</h2>
						</div>
					</div><a/>
				</div>
				<div class="col-sm-6 col-md-3">
					<a href="" class="action-link">
					<div class="bg-material-pink text-white faqHelpContainer">
						<div class="faqHelpContainerImage">
							<img src="images/icons/ic_store_white_48dp.png" width="75"/>
						</div>
						<hr class="hr-white"/>
						<div class="faqHelpContainerDescription">
							<h2>Fulfillment Centre hiring</h2>
						</div>
					</div><a/>
				</div>
			</div><hr/>
			<div id="carouselExampleIndicatorsCareerXP" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicatorsCareerXP" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicatorsCareerXP" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicatorsCareerXP" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<img class="d-block img-fluid" src="images/slider/red.png" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
							<img src="images/icons/ic_account_circle_white_48dp.png" width="120"/><br/><h2>Mr. X</h2><br/>We're a company of pioneers. It's our job to make bold bets, and we get our energy from inventing on behalf of customers. Success is measured against the possible, not the probable.
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid" src="images/slider/blue.png" alt="Second slide">
						<div class="carousel-caption d-none d-md-block">
							<img src="images/icons/ic_account_circle_white_48dp.png" width="150"/><br/><h2>Mr. Y</h2>We're a company of pioneers. It's our job to make bold bets, and we get our energy from inventing on behalf of customers. Success is measured against the possible, not the probable.
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid" src="images/slider/red.png" alt="Third slide">
						<div class="carousel-caption d-none d-md-block">
							<img src="images/icons/ic_account_circle_white_48dp.png" width="150"/><br/><h2>Mr. Z</h2>We're a company of pioneers. It's our job to make bold bets, and we get our energy from inventing on behalf of customers. Success is measured against the possible, not the probable.
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicatorsCareerXP" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicatorsCareerXP" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
				</a>
			</div>
			
			
	</div>
	
<!--Footer-->	
<?php
	include_once('includes/footer.php');
?>
</body>
</html>