<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>
	<!-- jQuery first, then Tether, then Bootstrap JS. -->
	<script src="jquery/jquery-3.1.1.slim.min.js"></script>
	<script src="js/tether.min.js" ></script>
	<script src="js/bootstrap.min.js"></script>
<div class="allheader">
	<!--Header | Search-->
		<div class="search_bar">
			<form class="form-inline my-2 my-lg-1">
				<input class="form-control alignleft" type="text" placeholder="Search...">
				<button class="btn alignleft mrgrght" type="submit"><img src="images/icons/ic_search_white_48dp.png" width="25"/> Search</button>
				<?php
				error_reporting();
				if(isset($_SESSION['uid']) && !empty($_SESSION['uid'])){
					echo '<h5>';
					echo '</h5>';
				}
				?>
				<div class="btn-group">
				  <button type="button" class="btn dropdown-toggle btnfull" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php 
					echo $_SESSION['firstName'];
					?>
				  </button>
				  
					  <div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="#"><span><img src="images/icons/ic_local_grocery_store_black_48dp.png" width="25" align="left"/></span>   <h5 class="nospace"> My Cart</h5></a>
						<a class="dropdown-item" href="#"><span><img src="images/icons/ic_view_list_black_48dp.png" width="25" align="left"/></span>   <h5 class="nospace"> WishList</h5></a>
						<a class="dropdown-item" href="Preferences.php"><span><img src="images/icons/ic_settings_black_48dp.png" width="25" align="left"/></span>   <h5 class="nospace"> Preferences</h5></a>
						<a class="dropdown-item" href="includes/logout.php"><span><img src="images/icons/ic_power_settings_new_black_48dp.png" width="25" align="left"/></span>   <h5 class="nospace"> Logout</h5></a>
						<!--div class="dropdown-divider"></div-->
					  </div>
				</div>
			</form>
		</div>
		<!--Header | navbar-->
	<header>
		<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="index.php"><img src="images/icons/ic_local_library_white_48dp.png" width="40" class="brandlogo d-inline-block align-top" alt=""> Books-Avenue</a>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a class="nav-link <?php if($page=="index") echo 'active' ?>" href="index.php">Home</a></li>
					<li class="nav-item "><a class="nav-link <?php if($page=="authors") echo 'active' ?>" href="Authors.php">Authors</a></li>
					<li class="nav-item "><a class="nav-link <?php if($page=="publishers") echo 'active' ?>" href="Publishers.php">Publishers</a></li>
					<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle <?php if($page=="categories") echo 'active' ?>" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>							
								<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<li class="dropdown-submenu">
										<a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="Novels.php">Novels</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
											<a class="dropdown-item" href="Novels.php">Cat 1</a>
											<a class="dropdown-item" href="#">Cat 2</a>
											<a class="dropdown-item" href="#">Cat 3</a>
										</div>
									</li>
									<li class="dropdown-submenu">
										<a class="dropdown-item" href="Magazines.php">Magazines</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
											<a class="dropdown-item" href="#">Cat 1</a>
											<a class="dropdown-item" href="#">Cat 2</a>
											<a class="dropdown-item" href="#">Cat 3</a>
										</div>
									</li>
									<li class="dropdown-submenu">
										<a class="dropdown-item" href="Lifestyles.php">Lifestyles</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
											<a class="dropdown-item" href="#">Cat 1</a>
											<a class="dropdown-item" href="#">Cat 2</a>
											<a class="dropdown-item" href="#">Cat 3</a>
										</div>
									</li>
									<li class="dropdown-submenu">
										<a class="dropdown-item" href="Education.php">Education</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
											<a class="dropdown-item" href="#">Cat 1</a>
											<a class="dropdown-item" href="#">Cat 2</a>
											<a class="dropdown-item" href="#">Cat 3</a>
										</div>
									</li>
									<li class="dropdown-submenu">
										<a class="dropdown-item" href="Children.php">Children</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
											<a class="dropdown-item" href="#">Cat 1</a>
											<a class="dropdown-item" href="#">Cat 2</a>
											<a class="dropdown-item" href="#">Cat 3</a>
										</div>
									</li>
								</ul>
					</li>
					<li class="nav-item "><a class="nav-link <?php if($page=="aboutus") echo 'active' ?>" href="About.php">About Us</a></li>
					<li class="nav-item "><a class="nav-link <?php if($page=="contactus") echo 'active' ?>" href="Contact.php">Contact Us</a></li>
					<li class="nav-item "><a class="nav-link <?php if($page=="faq") echo 'active' ?>" href="FAQ.php">FAQ</a></li>
				</ul> 
			</div>
		</nav>
	</header>
	</div>