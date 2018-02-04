<?php
	$homepage = false;
	include "header.php";
	include "navibar.php";
?>

<!-- errorSection -->
<div class="errorSection">
<div class="container">
<h3 class="title">Error</h3>
	Sorry. The page you are viewing is not exist.<br>
	<br>
	This may be caused by the following reasons:<br>
	1. The page is still under construction.<br>
	2. The website is typed incorrectly.<br>
	<br>
	If that is not the case, please contact us for further information.<br>
	Email: <?php echo EMAIL ?><br>
	<p><br></p>
</div>
</div>

<!-- signSection -->
<div class="signSection">
<div class="container">
	<a href="index.php">Click me</a> to head back to the homepage.
</div>
</div>

<?php include "footer.php" ?>
