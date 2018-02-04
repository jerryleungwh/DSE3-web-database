<!-- footerTopSection -->
<div class="footerTopSection">
<div class="container">
<div class="row">
	<div class="col-md-4">
		<h3>Recent News</h3>
		<p>The project team is currently developing a new <b>intuitive user interface</b>.</p>
		<p><?php echo APPNAME ?> is now encouraging the community to create different <b>trips and POIs</b> for testing.</p>
	</div>
	
	<div class="col-md-4">
		<h3>Useful Links</h3>
		<p>The following may be useful quick link for proper information:</p>
		<p>
			<a href="#features">Our Features</a><br>
			<a href="#community">Our Community</a><br>
			<a href="support.php">Support</a><br>
		</p>
	</div>
	
	<div class="col-md-4">
		<h3>Contact us</h3>
		<p>
			<b><?php echo COMPANY ?></b><br>
			<?php echo ADDRESS ?>
		</p>
		<p>
			Tel: <?php echo CONTACT ?><br>
			Email: <?php echo EMAIL ?><br>
		</p>
	</div>
</div>
</div>
</div>

<!-- footerBottomSection -->	
<div class="footerBottomSection">
<div class="container">
	&copy; 2017-2018, Allright reserved. <a href="error.php">Terms and Condition</a> | <a href="error.php">Privacy Policy</a> 
	<div class="pull-right"><a href="index.php"><img src="img/logo-name.png"/></a></div>
</div>
</div>

<!-- JS Global Compulsory -->			
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/modernizr.custom.js"></script>		
<script type="text/javascript" src="bs/js/bootstrap.min.js"></script>	

<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/jquery.cslider.js"></script> 
<script type="text/javascript" src="js/back-to-top.js"></script>
<script type="text/javascript" src="js/jquery.sticky.js"></script>
<script type="text/javascript" src="js/menu.js"></script>

<!-- JS Page Level -->           
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/index.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function() {
		App.init();
		App.initSliders();
		Index.initParallaxSlider();
	});
</script>

</body>
</html>
