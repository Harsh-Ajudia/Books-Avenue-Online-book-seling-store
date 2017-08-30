<?php
$page="adminIndex";
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
		  <h3 class="text-material-red">Dashboard</h3>
       	  <hr/>
        </main>
      </div>
    </div>
<?php
include_once('includes/footer.php');
?>
  </body>
</html>
