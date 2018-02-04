<?php
	$homepage = false;
	include "inc/header.php";
	include "inc/navibar.php";
?>

<!-- poiSection -->
<div class="poiSection">
<div class="container">
<div class="row">
	<div class="col-md-12"> 
	<div class="projectList">
		<h3 class="title">Your POIs</h3>
<?php
	$poi_count = 0;
	foreach ($results['pois'] as $poi) {
		if ($poi->values['status'] == "Approved") {
?>
		<div class="poiElement" onclick="document.location.href='user.php?action=view-poi&amp;poi-id=<?php echo $poi->id ?>'">
	<?php if ($poi->values['category'] == "Information Card") { ?>
			<i class="fa fa-info" style="padding-left: 12px"></i>
	<?php } else { ?>
			<i class="fa fa-puzzle-piece"></i>
	<?php } ?>
			<img class="media-img" src="<?php echo $poi->values['pic_url'] ?>">
			<div class="media-heading"><?php echo $poi->values['title'] ?></div>
			<div class="media-text"><?php echo $poi->values['excerpt'] ?></div>
		</div>
<?php
			$poi_count++;
		}
	}
	if ($poi_count == 0) echo "<div>You have currently no approved POI.</div>";
?>
	</div>
	</div>
</div>
</div>
</div>

<!-- poiSection -->
<div class="poiSection">
<div class="container">
<div class="row">
	<div class="col-md-12"> 
	<div class="projectList">
		<h3 class="title">Pending</h3>
<?php
	$poi_count = 0;
	foreach ($results['pois'] as $poi) {
		if ($poi->values['status'] == "Pending") {
?>
		<div class="poiElement" onclick="document.location.href='user.php?action=view-poi&amp;poi-id=<?php echo $poi->id ?>'">
	<?php if ($poi->values['category'] == "Information Card") { ?>
			<i class="fa fa-info" style="padding-left: 12px"></i>
	<?php } else { ?>
			<i class="fa fa-puzzle-piece"></i>
	<?php } ?>
			<img class="media-img" src="<?php echo $poi->values['pic_url'] ?>">
			<div class="media-heading"><?php echo $poi->values['title'] ?></div>
			<div class="media-text"><?php echo $poi->values['excerpt'] ?></div>
			<a href="user.php?action=edit-poi&amp;poi-id=<?php echo $poi->id ?>"><i class="fa fa-pencil"></i></a>
		</div>
<?php
			$poi_count++;
		}
	}
	if ($poi_count == 0) echo "<div>You have currently no pending POI.</div>";
?>
	</div>
	</div>
</div>
</div>
</div>

<!-- poiSection -->
<div class="poiSection">
<div class="container">
<div class="row">
	<div class="col-md-12"> 
	<div class="projectList">
		<h3 class="title">Rejected</h3>
<?php
	$poi_count = 0;
	foreach ($results['pois'] as $poi) {
		if ($poi->values['status'] == "Rejected") {
?>
		<div class="poiElement" onclick="document.location.href='user.php?action=view-poi&amp;poi-id=<?php echo $poi->id ?>'">
	<?php if ($poi->values['category'] == "Information Card") { ?>
			<i class="fa fa-info" style="padding-left: 12px"></i>
	<?php } else { ?>
			<i class="fa fa-puzzle-piece"></i>
	<?php } ?>
			<img class="media-img" src="<?php echo $poi->values['pic_url'] ?>">
			<div class="media-heading"><?php echo $poi->values['title'] ?></div>
			<div class="media-text"><?php echo $poi->values['excerpt'] ?></div>
			<a href="user.php?action=edit-poi&amp;poi-id=<?php echo $poi->id ?>"><i class="fa fa-pencil"></i></a>
		</div>
<?php
			$poi_count++;
		}
	}
	if ($poi_count == 0) echo "<div>You have currently no rejected POI.</div>";
?>
	</div>
	</div>
</div>
</div>
</div>

<!-- signSection -->
<div class="signSection">
<div class="container">
	<a href="user.php?action=add-poi">Click me</a> to create new a POI.
</div>
</div>

<?php include "inc/footer.php" ?>
