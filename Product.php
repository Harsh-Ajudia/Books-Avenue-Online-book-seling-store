<?php
	$page="product";
	session_start();
	if(isset($_SESSION['uid'])){
		include_once('includes/headerLogin.php');
	}
	else
		include_once('includes/header.php');
	
	$bookid=(integer) $_GET['bookid'];
	$uid=$_SESSION['uid'];
	require_once('includes/dbconfig.php');
	require_once('includes/dbconnect.php');
	$query="select * from product where productId='$bookid'";
	$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
	$bookdetails=mysqli_fetch_assoc($result);
	

	if(isset($_POST['quantityselected'])){
			$quantityselected=$_POST['quantityselected'];
			$date=date('M d, Y');
			
		$find="SELECT * FROM product";
		
		if(isset($_POST['Add'])){
			$queryAdd="INSERT INTO orders (productID, userid, quantity, orderdate) VALUES ('$bookid', '$uid', '$quantityselected', '$date')";
			mysqli_query($link,$queryAdd) or die("Error updating data.".mysqli_error($link));
			
		}
		else{
			$querybuy="INSERT INTO orders (productID, userid, quantity, orderdate) VALUES ('$bookid', '$uid', '$quantityselected', '$date')";
			mysqli_query($link,$querybuy) or die("Error updating data.".mysqli_error($link));
			header('Location: Checkout.php');
		}
	}
	
?>
	<br><br>
		<div class="topspc">
			<div class="row productpad">
				<div class="col-6 col-md-4">
					<div class="productImageContainer">
						<div class="productimage">
							<img class="productimage pdtimg productImage" src="<?php echo $bookdetails['image'];?>"/>
						</div><hr class="hr-black"/>
						
						<form name="addtocart" method="POST">
							<div class="productQuantity">
							  <select name="quantityselected" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
								<option selected>Quantity</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							  </select>
								</div>
								
								<a href="#"><button type="submit" class="text-center btn btn-primary">
								<span aria-hidden="true"><img class="" name="Add" width="25" src="images/icons/ic_add_shopping_cart_white_48dp.png"/></span>
								Add to Cart</button></a>
								
								<a href="#"><button type="submit" class="text-center btn btn-success" href="#e" type="button">
								<span aria-hidden="true"><img width="25" name="Buy" src="images/icons/ic_input_white_48dp.png"/></span>
								Buy Now</button></a>
						</form>
						
						<div class="clearfix"></div>
					</div>
				</div>
				
				<div class="clearfix hidden-sm-up"></div>
				<div class="col-12 col-md-8">
					<div class="productDetailsContainer">
						<div class="">
								<div class="row">
									<div class="col-8">
										<h3><?php echo $bookdetails['name'];?></h3>
										<h5>by <?php echo $bookdetails['author'];?></h5>
									</div>
									<div class="col-4">
										<a href=""><h5 class="pull-right text-success">Share <img class="" width="20" src="images/icons/ic_share_black_48dp.png"/></h5></a>
										<a href=""><h5 class="pull-right text-success">Wishlist <img class="" width="20" src="images/icons/ic_favorite_border_black_48dp.png"/></h5></a>
									</div>
								</div>
								<hr/>
								
								<div class="form-inline">
									<span class="form-inline badge bg-inverse"><?php echo $bookdetails['ratings'];?> <img class="" width="20" src="images/icons/ic_grade_white_48dp.png"/></span>
									<h5> Reviews: <span class="form-inline badge badge-primary"><?php echo $bookdetails['reviews'];?></span></h5>
								</div><br/>
							<h2>&#8377; <strike><?php echo $bookdetails['price'];?></strike> <?php echo $bookdetails['finalprice'];?>/-</h2>
						</div><hr/>
						<div class="bookDetails">
							<h2 class="rob-regular">Book description</h2>
							<span class="more text-black rob-regular" id="divShowHide">
								<?php echo $bookdetails['description'];?>
							</span>
						</div><hr/>
						<div class="row">
									<div class="col-md-8 productDetails">
										<h2 class="rob-regular">Book Details</h2><hr/>
										<table class="table table-responsive rob-regular">
											<tbody class="productDetailsTable">
												<tr>
												  <td class="detailsIndex">Available</td>
												  <td class="text-success"><?php 
												  if($bookdetails['quantityAvailable']>0){
													  if($bookdetails['quantityAvailable']<5){
														  echo "Available only ";
														  echo $bookdetails['quantityAvailable'];
														  echo " left";
													  }
													  else
														  echo 'Available';
												  }												  
												  else
													  echo'<p class="text-material-red m-0">Out of Stock!</p>';
													  ?></td>
												</tr>
												<tr>
												  <td class="detailsIndex">ISBN</td>
												  <td><?php echo $bookdetails['ISBN'];?></td>
												</tr>
												<tr>
												  <td class="detailsIndex">Country</td>
												  <td><?php echo $bookdetails['country'];?></td>
												</tr>
												<tr>
												  <td class="detailsIndex">Language</td>
												  <td><?php echo $bookdetails['language'];?></td>
												</tr>
												<tr>
												  <td class="detailsIndex">Series</td>
												  <td><?php echo $bookdetails['series'];?></td>
												</tr>
												<tr>
												  <td class="detailsIndex">Publisher</td>
												  <td><?php echo $bookdetails['publisher'];?></td>
												</tr>
												<tr>
												  <td class="detailsIndex">Edition</td>
												  <td><?php echo $bookdetails['edition'];?></td>
												</tr>
												<tr>
												  <td class="detailsIndex">Book Type</td>
												  <td><?php echo $bookdetails['formats'];?></td>
												</tr>
												<tr>
												  <td class="detailsIndex">Pages</td>
												  <td><?php echo $bookdetails['pages'];?></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="clearfix hidden-sm-up"></div>
									<div class="col-md-4 productServices rob-regular" id="productServicesId">
										<h2 class="rob-regular">Services</h2><hr/>
										<ul>
											<li><?php echo $bookdetails['services'];?></li>
										</ul>
									</div>
									
								</div>
								<hr/>
						<div class="rob-regular">
							<h2>Seller Information</h2>
						</div><hr/>
						<div class="rob-regular">
							<h3><img class="" width="35" src="images/icons/ic_security_black_48dp.png"/> 100% Authenticated, Safe and Secure Products Guranteed</h3>
						</div><hr/>
						
					</div>
				</div>
			</div>
		</div><hr/>
		<div class="row">
			<div class="col-6 col-md-3 bg-inverse text-white">
				<h4><img class="" width="50" src="images/icons/ic_payment_white_48dp.png"/> Easy Payments</h4>
			</div>
			<div class="col-6 col-md-3 bg-primary text-white">
				<h4><img class="" width="50" src="images/icons/ic_location_on_white_48dp.png"/> Track your Order</h4>
			</div>
			<div class="col-6 col-md-3 bg-inverse text-white">
				<h4><img class="" width="50" src="images/icons/ic_cached_white_48dp.png"/> Free and Easy Returns</h4>
			</div>
			<div class="col-6 col-md-3 bg-primary text-white">
				<h4><img class="" width="50" src="images/icons/ic_security_white_48dp.png"/> Online Cancellations</h4>
			</div>
		</div><hr/>
		<br/>
<?php
	include_once('includes/footer.php');
?>
</body>
<!------Hidden and shown------>
<script>
$(document).ready(function() {
    var showChar = 300;
    var ellipsestext = "...";
    var moretext = "Read More";
    var lesstext = "Read Less";
    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});

<!--dropdown submenu-->
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});

<!--disable image drag-->
$('img').on('dragstart', function(event) { event.preventDefault(); });

<!--Prevent open link in new tab-->
/*for(var els = document.getElementsByTagName('a'), i = els.length; i--;){
    var href = els[i].href;
    els[i].href = 'javascript:void(0);';
    els[i].onclick = (function(el, href){
        return function(){
            window.location.href = href;
        };
    })(els[i], href);
}*/
</script>

</html>