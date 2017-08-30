        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar bg-black" id="aSidebar">
          <ul class="nav nav-pills flex-column">
		  <hr class="hr-white-full"/>
		  <h4 class="sidetitle">Products</h4>
            <li class="nav-item">
				<a class="nav-link <?php if($page=="addproduct") echo 'active' ?>" href="addProduct.php"><img class="sideicons" src="../images/icons/ic_add_circle_white_48dp.png" width="30" align="left"/>
				<h5 class="">Add Product</h5><span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item">
				<a class="nav-link <?php if($page=="removeproduct") echo 'active' ?>" href="removeproduct.php"><img class="sideicons" src="../images/icons/ic_delete_white_48dp.png" width="30" align="left"/>
				<h5 class="">Remove Product</h5><span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item">
				<a class="nav-link <?php if($page=="updateproduct") echo 'active' ?>" href="updateProduct.php"><img class="sideicons" src="../images/icons/ic_update_white_48dp.png" width="30" align="left"/>
				<h5 class="">Update Product</h5><span class="sr-only">(current)</span></a>
            </li>
			<hr class="hr-white-full"/>
			<h4 class="sidetitle">Order Management</h4>
            <li class="nav-item">
				<a class="nav-link <?php if($page=="showorders") echo 'active' ?>" href="showorders.php"><img class="sideicons" src="../images/icons/ic_assignment_turned_in_white_48dp.png" width="30" align="left"/>
				<h5 class="">Show Orders</h5><span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item">
				<a class="nav-link <?php if($page=="todaysorders") echo 'active' ?>" href="todaysorders.php"><img class="sideicons" src="../images/icons/ic_assignment_white_48dp.png" width="30" align="left"/>
				<h5 class="">Today's Orders</h5><span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item">
				<a class="nav-link <?php if($page=="pendingOrders") echo 'active' ?>" href="pendingOrders.php"><img class="sideicons" src="../images/icons/ic_assignment_late_white_48dp.png" width="30" align="left"/>
				<h5 class="">Pending Orders</h5><span class="sr-only">(current)</span></a>
            </li>
			<hr class="hr-white-full"/>
			<h4 class="sidetitle">Administrator</h4>
			<li class="nav-item">
				<a class="nav-link <?php if($page=="preferences") echo 'active' ?>" href="preferences.php"><img class="sideicons" src="../images/icons/ic_settings_white_48dp.png" width="30" align="left"/>
				<h5 class="">Preferences</h5><span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item <?php if($page=="logout") echo 'active' ?>">
				<a class="nav-link " href="includes/logout.php"><img class="sideicons" src="../images/icons/ic_exit_to_app_white_48dp.png" width="30" align="left"/>
				<h5 class="">Logout</h5><span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </nav>
		