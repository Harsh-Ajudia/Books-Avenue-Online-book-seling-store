<?php
	$page="index";
	session_start();
	if(isset($_SESSION['uid'])){
		include_once('includes/headerLogin.php');
	}
	else
		include_once('includes/header.php');
?>
	<br><br>
	<!--Hoard-->
	<div id="carouselExampleIndicators0" class="carousel-home carousel slide carousel-jumbo" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators0" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators0" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators0" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner hoarding" role="listbox">
			<div class="carousel-item active hoarding">
				<img class="d-block img-fluid slidsize" src="images/slider/books-photo-hd-wallpaper.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid slidsize" src="images/slider/collage-of-elmore-leonard-books.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid slidsize" src="images/slider/26102.jpg" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev controlcenter" href="#carouselExampleIndicators0" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next controlcenter" href="#carouselExampleIndicators0" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<br>
	<!--Slider 1-->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<img class="d-block img-fluid" src="images/slider-bg.png" height="560" alt="First slide"/>
				<div class="carousel-caption d-none d-md-block">
					<div class="slidercontainer">
						<div class="sliderproduct">
							<a href=""><img src="images/covers/bestsellers-all-time/don-quixote-original-imad9agvy5fkpbmr.jpeg" class="sliderproductimage"/></a>
							<a href="" class="simplehyperlink"><h6>Don Quixote</h6></a>
							<h6 class="amounttag">&#8377; 250/-</h6>
						</div>
					</div>
					<div class="slidercontainer">
						<div class="sliderproduct">
							<a href=""><img src="images/covers/bestsellers-all-time/harry-potter-and-the-philosopher-s-stone-original-imady9h8zzcdghuv.jpeg" class="sliderproductimage"/></a>
							<a href="" class="simplehyperlink"><h6>Harry Potter and the Philosopher's Stone</h6></a>
							<h6 class="amounttag">&#8377; 420/-</h6>
						</div>
					</div>
					<div class="slidercontainer">
						<div class="sliderproduct">
							<a href=""><img src="images/covers/bestsellers-all-time/and-then-there-were-none-original-imaeahj3vpzzfvzg.jpeg" class="sliderproductimage"/></a>
							<a href="" class="simplehyperlink"><h6>And Then There were none</h6></a>
							<h6 class="amounttag">&#8377; 350/-</h6>
						</div>
					</div>
					<div class="slidercontainer">
						<div class="sliderproduct">
							<a href=""><img src="images/covers/bestsellers-all-time/the-hobbit-or-there-and-back-again-original-imadg7qqfcb85zqs.jpeg" class="sliderproductimage"/></a>
							<a href="" class="simplehyperlink"><h6>The Hobbit</h6></a>
							<h6 class="amounttag">&#8377; 290/-</h6>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid" src="images/slider-bg.png" height="360" alt="Second slide">
				<div class="carousel-caption d-none d-md-block">
					<div class="slidercontainer">
						<div class="sliderproduct">
							<a href=""><img src="images/covers/bestsellers-all-time/alices-adventures-in-wonderland-pb-original-imaea44yyqevwwxn.jpeg" class="sliderproductimage"/></a>
							<a href="" class="simplehyperlink"><h6>Alice in Wonderland</h6></a>
							<h6 class="amounttag">&#8377; 150/-</h6>
						</div>
					</div>
					<div class="slidercontainer">
						<div class="sliderproduct">
							<a href=""><img src="images/covers/bestsellers-all-time/a-tale-of-two-cities-original-imaebmjr3taeqc4b.jpeg" class="sliderproductimage"/></a>
							<a href="" class="simplehyperlink"><h6>A Tale of Two Cities</h6></a>
							<h6 class="amounttag">&#8377; 330/-</h6>
						</div>
					</div>
					<div class="slidercontainer">
						<div class="sliderproduct">
							<a href=""><img src="images/covers/bestsellers-all-time/the-alchemist-original-imadk282hypgngze.jpeg" class="sliderproductimage"/></a>
							<a href="" class="simplehyperlink"><h6>The Alchemist</h6></a>
							<h6 class="amounttag">&#8377; 140/-</h6>
						</div>
					</div>
					<div class="slidercontainer">
						<div class="sliderproduct">
							<a href=""><img src="images/covers/bestsellers-all-time/the-lord-of-the-rings-the-fellowship-of-the-ring-original-imadeuevseuexbcz.jpeg" class="sliderproductimage"/></a>
							<a href="" class="simplehyperlink"><h6>The Fellowship of the Ring</h6></a>
							<h6 class="amounttag">&#8377; 370/-</h6>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid" src="images/slider-bg.png" height="360" alt="Third slide">
					<div class="carousel-caption d-none d-md-block">
						<div class="slidercontainer">
						<div class="sliderproduct">
							<a href=""><img src="images/covers/bestsellers-all-time/the-lord-of-the-rings-the-two-towers-original-imadeuevqvywhgfc.jpeg" class="sliderproductimage"/></a>
							<a href="" class="simplehyperlink"><h6>The Two Towers</h6></a>
							<h6 class="amounttag">&#8377; 450/-</h6>
						</div>
					</div>
					<div class="slidercontainer">
						<div class="sliderproduct">
							<a href=""><img src="images/covers/bestsellers-all-time/the-little-prince-original-imaehj79zmfhzw8a.jpeg" class="sliderproductimage"/></a>
							<a href="" class="simplehyperlink"><h6>The Little Prince</h6></a>
							<h6 class="amounttag">&#8377; 220/-</h6>
						</div>
					</div>
					<div class="slidercontainer">
						<div class="sliderproduct">
							<a href=""><img src="images/covers/bestsellers-all-time/dream-of-the-red-chamber-tuttle-classics-of-japanese-literature-original-imadjq5r5hgzyamu.jpeg" class="sliderproductimage"/></a>
							<a href="" class="simplehyperlink"><h6>The Dream of the Red Chamber</h6></a>
							<h6 class="amounttag">&#8377; 360/-</h6>
						</div>
					</div>
					<div class="slidercontainer">
						<div class="sliderproduct">
							<a href=""><img src="images/covers/bestsellers-all-time/the-lord-of-the-rings-the-return-of-the-king-original-imadeuevwgc2tjhz.jpeg" class="sliderproductimage"/></a>
							<a href="" class="simplehyperlink"><h6>The Return of the King</h6></a>
							<h6 class="amounttag">&#8377; 410/-</h6>
						</div>
					</div>
					</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<br>
	
	<!--Slider 2-->
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
	<h3>Best sellers of 2016</h3>
	<p>Image 1</p>
	</div>
	</div>
	<div class="carousel-item">
	<img class="d-block img-fluid" src="images/slider/red.png" alt="Second slide">
	<div class="carousel-caption d-none d-md-block">
	<h3>Best sellers of 2016</h3>
	<p>Image 2</p>
	</div>
	</div>
	<div class="carousel-item">
	<img class="d-block img-fluid" src="images/slider/black.png" alt="Third slide">
	<div class="carousel-caption d-none d-md-block">
	<h3>Best sellers of 2016</h3>
	<p>Image 3</p>
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
	<br>
	
	<!--Slider 3-->
	<div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
	<li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
	<li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
	<li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
	<div class="carousel-item active">
	<img class="d-block img-fluid" src="images/slider/black.png" alt="First slide">
	<div class="carousel-caption d-none d-md-block">
	<h3>New & available in market</h3>
	<p>Image 1</p>
	</div>
	</div>
	<div class="carousel-item">
	<img class="d-block img-fluid" src="images/slider/blue.png" alt="Second slide">
	<div class="carousel-caption d-none d-md-block">
	<h3>New & available in market</h3>
	<p>Image 2</p>
	</div>
	</div>
	<div class="carousel-item">
	<img class="d-block img-fluid" src="images/slider/red.png" alt="Third slide">
	<div class="carousel-caption d-none d-md-block">
	<h3>New & available in market</h3>
	<p>Image 3</p>
	</div>
	</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
	</a>
	</div>
	<br>
	
<?php
	include_once('includes/footer.php');
?>
</body>
</html>