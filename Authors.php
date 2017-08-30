	
<?php
	$page="authors";
	session_start();
	if(isset($_SESSION['uid'])){
		include_once('includes/headerLogin.php');
	}
	else
		include_once('includes/header.php');
?>
	<br><br>
	
	<div class="topspc">
		<div class="jumbotron cnctimg bg-success topspc">
			<div class="container text-center">
				<h1><strong>Authors</strong></h1><hr class="hr-white"/>
				<div class="search_bar">
					<form class="form-inline my-2 my-lg-1 faqSearch">
						<input class="form-control alignleft" type="text" placeholder="Search for authors..."/>
						<button class="btn alignleft btn-cnct" type="submit">Search</button><br/>
						“Making people believe the unbelievable is no trick; it’s work. … Belief and reader absorption come in the details: An overturned tricycle in the gutter of an abandoned neighborhood can stand for everything.”<br/>
					</form>
				</div>
			</div>
		</div><hr/>
		<div class="container">
			<h3 class="text-center">Search Author Alphabetically</h3><hr class="hr-black"/>
				<ul class="lexicography text-center">
					<a href=""> A </a><a href=""> B </a><a href=""> C </a><a href=""> D </a><a href=""> E </a><a href=""> F </a><a href=""> G </a>
					<a href=""> H </a><a href=""> I </a><a href=""> J </a><a href=""> K </a><a href=""> L </a><a href=""> M </a><a href=""> N </a>
					<a href=""> O </a><a href=""> P </a><a href=""> Q </a><a href=""> R </a><a href=""> S </a><a href=""> T </a><a href=""> U </a>
					<a href=""> V </a><a href=""> W </a><a href=""> X </a><a href=""> Y </a><a href=""> Z </a>
				</ul>
			<hr/>
		</div><br/>
		<div class="row">
				<div class="col-sm-12 col-md-6">
					<a href="" class="action-link">
					<div class="text-white AuthorsContainer">
						<div class="authorsContainerImage">
							<img src="images/authors/dan-brown.jpg" width="150" height="180"/>
						</div>
						<div class="authorsContainerDescription">
							<h2>Dan Brown</h2><hr/>
							Daniel Gerhard "Dan" Brown (born June 22, 1964) is an American author of thriller fiction who is best known for the 2003 bestselling novel The Da Vinci Code. Brown's novels are treasure hunts set in a 24-hour period, and feature the recurring themes of cryptography, keys, symbols, codes, and conspiracy theories. His books have been translated into 52 languages, and as of 2012, sold over 200 million copies.
						</div>
					</div></a>
				</div>
				<div class="col-sm-12 col-md-6">
					<a href="" class="action-link">
					<div class="text-white AuthorsContainer">
						<div class="authorsContainerImage">
							<img src="images/authors/jk-rowling.jpg" width="150" height="180"/>
						</div>
						<div class="authorsContainerDescription">
							<h2>J.K. Rowling</h2><hr/>
							Joanne "Jo" Rowling, pen names J. K. Rowling and Robert Galbraith, is a British novelist, screenwriter and film producer best known as the author of the Harry Potter fantasy series. The books have gained worldwide attention, won multiple awards, and sold more than 400 million copies. They have become the best-selling book series in history<br/><br/>
						</div>
					</div><a/>
				</div>
			</div>
	</div>
	
<!--Footer-->	
<?php
	include_once('includes/footer.php');
?>
		<div class="container footerDefault bg-default">
			<div class="row text-white">
			  <div class="col-md-3">
					<h3>Popular links</h3><hr class="hr-white"/>
				  <ul class="list-group">
					  <li class="list-group-item list-group-item-success"><a href="" >Authors</a></li>
					  <li class="list-group-item list-group-item-success"><a href="" >Publishers</a></li>
					  <li class="list-group-item list-group-item-success"><a href="" >Novels</a></li>
					  <li class="list-group-item list-group-item-success"><a href="" >Magazines</a></li>
					  <li class="list-group-item list-group-item-success"><a href="" >Lifestyle</a></li>
					  <li class="list-group-item list-group-item-success"><a href="" >Education</a></li>
					  <li class="list-group-item list-group-item-success"><a href="" >Children</a></li>
					</ul>
			  </div>
			  
			  <div class="col-md-3">
					<h3>Books-Avenue</h3><hr class="hr-white"/>
					<ul class="list-group">
					  <li class="list-group-item list-group-item-success"><a href="" >Home</a></li>
					  <li class="list-group-item list-group-item-success"><a href="" >About Us</a></li>
					  <li class="list-group-item list-group-item-success"><a href="" >Contact Us</a></li>
					  <li class="list-group-item list-group-item-success"><a href="" >Carrers</a></li>
					  <li class="list-group-item list-group-item-success"><a href="" >FAQ</a></li>
					  <li class="list-group-item list-group-item-success"><a href="" >Login</a></li>
					</ul>
			  </div>
			  
			  <div class="col-md-3">
			  <h3>Help</h3><hr class="hr-white"/>
				  <ul class="list-group">
					  <li class="list-group-item list-group-item-success"><a href="" >Payments</a></li>
					  <li class="list-group-item list-group-item-success"><a href="" >24 X 7 Support</a></li>
					  <li class="list-group-item list-group-item-success"><a href="" >Terms and Conditions</a></li>
					  <li class="list-group-item list-group-item-success"><a href="" >Privacy and Policy</a></li>
					  <li class="list-group-item list-group-item-success"><a href="" >FAQ</a></li>
					  <li class="list-group-item list-group-item-success"><a href="" >Login</a></li>
    			  </ul>
			  </div>
			  
			  <div class="col-md-3">
			  <h3>Make Money</h3><hr class="hr-white"/>
				  <ul class="list-group">
					  <li class="list-group-item list-group-item-success"><a href="" >Sell your products</a></li>
					  <li class="list-group-item list-group-item-success"><a href="" >Become an Affliate</a></li>
					  <li class="list-group-item list-group-item-success"><a href="" >Advertise</a></li>
					  <li class="list-group-item list-group-item-success"><a href="" >Self-Publish</a></li>
					  <li class="list-group-item list-group-item-success"><a href="" >Become Vendor</a></li>
					</ul>
			  </div>
			</div>
			<hr class="hr-white"/>
			<div class="row">
				  <div class="col-sm-2">
						<ul class="list-inline social-buttons" align="center">
							<li><a href="#"><i class="fa fa-google-plus-official fa-2x socialicons"></i></a></li>
						</ul>
				  </div>
				  <div class="col-sm-2">
						<ul class="list-inline social-buttons" align="center">
							<li><a href="#"><i class="fa fa-facebook-official fa-2x socialicons"></i></a></li>
						</ul>
				  </div>
				  <div class="col-sm-2">
						<ul class="list-inline social-buttons" align="center">
							<li><a href="#"><i class="fa fa-twitter fa-2x socialicons"></i></a></li>
						</ul>
				  </div>
				  <div class="col-sm-2">
						<ul class="list-inline social-buttons" align="center">
							<li><a href="#"><i class="fa fa-instagram fa-2x socialicons"></i></a></li>
						</ul>
				  </div>
				  <div class="col-sm-2">
						<ul class="list-inline social-buttons" align="center">
							<li><a href="#"><i class="fa fa-linkedin fa-2x socialicons"></i></a></li>
						</ul>
				  </div>
				  <div class="col-sm-2">
						<ul class="list-inline social-buttons" align="center">
							<li><a href="#"><i class="fa fa-youtube-play fa-2x socialicons"></i></a></li>
						</ul>
				  </div>
			</div>
			<div class="clearfix"></div>
			<hr class="hr-white"/>
			<div class="booksavenuecountry">
				<div class="imagecenter form-inline">
					<h2 class="text-white">Books Avenue</h2>
				</div>
				<div class="row">
				  <div class="col-sm-2">
					<ul class="list-inline" align="center">
							<li><a href="#">Australia</a></li>
					</ul>
				  </div>
				  <div class="col-sm-2">
					<ul class="list-inline" align="center">
							<li><a href="#">Canada</a></li>
					</ul>
				  </div>
				  <div class="col-sm-2">
					<ul class="list-inline" align="center">
							<li><a href="#">India</a></li>
					</ul>
				  </div>
				  <div class="col-sm-2">
					<ul class="list-inline" align="center">
							<li><a href="#">Japan</a></li>
					</ul>
				  </div>
				  <div class="col-sm-2">
					<ul class="list-inline" align="center">
							<li><a href="#">Mexico</a></li>
					</ul>
				  </div>
				  <div class="col-sm-2">
					<ul class="list-inline" align="center">
							<li><a href="#">United Kingdom</a></li>
					</ul>
				  </div>
				</div>
			</div>
		</div>
		<div class="copyright">
				<h5 class="text-center">||  &copy;  2009 - 2017   ||   BOOKS AVENUE   ||   ALL RIGHTS RESERVED  ||</h5>
		</div>
	</footer>
</body>
</html>