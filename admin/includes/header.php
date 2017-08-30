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
	<link href="css/admin.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
  </head>
 <body>
	<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
	  <a class="navbar-brand" href="index.php"><img src="../images/icons/ic_local_library_white_48dp.png" width="40" class="brandlogo d-inline-block align-top" alt=""> Books-Avenue</a>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php if($page=="adminindex") echo 'active' ?>">
            <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
          </li>
		<li class="nav-item <?php if($page=="register") echo 'active' ?>">
            <a class="nav-link" href="register.php">Register</a>
          </li>		  
          <li class="nav-item <?php if($page=="index") echo 'active' ?>">
            <a class="nav-link" href="#">Help</a>
          </li>
        </ul>
        
          <!--input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button-->
				<?php
				error_reporting();
				if(isset($_SESSION['auid']) && !empty($_SESSION['auid'])){
					$aname=$_SESSION['uname'];
					$email=$_SESSION['email'];
					$avatar=$_SESSION['avatar'];
				}
				else
					$aname="";
				?>
				<ul class="nav pull-right">
						<li class="avatarname text-white"><?php echo $email;?></li>
						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?php echo $avatar?>" class="nav-avatar" />
								<b class="caret"></b>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								
								<a class="dropdown-item" href="preferences.php"><span><img src="../images/icons/ic_settings_black_48dp.png" width="25" align="left"/></span>   <h5 class="nospace"> Preferences</h5></a>
								<a class="dropdown-item" href="includes/logout.php"><span><img src="../images/icons/ic_exit_to_app_black_48dp.png" width="25" align="left"/></span>   <h5 class="nospace"> Logout</h5></a>
								<!--div class="dropdown-divider"></div-->
						  </div>
						</li>
				</ul>
				
    </nav>
	<div class="container-fluid">
      <div class="row">