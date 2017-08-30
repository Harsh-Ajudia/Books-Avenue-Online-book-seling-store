<?php
$page="preferences";
session_start();
if(!isset($_SESSION['auid'])){
	header('Location:Login.php');
}
include_once('includes/header.php');
include_once('includes/sideHeader.php');
?>
	  <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
          <h4 class="text-right">Welcome <?php echo $aname;?></h4>
		  <hr/>
		  <h3 class="text-material-red">Preferences and Settings</h3>
		  <hr/>
		  <!--Page Content-->
		  <a href="changePassword.php"><h4>Change Password</h4></a><br/>
		  <a href="profileDetails.php"><h4>Change Profile Details</h4></a>
		  <!--Page Content-->
        </main>
      </div>
    </div>
<?php
include_once('includes/footer.php');
?>
  </body>
</html>
