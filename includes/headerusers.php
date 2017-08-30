<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse topspc">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="index.php">Books-Avenue</a>
			<div class="collapse navbar-collapse " id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto ">
					<li class="nav-item"><a class="nav-link <?php if($page=="") echo 'active' ?>" href="personalinfo.php">Personal Info</a></li>
					<li class="nav-item "><a class="nav-link <?php if($page=="") echo 'active' ?>" href="Authors.php">Settings</a></li>					
					<li class="nav-item "><a class="nav-link <?php if($page=="") echo 'active' ?>" href="Authors.php">Orders</a></li>				
					<li class="nav-item "><a class="nav-link <?php if($page=="") echo 'active' ?>" href="Authors.php">Wishlist</a></li>				
					<li class="nav-item "><a class="nav-link <?php if($page=="") echo 'active' ?>" href="Authors.php">Review & Ratings</a></li>				
					<li class="nav-item "><a class="nav-link <?php if($page=="") echo 'active' ?>" href="includes/Logout.php">Logout</a></li>				
				</ul> 
			</div>
		</nav>