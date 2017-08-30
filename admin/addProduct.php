<?php
$page="addproduct";
session_start();
error_reporting(0);
if(!isset($_SESSION['auid'])){
	header('Location:Login.php');
}
$auid=$_SESSION['auid'];
include_once('includes/header.php');
include_once('includes/sideHeader.php');
require_once('../includes/dbconfig.php');
require_once('../includes/dbconnect.php');

//
if(isset($_POST['name'])) {
		$name=str_replace("'", "''",$_POST['name']);
		$author=str_replace("'", "''",$_POST['author']);
		$ratings=$_POST['ratings'];
		$reviews=$_POST['reviews'];
		$price=$_POST['price'];
		$discount=$_POST['discount'];
		$quantity=$_POST['quantity'];
		$ISBN=$_POST['ISBN'];
		$country=$_POST['country'];
		$language=$_POST['language'];
		$series=str_replace("'", "''",$_POST['series']);
		$type=$_POST['type'];
		$publisher=$_POST['publisher'];
		$edition=$_POST['edition'];
		$pages=$_POST['pages'];
	    $description=str_replace("'", "''", $_POST['description']);

		$ser1=$ser2=$ser3=" ";
		$ser1=$_POST['check_list1'];
		$ser2=$_POST['check_list2'];
		$ser3=$_POST['check_list3'];
		$services="$ser1, $ser2, $ser3";
		
		$for1=$for2=$for3=" ";
		$for1=$_POST['format1'];
		$for2=$_POST['format2'];
		$for3=$_POST['format3'];

		$formats="$for1, $for2, $for3";
		echo $formats;
		$query="INSERT INTO `product` (`name`, `author`, `ratings`, `reviews`, `price`, `discount`, `quantityAvailable`, `ISBN`, `country`, `language`, `series`, `type`, `publisher`, `edition`, `pages`, `services`, `formats`, `description`) VALUES ('$name', '$author', '$ratings', '$reviews', '$price', '$discount', '$quantity', '$ISBN', '$country', '$language', '$series', '$type', '$publisher', '$edition', '$pages', '$services', '$formats', '$description')";
		mysqli_query($link,$query) or die("Error updating data.".mysqli_error($link));
		$messagebook="Note: $name is added";
}
		if(isset($_POST['bookpicsubmit'])) {
		$target = "../images/covers/".$_FILES['bookpic']['name'];//move that image here on server side
		$imagepath = "images/covers/".$_FILES['bookpic']['name'];
		if(!move_uploaded_file($_FILES['bookpic']['tmp_name'],$target))
		{
			echo "Sorry can't upload file....";	
		}
		else
		{	
			$imagepath=str_replace("'","''",$imagepath);
			$bookid=$_POST['bookname'];
			$bookid=str_replace("'","''",$bookid);
			$query="update product set image='$imagepath' where name='$bookid'";
			mysqli_query($link,$query) or die("Error updating data.".mysqli_error($link));
			$messagebookpic="Note: $name photo is updated as $imagepath";
		}
		}
?>

<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
	<h4 class="text-right">Welcome <?php echo $aname;?></h4>
		<hr/>
	<div class="row">
		<div class="col-sm-6">
			<h3 class="text-material-red">Add Product</h3>
		</div>
		<div class="col-sm-6">
			<h5><?php echo $messagebookpic;echo $messagebook;?></h5>
		</div>
	</div>
	<hr/>
	<h4 class="text-material-red rob-regular">1. Product Details</h4>
	<hr/>
	<div class="container">
		<form method="post" class="rob-regular">
			<div class="row" id="changeDetails">
				<div class="col-md-6">
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Title</label>
					  <div class="col-10">
						<input class="form-control" type="text" name="name"value="" id="example-text-input" required>
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Author</label>
					  <div class="col-10">
						<input class="form-control" type="text" name="author" value="" id="example-text-input">
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Ratings</label>
					  <div class="col-10">
						<input class="form-control" type="text" name="ratings" value="" id="example-text-input">
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Reviews</label>
					  <div class="col-10">
						<input class="form-control" type="text" name="reviews" value="" id="example-text-input">
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Price</label>
					  <div class="col-10">
						<input class="form-control" type="text" name="price" value="" id="example-text-input">
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Discount</label>
					  <div class="col-10">
						<input class="form-control" type="text" name="discount" value="" id="example-text-input">
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Quantity</label>
					  <div class="col-10">
						<input class="form-control" type="text" name="quantity" value="" id="example-text-input">
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">ISBN</label>
					  <div class="col-10">
						<input class="form-control" type="text" name="ISBN" value="" id="example-text-input">
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Country</label>
					  <div class="col-10">
						<select class="form-control" name="country" id="exampleSelect1">
							<option value="AFG">Afghanistan</option>
							<option value="ALA">Åland Islands</option>
							<option value="ALB">Albania</option>
							<option value="DZA">Algeria</option>
							<option value="ASM">American Samoa</option>
							<option value="AND">Andorra</option>
							<option value="AGO">Angola</option>
							<option value="AIA">Anguilla</option>
							<option value="ATA">Antarctica</option>
							<option value="ATG">Antigua and Barbuda</option>
							<option value="ARG">Argentina</option>
							<option value="ARM">Armenia</option>
							<option value="ABW">Aruba</option>
							<option value="AUS">Australia</option>
							<option value="AUT">Austria</option>
							<option value="AZE">Azerbaijan</option>
							<option value="BHS">Bahamas</option>
							<option value="BHR">Bahrain</option>
							<option value="BGD">Bangladesh</option>
							<option value="BRB">Barbados</option>
							<option value="BLR">Belarus</option>
							<option value="BEL">Belgium</option>
							<option value="BLZ">Belize</option>
							<option value="BEN">Benin</option>
							<option value="BMU">Bermuda</option>
							<option value="BTN">Bhutan</option>
							<option value="BOL">Bolivia, Plurinational State of</option>
							<option value="BES">Bonaire, Sint Eustatius and Saba</option>
							<option value="BIH">Bosnia and Herzegovina</option>
							<option value="BWA">Botswana</option>
							<option value="BVT">Bouvet Island</option>
							<option value="BRA">Brazil</option>
							<option value="IOT">British Indian Ocean Territory</option>
							<option value="BRN">Brunei Darussalam</option>
							<option value="BGR">Bulgaria</option>
							<option value="BFA">Burkina Faso</option>
							<option value="BDI">Burundi</option>
							<option value="KHM">Cambodia</option>
							<option value="CMR">Cameroon</option>
							<option value="CAN">Canada</option>
							<option value="CPV">Cape Verde</option>
							<option value="CYM">Cayman Islands</option>
							<option value="CAF">Central African Republic</option>
							<option value="TCD">Chad</option>
							<option value="CHL">Chile</option>
							<option value="CHN">China</option>
							<option value="CXR">Christmas Island</option>
							<option value="CCK">Cocos (Keeling) Islands</option>
							<option value="COL">Colombia</option>
							<option value="COM">Comoros</option>
							<option value="COG">Congo</option>
							<option value="COD">Congo, the Democratic Republic of the</option>
							<option value="COK">Cook Islands</option>
							<option value="CRI">Costa Rica</option>
							<option value="CIV">Côte d'Ivoire</option>
							<option value="HRV">Croatia</option>
							<option value="CUB">Cuba</option>
							<option value="CUW">Curaçao</option>
							<option value="CYP">Cyprus</option>
							<option value="CZE">Czech Republic</option>
							<option value="DNK">Denmark</option>
							<option value="DJI">Djibouti</option>
							<option value="DMA">Dominica</option>
							<option value="DOM">Dominican Republic</option>
							<option value="ECU">Ecuador</option>
							<option value="EGY">Egypt</option>
							<option value="SLV">El Salvador</option>
							<option value="GNQ">Equatorial Guinea</option>
							<option value="ERI">Eritrea</option>
							<option value="EST">Estonia</option>
							<option value="ETH">Ethiopia</option>
							<option value="FLK">Falkland Islands (Malvinas)</option>
							<option value="FRO">Faroe Islands</option>
							<option value="FJI">Fiji</option>
							<option value="FIN">Finland</option>
							<option value="FRA">France</option>
							<option value="GUF">French Guiana</option>
							<option value="PYF">French Polynesia</option>
							<option value="ATF">French Southern Territories</option>
							<option value="GAB">Gabon</option>
							<option value="GMB">Gambia</option>
							<option value="GEO">Georgia</option>
							<option value="DEU">Germany</option>
							<option value="GHA">Ghana</option>
							<option value="GIB">Gibraltar</option>
							<option value="GRC">Greece</option>
							<option value="GRL">Greenland</option>
							<option value="GRD">Grenada</option>
							<option value="GLP">Guadeloupe</option>
							<option value="GUM">Guam</option>
							<option value="GTM">Guatemala</option>
							<option value="GGY">Guernsey</option>
							<option value="GIN">Guinea</option>
							<option value="GNB">Guinea-Bissau</option>
							<option value="GUY">Guyana</option>
							<option value="HTI">Haiti</option>
							<option value="HMD">Heard Island and McDonald Islands</option>
							<option value="VAT">Holy See (Vatican City State)</option>
							<option value="HND">Honduras</option>
							<option value="HKG">Hong Kong</option>
							<option value="HUN">Hungary</option>
							<option value="ISL">Iceland</option>
							<option value="IND">India</option>
							<option value="IDN">Indonesia</option>
							<option value="IRN">Iran, Islamic Republic of</option>
							<option value="IRQ">Iraq</option>
							<option value="IRL">Ireland</option>
							<option value="IMN">Isle of Man</option>
							<option value="ISR">Israel</option>
							<option value="ITA">Italy</option>
							<option value="JAM">Jamaica</option>
							<option value="JPN">Japan</option>
							<option value="JEY">Jersey</option>
							<option value="JOR">Jordan</option>
							<option value="KAZ">Kazakhstan</option>
							<option value="KEN">Kenya</option>
							<option value="KIR">Kiribati</option>
							<option value="PRK">Korea, Democratic People's Republic of</option>
							<option value="KOR">Korea, Republic of</option>
							<option value="KWT">Kuwait</option>
							<option value="KGZ">Kyrgyzstan</option>
							<option value="LAO">Lao People's Democratic Republic</option>
							<option value="LVA">Latvia</option>
							<option value="LBN">Lebanon</option>
							<option value="LSO">Lesotho</option>
							<option value="LBR">Liberia</option>
							<option value="LBY">Libya</option>
							<option value="LIE">Liechtenstein</option>
							<option value="LTU">Lithuania</option>
							<option value="LUX">Luxembourg</option>
							<option value="MAC">Macao</option>
							<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
							<option value="MDG">Madagascar</option>
							<option value="MWI">Malawi</option>
							<option value="MYS">Malaysia</option>
							<option value="MDV">Maldives</option>
							<option value="MLI">Mali</option>
							<option value="MLT">Malta</option>
							<option value="MHL">Marshall Islands</option>
							<option value="MTQ">Martinique</option>
							<option value="MRT">Mauritania</option>
							<option value="MUS">Mauritius</option>
							<option value="MYT">Mayotte</option>
							<option value="MEX">Mexico</option>
							<option value="FSM">Micronesia, Federated States of</option>
							<option value="MDA">Moldova, Republic of</option>
							<option value="MCO">Monaco</option>
							<option value="MNG">Mongolia</option>
							<option value="MNE">Montenegro</option>
							<option value="MSR">Montserrat</option>
							<option value="MAR">Morocco</option>
							<option value="MOZ">Mozambique</option>
							<option value="MMR">Myanmar</option>
							<option value="NAM">Namibia</option>
							<option value="NRU">Nauru</option>
							<option value="NPL">Nepal</option>
							<option value="NLD">Netherlands</option>
							<option value="NCL">New Caledonia</option>
							<option value="NZL">New Zealand</option>
							<option value="NIC">Nicaragua</option>
							<option value="NER">Niger</option>
							<option value="NGA">Nigeria</option>
							<option value="NIU">Niue</option>
							<option value="NFK">Norfolk Island</option>
							<option value="MNP">Northern Mariana Islands</option>
							<option value="NOR">Norway</option>
							<option value="OMN">Oman</option>
							<option value="PAK">Pakistan</option>
							<option value="PLW">Palau</option>
							<option value="PSE">Palestinian Territory, Occupied</option>
							<option value="PAN">Panama</option>
							<option value="PNG">Papua New Guinea</option>
							<option value="PRY">Paraguay</option>
							<option value="PER">Peru</option>
							<option value="PHL">Philippines</option>
							<option value="PCN">Pitcairn</option>
							<option value="POL">Poland</option>
							<option value="PRT">Portugal</option>
							<option value="PRI">Puerto Rico</option>
							<option value="QAT">Qatar</option>
							<option value="REU">Réunion</option>
							<option value="ROU">Romania</option>
							<option value="RUS">Russian Federation</option>
							<option value="RWA">Rwanda</option>
							<option value="BLM">Saint Barthélemy</option>
							<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
							<option value="KNA">Saint Kitts and Nevis</option>
							<option value="LCA">Saint Lucia</option>
							<option value="MAF">Saint Martin (French part)</option>
							<option value="SPM">Saint Pierre and Miquelon</option>
							<option value="VCT">Saint Vincent and the Grenadines</option>
							<option value="WSM">Samoa</option>
							<option value="SMR">San Marino</option>
							<option value="STP">Sao Tome and Principe</option>
							<option value="SAU">Saudi Arabia</option>
							<option value="SEN">Senegal</option>
							<option value="SRB">Serbia</option>
							<option value="SYC">Seychelles</option>
							<option value="SLE">Sierra Leone</option>
							<option value="SGP">Singapore</option>
							<option value="SXM">Sint Maarten (Dutch part)</option>
							<option value="SVK">Slovakia</option>
							<option value="SVN">Slovenia</option>
							<option value="SLB">Solomon Islands</option>
							<option value="SOM">Somalia</option>
							<option value="ZAF">South Africa</option>
							<option value="SGS">South Georgia and the South Sandwich Islands</option>
							<option value="SSD">South Sudan</option>
							<option value="ESP">Spain</option>
							<option value="LKA">Sri Lanka</option>
							<option value="SDN">Sudan</option>
							<option value="SUR">Suriname</option>
							<option value="SJM">Svalbard and Jan Mayen</option>
							<option value="SWZ">Swaziland</option>
							<option value="SWE">Sweden</option>
							<option value="CHE">Switzerland</option>
							<option value="SYR">Syrian Arab Republic</option>
							<option value="TWN">Taiwan, Province of China</option>
							<option value="TJK">Tajikistan</option>
							<option value="TZA">Tanzania, United Republic of</option>
							<option value="THA">Thailand</option>
							<option value="TLS">Timor-Leste</option>
							<option value="TGO">Togo</option>
							<option value="TKL">Tokelau</option>
							<option value="TON">Tonga</option>
							<option value="TTO">Trinidad and Tobago</option>
							<option value="TUN">Tunisia</option>
							<option value="TUR">Turkey</option>
							<option value="TKM">Turkmenistan</option>
							<option value="TCA">Turks and Caicos Islands</option>
							<option value="TUV">Tuvalu</option>
							<option value="UGA">Uganda</option>
							<option value="UKR">Ukraine</option>
							<option value="ARE">United Arab Emirates</option>
							<option value="GBR">United Kingdom</option>
							<option value="USA">United States</option>
							<option value="UMI">United States Minor Outlying Islands</option>
							<option value="URY">Uruguay</option>
							<option value="UZB">Uzbekistan</option>
							<option value="VUT">Vanuatu</option>
							<option value="VEN">Venezuela, Bolivarian Republic of</option>
							<option value="VNM">Viet Nam</option>
							<option value="VGB">Virgin Islands, British</option>
							<option value="VIR">Virgin Islands, U.S.</option>
							<option value="WLF">Wallis and Futuna</option>
							<option value="ESH">Western Sahara</option>
							<option value="YEM">Yemen</option>
							<option value="ZMB">Zambia</option>
							<option value="ZWE">Zimbabwe</option>
						</select>
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Language</label>
					  <div class="col-10">
						<select name="language" class="form-control" id="exampleSelect1">
						  <option value="English">English</option>
						  <option value="Chinese">Chinese</option>
						  <option value="Spanish">Spanish</option>
						  <option value="Hindi">Hindi</option>
						  <option value="Arabic">Arabic</option>
						  <option value="Portugese">Portugese</option>
						  <option value="Russian">Russian</option>
						  <option value="Japanese">Japanese</option>
						</select>
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Series</label>
					  <div class="col-10">
						<input class="form-control" name="series" type="text" value="" id="example-text-input">
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Type</label>
					  <div class="col-10">
						<select class="form-control" name="type" id="exampleSelect1">
						  <option>Novels</option>
						  <option>Magazines</option>
						  <option>Lifestyles</option>
						  <option>Education</option>
						  <option>Children</option>
						</select>
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Publisher</label>
					  <div class="col-10">
						<input class="form-control" name="publisher" type="text" value="" id="example-text-input">
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Edition</label>
					  <div class="col-10">
						<input class="form-control" name="edition" type="text" value="" id="example-text-input">
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Pages</label>
					  <div class="col-10">
						<input class="form-control" name="pages" type="text" value="" id="example-text-input">
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Services</label>
					  <div class="col-10">
					  	<input type="checkbox" name="check_list1" value="ODD">ODD
						<input type="checkbox" name="check_list2" value="SDD">SDD
						<input type="checkbox" name="check_list3" value="COD">COD
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Formats</label>
					  <div class="col-10">
						<input type="checkbox" name="format1" value="Paperback">Paperback
						<input type="checkbox" name="format2" value="Hardcover">Hardcover
						<input type="checkbox" name="format3" value="Softcopy">Softcopy
					  </div>
					</div>
				</div>
			<div class="col-md-12" id="changeDetails">
				<hr/><h4 class="text-material-red rob-regular">2. Product Description</h4>
			<hr/>	
				  <div class="form-group row">
					  <label for="example-text-input" class="rob-regular col-2 col-form-label">Description</label>
					  <div class="col-10">
						<textarea style="resize: none;" name="description" class="form-control" name="description" id="exampleTextarea" rows="5"></textarea>
					  </div>
					</div>
			</div>
							
			</div>
			<div class="form-group clearfix">
				<button type="submit" class="btn btn-block" name="addProduct1">Update</button>
			</div>
			</form>
		<hr/>
			<h4 class="text-material-red rob-regular">3. Product Image</h4>
		<hr/>
		Select the book name where you want to upload an image
		<form method="POST" enctype="multipart/form-data">
			<div class="row" id="changeDetails">
				<div class="col-md-6">
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Book</label>
					  <div class="col-6">
					  <select class="form-control" name="bookname" id="exampleSelect1">
						  <option value="0">---select book name---</option>
					  <?php
						$query1="SELECT name from product";
						$result=mysqli_query($link,$query1) or die("Error updating data.".mysqli_error($link));
						while($bookname=mysqli_fetch_assoc($result)){
							echo '<option value="';
							echo $bookname['name'];
							echo '">';
							echo $bookname['name'];
							echo '</option>
							';
						}
					  ?>
						</select>
					  </div>
					</div>
				</div>
				<div class="col-md-6 p-0 col-md-offset-1"><!--Product Image-->
						<div class="form-group ">
							<input id="bookpicIn" type="file" name="bookpic">
							<button type="submit" class="btn btn-primary" id="profilePhotoBtn" name="bookpicsubmit">Submit</button>
						</div>
				</div>
			</div>
		</form>	
		<hr/>

	</div>
</main>