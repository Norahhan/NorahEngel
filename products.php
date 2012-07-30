<!DOCTYPE html>
<html>
<?php include_once "include/head.php"; ?>
<body id="home">
<!-- ID according to page -->
<div id="content-OtherPage">
<!-- include header -->
<?php include_once "include/header.php"; ?>
	<hr class="space">
	<hr class="space">
	<hr class="space">
	<hr class="space">
	<hr class="space">
	<hr class="space">
	<hr class="space">
	<hr class="space">
	<hr class="space">
	<div id="home-content" class="container">
		<div id="main" class="container">
<!--If no submenu <div class="col-group columns-1 alignleft clear"> else-->
			<div class="col-group columns-1 alignleft clear">
				<h1 class="biger">
					Products 
				</h1>
				<hr class="dotted">
				<div class="col-1 alignleft">
					<div class="inside">
						<hr class="space">
						<p class="margin0">
							Simply click on the click on the Categories below to view the full list of products within the range...
						</p>
						<div class="product-wrap">
							<ul class="product-nav">
								<li><a href="product_details.php" class="picOpacity"><img src="images/001ChestFridge.png" alt="Chest Fridge/Freezers"/><h4>Chest Fridge/Freezers</h4></a></li>
								<li><a href="product_details.php" class="picOpacity"><img src="images/002ConversionKits.png" alt="Conversion Kits"/><h4>Conversion Kits</h4></a></li>
								<li><a href="product_details.php" class="picOpacity"><img src="images/003FridgeAccessories.png" alt="Fridge Accessories"/><h4>Fridge Accessories</h4></a></li>
								<li><a href="product_details.php" class="picOpacity"><img src="images/004Generators.png" alt="Generators"/><h4>Generators</h4></a></li>
								<li><a href="product_details.php" class="picOpacity"><img src="images/005IceBoxes.png" alt="Ice Boxes"/><h4>Ice Boxes</h4></a></li>
								<li><a href="product_details.php" class="picOpacity"><img src="images/006OffRoadAccessories.png" alt="Off Road Accessories"/><h4>Off Road Accessories</h4></a></li>
								<li><a href="product_details.php" class="picOpacity"><img src="images/007OutdoorsCamping.png" alt="Outdoors & Camping"/><h4>Outdoors & Camping</h4></a></li>
								<li><a href="product_details.php" class="picOpacity"><img src="images/008PastProducts.png" alt="Past Products"/><h4>Past Products</h4></a></li>
								<li><a href="product_details.php" class="picOpacity"><img src="images/009PromotionalProducts.png" alt="Promotional Products"/><h4>Promotional Products</h4></a></li>
								<li><a href="product_details.php" class="picOpacity"><img src="images/010Solar.png" alt="Solar"/><h4>Solar</h4></a></li>
								<li><a href="product_details.php" class="picOpacity"><img src="images/011SpareParts.png" alt="Spare Parts"/><h4>Spare Parts</h4></a></li>
								<li><a href="product_details.php" class="picOpacity"><img src="images/012SpecialisedEquipment.png" alt="Specialised Equipment"/><h4>Specialised Equipment</h4></a></li>
								<li><a href="product_details.php" class="picOpacity"><img src="images/013ThermoCooler.png" alt="Thermo Cooler/Warmers"/><h4>Thermo Cooler/Warmers</h4></a></li>
								<li><a href="product_details.php" class="picOpacity"><img src="images/014UprightFridge.png" alt="Upright Fridge/Freezers"/><h4>Upright Fridge/Freezers</h4></a></li>
							</ul>
						</div>

					</div>

<!-- include sub-menu -->
				</div>
				<aside id="aside-main" class="col-group col-3 alignright"> 
				<div id="sidebar">
				<?php include_once "include/products-nav.php"; ?>
				</div>
<!-- #sidebar end -->
				</aside><!-- #aside-main end -->
			</div>
		</div>
<!-- #home-bottom end -->
	</div>
<!-- #home-content end -->
</div>
<!-- #content end -->
<!-- include footer -->
<?php include_once "include/footer.php"; ?>
</body>
</html>
