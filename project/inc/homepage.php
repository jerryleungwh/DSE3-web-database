<?php
	$homepage = true;
	include "header.php";
	include "navibar.php";
?>

<!-- bannerSection -->
<div class="sharpId" id="home"></div>
<div class="bannerSection">
<div class="slider-inner">
<div id="da-slider" class="da-slider">
	<div class="da-slide">
		<div class="da-img"><img src="img/cover-ar.png"/></div>
		<h2><i>Navigating</i><br><i>Around</i></h2>
		<p><i>Follow the path</i><br><i>to reach attractions</i></p>
	</div>
	
	<div class="da-slide">
		<div class="da-img"><img src="img/cover-map.png"/></div>
		<h2><i>Exploring</i><br><i>Places</i></h2>
		<p><i>Enjoy various trips</i><br><i>created by the community</i></p>
	</div>
	
		<div class="da-slide">
		<div class="da-img"><img src="img/cover-badges.png"/></div>
		<h2><i>Collecting</i><br><i>Badges</i></h2>
		<p><i>Unlock sceneries</i><br><i>from different countries</i></p>
	</div>
	
	<nav class="da-arrows">
		<span class="da-arrows-prev"></span>
		<span class="da-arrows-next"></span>		
	</nav>
</div> <!-- /da-slider -->
</div> <!-- /slider -->
</div> <!-- End Slider -->

<!-- highlightSection -->
<div class="highlightSection">
<div class="container">
<div class="row">
	<div class="col-md-8">
		<h2>What is <?php echo APPNAME ?></h2>
		<em>
			<?php echo APPNAME ?> is an iOS application using augmented reality (AR) and location-based technology<br>
			for promoting self-motivated learning. By making the attraction information easily accessible<br>
			through an interactive AR interface, <?php echo APPNAME ?> helps you navigate effortlessly.
		</em><br><br>
		Join us now to become an active learner!
		</p>
	</div>
	
	<div class="col-md-4 align-right"> 
		<h4><?php echo APPNAME ?> will guide you through<br>community-created paths, which<br>are displayed in AR.</h4>
		<a class="btn btn btn-brand" href="error.php">Learn more</a>
		</p>
	</div>
</div>
</div>
</div>

<!-- featureSection -->
<div class="sharpId" id="features"></div>
<div class="featureSection">
<div class="container">
<h3 class="title">Features</h3>
<div class="row">
	<div class="col-md-1"><i class="fa fa-search"></i></div>
	<div class="col-md-3">
		<div class="clearfix">
			<h4>Navigate</h4>
			<p>AR technologies allow nearby attractions to be displayed on the augmented reality.</p>
		</div>
	</div>
	
	<div class="col-md-1"><i class="fa fa-compass"></i></div>
	<div class="col-md-3">
		<div class="clearfix">
			<h4>Explore</h4>
			<p>You can explore new places by enrolling in various community-created trips.</p>
		</div>
	</div>
	
	<div class="col-md-1"><i class="fa fa-certificate"></i></div>
	<div class="col-md-3">
		<div class="clearfix">
			<h4>Collect</h4>
			<p>The iOS application integrates with rewards to bring incentive for the user to explore.</p>
		</div>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-1"><i class="fa fa-leaf"></i></div>
	<div class="col-md-3">
		<div class="clearfix">
			<h4>Learn</h4>
			<p>Know more about surroundings by reading the information card in assorted attractions.</p>
		</div>
	</div>
	
	<div class="col-md-1"><i class="fa fa-cloud-upload"></i></div>
	<div class="col-md-3">
		<div class="clearfix">
			<h4>Create</h4>
			<p>Upload your own trips and POIs to share knowledge of different places with others.</p>
		</div>
	</div>
	
	<div class="col-md-1"><i class="fa fa-facebook-square"></i></div>
	<div class="col-md-3">
		<div class="clearfix">
			<h4>Share</h4>
			<p>Impress your friends by sharing your completed trips and POIs to them.</p>
		</div>
	</div>
</div>
</div>
</div>

<!-- coverageSection -->
<div class="coverageSection">
<div class="container">
<h3 class="title">Coverage</h3>
<div class="row">
	<div class="col-md-2">
		<img src="img/flag/canada_flag.png">
		<p>Canada</p>
	</div>
	<div class="col-md-2">
		<img src="img/flag/france_flag.png">
		<p>France</p>
	</div>
	<div class="col-md-2">
		<img src="img/flag/hong_kong_flag.png">
		<p>Hong Kong</p>
	</div>
	<div class="col-md-2">
		<img src="img/flag/japan_flag.png">
		<p>Japan</p>
	</div>
	<div class="col-md-2">
		<img src="img/flag/taiwan_flag.png">
		<p>Taiwan</p>
	</div>
	<div class="col-md-2">
		<img src="img/flag/united_states_of_america_flag.png">
		<p>United States</p>
	</div>
</div>
</div>
</div>

<!-- quoteSection -->
<div class="testimonails">
<div class="container">
	<blockquote class="">
		<p>Broad, wholesome, charitable views of men and things cannot be acquired by vegetating in one little corner of the earth all of one's lifetime.</p>
		<small>Mark Twain</small>
	</blockquote>
</div>
</div>

<!-- tripSection -->
<div class="sharpId" id="community"></div>
<div class="tripSection">
<div class="container" >
<div class="row">
	<div class="col-md-6"> 
	<div class="projectList">
		<h3 class="title">Popular Trips</h3>
		
		<div class="media">
			<a class="pull-left" href="error.php"><img src="img/trip/1.jpg" class="projectImg"></a>
			<div class="media-body">
				<h4 class="media-heading"><a href="error.php">HKUST Routine</a></h4>
				<p>A daily routine for HKUST students.</p>
			</div>
		</div>
	
		<a class="pull-right" href="error.php">view more</a>
	</div>		
	</div>
	
	<div class="col-md-6"> 
	<div class="projectList">
		<h3 class="title">Latest Trips</h3>
		
		<div class="media">
			<a class="pull-left" href="error.php"><img src="img/trip/1.jpg" class="projectImg"></a>
			<div class="media-body">
				<h4 class="media-heading"><a href="error.php">HKUST Routine</a></h4>
				<p>A daily routine for HKUST students.</p>
			</div>
		</div>
		
		<a class="pull-right" href="error.php">view more</a>
	</div>		
	</div>
</div>
</div>
</div>

<!-- poiSection -->
<div class="poiSection">
<div class="container">
<div class="row">
	<div class="col-md-6"> 
	<div class="projectList">
		<h3 class="title">Popular POIs</h3>
		
		<div class="media">
			<a class="pull-left" href="error.php"><img src="img/poi/1.jpg" class="projectImg"></a>
			<div class="media-body">
				<h4 class="media-heading"><a href="error.php">Sundial</a></h4>
				<p>HKUST Route</p>
			</div>
		</div>
		
		<div class="media">
			<a class="pull-left" href="error.php"><img src="img/poi/2.jpg" class="projectImg"></a>
			<div class="media-body">
				<h4 class="media-heading"><a href="error.php">Atrium</a></h4>
				<p>HKUST Route</p>
			</div>
		</div>
		
		<div class="media">
			<a class="pull-left" href="error.php"><img src="img/poi/3.jpg" class="projectImg"></a>
			<div class="media-body">
				<h4 class="media-heading"><a href="error.php">Wan Chai Sport Ground</a></h4>
				<p>-</p>
			</div>
		</div>
		
		<a class="pull-right" href="error.php">view more</a>
	</div>
	</div>
	
	<div class="col-md-6"> 
	<div class="projectList">
		<h3 class="title">Latest POIs</h3>
		
		<div class="media">
			<a class="pull-left" href="error.php"><img src="img/poi/4.jpg" class="projectImg"></a>
			<div class="media-body">
				<h4 class="media-heading"><a href="error.php">Elizabeth Hospital</a></h4>
				<p>-</p>
			</div>
		</div>
		
		<div class="media">
			<a class="pull-left" href="error.php"><img src="img/poi/3.jpg" class="projectImg"></a>
			<div class="media-body">
				<h4 class="media-heading"><a href="error.php">Wan Chai Sport Ground</a></h4>
				<p>-</p>
			</div>
		</div>
		
		<div class="media">
			<a class="pull-left" href="error.php"><img src="img/poi/2.jpg" class="projectImg"></a>
			<div class="media-body">
				<h4 class="media-heading"><a href="error.php">Atrium</a></h4>
				<p>HKUST Route</p>
			</div>
		</div>
		
		<a class="pull-right" href="error.php">view more</a>
	</div>		
	</div>
</div>
</div>
</div>

<!-- signSection -->
<div class="signSection">
<div class="container">
<?php if(!isset($_SESSION['username'])) { ?>
	<a href="user.php?action=login">Sign in</a> to create your own trips and POIs.
<?php } else { ?>
	<a href="user.php?action=add-poi">Click me</a> to create new a POI.
<?php } ?>
</div>
</div>

<?php include "footer.php" ?>
