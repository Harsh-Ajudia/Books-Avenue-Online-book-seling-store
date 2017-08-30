
<?php
	$page="aboutus";
	session_start();
	if(isset($_SESSION['uid'])){
		include_once('includes/headerLogin.php');
	}
	else
		include_once('includes/header.php');
?>
	
	<br><br>
	
	<div class="topspc">
		
		<div class="jumbotron cnctimg cnctimgblue topspc">
			<div class="container text-center">
				<h1><strong>About Us</strong></h1><hr class="hr-white"/>
				<h3>Who we are and what are we underneath does not matter</h3><br/>
				<h2>What matters is what we do and that is what defines us</h2><hr class="hr-white"/>
				<h3>" The right book in the right hands at the right time can change the world. "</h3>
			</div>
		</div><br/>
		<div class="row">
			<div class="col-sm-4 col-md-2" >
				<a href="" class="action-link"><div class="boxAbout bg-material-red">
					About Us
				</div></a>
			</div>
			<div class="col-sm-4 col-md-2">
				<a href="" class="action-link"><div class="boxAbout bg-material-green">
					Jobs/Carrers
				</div></a>
			</div>
			<div class="col-sm-4 col-md-2" >
				<a href="" class="action-link"><div class="boxAbout bg-material-blue">
					Contact
				</div></a>
			</div>
			<div class="col-sm-4 col-md-2" >
				<a href="" class="action-link"><div class="boxAbout bg-material-orange">
					FAQ
				</div></a>
			</div>
			<div class="col-sm-4 col-md-2" >
				<a href="" class="action-link"><div class="boxAbout bg-material-brown">
					Our Team
				</div></a>
			</div>
			<div class="col-sm-4 col-md-2" >
				<a href="" class="action-link"><div class="boxAbout bg-material-pink">
					24X7
				</div></a>
			</div>
		</div>
		<hr/>
			<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<img class="d-block img-fluid" src="images/slider/blue.png" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
							<h2>Company image 1 here</h2>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid" src="images/slider/red.png" alt="Second slide">
						<div class="carousel-caption d-none d-md-block">
							<h2>Company image 3 here</h2>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid" src="images/slider/black.png" alt="Third slide">
						<div class="carousel-caption d-none d-md-block">
							<h2>Company image 2 here</h2>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
				</a>
			</div>
		<div class="jumbotron cnctimg cnctimgblue topspc">
			<div class="container text-center"><br/><br/>
				<h1><strong>Our Mission</strong></h1><hr class="hr-white"/>
				<h2>Our mission is to help people find and share the books they love.</h2/><br/><br/>
			</div>
		</div>
		<div class="jumbotron cnctimg cnctimgblue topspc">
			<div class="container text-center">
				<h1><strong>Who we are</strong></h1><hr class="hr-white"/>
				<h2>Books Avenue is the world’s largest site for selling and buying books, recommendations and reading. Books Avenue launched in January 2009.</h2>
			</div>
		</div><br/>
		<div class="row">
			<div class="col-sm-4 col-md-2" >
				<a href="" class="action-link"><div class="factDisplay bg-material-red">
					220 Million<br/>Users
				</div></a>
			</div>
			<div class="col-sm-4 col-md-2">
				<a href="" class="action-link"><div class="factDisplay bg-material-green">
					1.5 Billion<br/>Books
				</div></a>
			</div>
			<div class="col-sm-4 col-md-2" >
				<a href=""class="action-link"><div class="factDisplay bg-material-blue">
					50 Million<br/>Reviews
				</div></a>
			</div>
			<div class="col-sm-4 col-md-2" >
				<a href="" class="action-link"><div class="factDisplay bg-material-orange">
					250<br/>Employees
				</div></a>
			</div>
			<div class="col-sm-4 col-md-2" >
				<a href=""class="action-link"><div class="factDisplay bg-material-brown">
					7 years<br/>Experience
				</div></a>
			</div>
			<div class="col-sm-4 col-md-2" >
				<a href="" class="action-link"><div class="factDisplay bg-material-pink">
					d
				</div></a>
			</div>
		</div><hr/>

	</div>
	
<!--Footer-->
<?php
	include_once('includes/footer.php');
?>
</body>
</html>