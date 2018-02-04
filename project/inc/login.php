<?php
	$homepage = false;
	include "header.php";
	include "navibar.php";
?>

<!-- loginSection -->
<div class="loginSection">
<div class="container">
<h3 class="title">Login</h3>
	<div class="loginBox">
	<form action="user.php?action=login" method="POST">
		Username:<br>
		<input type="text" name="user_id"><br>
		Password:<br>
		<input type="text" name="password"><br>
<?php if (isset($results['errorMessage'])) { ?>
		<div class="errorMessage">Incorrect username or password. Please try again.</div>
<?php } ?>
		<input class="submit-box" type="submit" name="submit" value="Login">
	</form>
	</div>
</div>
</div>

<!-- signSection -->
<div class="signSection">
<div class="container">
	Do not have an account? <a href="error.php">Click me</a> to create a new one.
</div>
</div>

<?php include "footer.php"; ?>
