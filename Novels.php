<?php
$page="preferences";
session_start();
if(!isset($_SESSION['uid'])){
	include_once('includes/header.php');
	//header('Location:Login.php');
}
else{
	include_once('includes/headerLogin.php');
}
$uid=$_SESSION['uid'];
require_once('includes/dbconfig.php');
require_once('includes/dbconnect.php');
?>
<?php
	$sort="name";
	$sby="ASC";
	if(isset($_POST['filter'])){
		$sort=$_POST['filter'];
		$sby=$_POST['sby'];
	}
	$query1="select * from product where type='Novels' ORDER BY $sort $sby";
	$result1=mysqli_query($link,$query1) or die("Error fetching data.".mysqli_error($link));
?>
<br/><br/><br/><hr/>
<div class="container mt-5">
	<div class="row">
		<div class="col-sm-12">
			<form class="form-inline rob-regular" method="POST">
			  <label class="mr-sm-2" for="inlineFormCustomSelect"><h6>Sort by: </h6></label>
			  <select name="filter" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
				<option value="name">Name</option>
				<option value="author">Author</option>
				<option value="finalprice">Price</option>
				<option value="ratings">Ratings</option>
				<option value="discount">discount</option>
				<option value="country">country</option>
			  </select>

			  <select name="sby" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
				<option value="ASC">&#8593;</option>
				<option value="DESC">&#8595;</option>
			  </select>

			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
	<hr/>
	<div class="row">
		<div class="card-deck">
		  	<?php
		  	while($bookdetails=mysqli_fetch_assoc($result1)){
				?>
    <div class="col-sm-3 mb-4">
					<div style="border:none;" class="card text-center rob-regular">
						<h6 class="m-1 text-material-red">Discount: <?php $a="2"; echo $bookdetails['discount'];?>% off!</h6>
						<a href="product.php?bookid=<?php echo $bookdetails['productId'];?>"><img class="productImage mb-0 card-img-top img-responsive productcenter" width="70%" src="<?php echo $bookdetails['image']; ?>" alt="<?php echo $bookdetails['name']?>"/>
						<div class="card-block m-2 p-0">
							<h6 class="m-0 text-center text-material-blue"><a href="product.php?bookid=<?php echo $bookdetails['productId'];?>"><?php echo $bookdetails['name']; ?></a></h6><hr class=" m-1"/>
							
							<h6 class="m-0 text-material-green">Price: &#8377; <strike><?php echo $bookdetails['price'];?></strike> <?php echo $bookdetails['finalprice'];?>/-</h6>
						  <h6 class="m-0"> <span class="form-inline badge bg-inverse"><?php echo $bookdetails['ratings']?><img class="" width="10" src="images/icons/ic_grade_white_48dp.png"/></span> Ratings</h6>
						</div>
					 </div>
			    </div>
				  
		    <?php
			}
			?>
		</div>
	</div>
</div>
<br/>
<?php
include_once('includes/footer.php');
?>