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
				<h1 class="biger alignleft">
					Send us your Review or Testimonial 
				</h1>
				<a href="#" class="BackToReviews alignright"></a> 
				<hr class="dotted">
				<p>
					Just fill out the form below and tell us approx 250 words or less about your ENGEL, don’t forget to include a photo. Please note: The maximum size for your photograph is 1200 x 720 and must be less than 2mb. 
				</p>
				<form style="margin-left:50px;">
					<lable class="review">Full Name:</lable> 
					<input value="" class="pageform" id="UserName" name="UserName" type="text">
					<br />
					<hr class="space">
					<lable class="review">Email Address:</lable> 
					<input value="" class="pageform" id="email" name="Password" type="text">
					<br />
					<hr class="space">
					<lable class="review">Contact Number:</lable> 
					<input value="" class="pageform" id="UserName" name="UserName" type="text">
					<br />
					<hr class="space">
					<lable class="review">Where You're From:</lable> 
					<input value="" class="pageform" id="UserName" name="UserName" type="text">
					<br />
					<hr class="space">
					<lable class="review">Product:</lable> 
					<input value="" class="pageform" id="UserName" name="UserName" type="text">
					<br />
					<hr class="space">
					<lable class="review">Upload Your Picture:</lable> 
					<input type="file" name="fileField" id="fileField" class="pageform" />
					<br />
					<hr class="space">
					<lable class="review aligntop">Product Review:</lable> <textarea name="textarea1" id="textarea1" cols="45" rows="5"></textarea> <br />
					<hr class="space">
					<input name="login" type="submit" value=" " class="SubmitYourReview">
				</form>
				<small class="disclaimer">Disclaimer:<br/> By submitting a testimonial, you consent to the information being entered into a database and that Engel may use this information and any media for future promotional, marketing and publicity purposes without any further reference, payment or other compensation to the entrant including sending electronic messages.</small> 
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
