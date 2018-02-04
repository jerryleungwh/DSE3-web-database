<?php
	$homepage = false;
	include "header.php";
	include "navibar.php";
?>

<!-- addPoiSection -->
<div class="addPoiSection">
<div class="container">
	<h3 class="title"><?php echo $results['poi']->values['title'] ?></h3>
	<div class="row">
		<div class="col-md-6">
			<div id="map-canvas"></div>
		</div>
		<div class="col-md-6" style="text-align: justify">
			<h4><?php echo $results['poi']->values['title'] ?></h4>
			Created by <?php echo $results['poi']->values['user_id'] ?><br>
			<br>
			<?php echo $results['poi']->values['excerpt'] ?><br>
			<hr>
			Coordinates: <?php echo number_format($results['poi']->values['longitude'], 6) . ", "
				. number_format($results['poi']->values['latitude'], 6) ?><br>
			Category: <?php echo $results['poi']->values['category'] ?><br>
			Card Type: <?php echo $results['poi']->values['card_type'] ?><br>
			<br>
			Information:<br>
			<?php echo $results['poi']->values['content'] ?><br>
			<br>
			Population: <?php echo $results['poi']->values['ppl_count'] ?>
			<div id="lng-box" style="display: none"><?php echo $results['poi']->values['longitude'] ?></div><br>
			<div id="lat-box" style="display: none"><?php echo $results['poi']->values['latitude'] ?></div><br>
<?php if ($results['username'] == "Admin") { ?>
			<form action="admin.php?action=check-poi" method="POST">
				<input type="hidden" name="poi_id" value="<?php echo $results['poi']->id ?>">
				<div class="pull-right">
					<input class="submit-box" type="submit" name="approve" value="Approve">
					<input class="submit-box" type="submit" name="reject" value="Reject">
					<input class="submit-box" type="submit" name="cancel" value="Cancel">
				</div>
			</form>
<?php } ?>
		</div>
	</div>
</div>
</div>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6XuB53ijPU3lrswSt7MrTLxpA2o4KkY8&callback=showMap" async defer></script>
<script type="text/javascript" src="js/poi_edit.js"></script>

<?php include "footer.php" ?>
