<!-- topHeaderSection -->	
<div class="topHeaderSection">		
<div class="header">			
<div class="container">
<div class="navbar-header">
	<a class="navbar-brand" href="index.php"><img src="img/logo.png"/></a>
	<a href="index.php"><div class="navbar-name"><?php echo APPNAME?></div></a>
</div>
<div class="navbar-collapse collapse">
	<ul class="nav navbar-nav"></ul>
	<ul class="nav navbar-nav navbar-right">
		<li<?php if($homepage) { ?> id="m1" class="active"<?php } ?>><a href="index.php#home">Home</a></li>
		<li<?php if($homepage) { ?> id="m2"<?php } ?>><a href="index.php#features">Features</a></li>
		<li<?php if($homepage) { ?> id="m3"<?php } ?>><a href="index.php#community">Community</a></li>
		<li><a href="error.php">Support</a></li>
		<li class="devider">&nbsp;</li>
<?php if(!isset($_SESSION['username'])) { ?>
		<li><a href="user.php?action=login">Login</a></li>
<?php } elseif ($_SESSION['username'] == "Admin") { ?>
		<li class="dropdown">
			<a href="error.php" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username'] ?><b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li><a href="admin.php?action=statistic">Statistic</a></li>
				<li><a href="admin.php?action=list-trips">Trip List</a></li>
				<li><a href="admin.php?action=list-pois">POI List</a></li>
				<li><a href="admin.php?action=logout">Logout</a></li>
			</ul>
		</li>
<?php } else { ?>
		<li class="dropdown">
			<a href="error.php" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username'] ?><b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li><a href="user.php?action=overview">Overview</a></li>
				<li><a href="user.php?action=list-trips">Your Trips</a></li>
				<li><a href="user.php?action=list-pois">Your POIs</a></li>
				<li><a href="user.php?action=setting">Setting</a></li>
				<li><a href="user.php?action=logout">Logout</a></li>
			</ul>
		</li>
<?php } ?>
	</ul>
</div>
</div>
</div>
</div>
