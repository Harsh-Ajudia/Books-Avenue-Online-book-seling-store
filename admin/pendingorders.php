<?php
$page="pendingOrders";
session_start();
if(!isset($_SESSION['auid'])){
	header('Location:Login.php');
}
$auid=$_SESSION['auid'];
include_once('includes/header.php');
include_once('includes/sideHeader.php');
require_once('../includes/dbconfig.php');
require_once('../includes/dbconnect.php');
?>
<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
	<h4 class="text-right">Welcome <?php echo $aname;?></h4>
	<hr/>
	<h3 class="text-material-red">Pending Orders</h3>
	<hr/>
</main>