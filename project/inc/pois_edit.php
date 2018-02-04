<?php
	$homepage = false;
	include "header.php";
	include "navibar.php";
?>

<!-- addPoiSection -->
<div class="addPoiSection">
<div class="container">
	<h3 class="title"><?php echo $results['pageTitle'] ?></h3>
	<div class="row">
		<div class="col-md-6">
			<div id="map-canvas"></div>
		</div>
		<form action="user.php?action=<?php echo $results['formAction'] ?>" method="POST">
			<div class="col-md-6">
				<input type="hidden" name="poi_id" value="<?php echo $results['poi']->id ?>">
				<input type="hidden" name="user_id" value="<?php echo $results['username'] ?>">
				<input type="hidden" name="pub_date" id="pub-date-box">
				POI's Name:<br>
				<input type="text" name="title" value="<?php echo $results['poi']->values['title'] ?>"><br>
				Short Description:<br>
				<input type="text" name="excerpt" value="<?php echo $results['poi']->values['excerpt'] ?>"><br>
			<div class="row">
			<div class="col-md-4">
				Latitude:<br>
				<input type="text" id="lat-box" name="latitude" value="<?php echo $results['poi']->values['latitude'] ?>" readonly>
			</div>
			<div class="col-md-4">
				Longitude:<br>
				<input type="text" id="lng-box" name="longitude" value="<?php echo $results['poi']->values['longitude'] ?>" readonly>
			</div>
			<div class="col-md-4">
				Elevation:<br>
				<select name="elevation">
<?php
	$array = array(
		"Ground",
		"2m Above",
		"10m Above",
		"50m Above"
	);
	foreach ($array as $data) {
?>
					<option value="<?php echo $data ?>"<?php if ($results['poi']->values['elevation'] == $data) echo " selected" ?>><?php echo $data ?></option>
<?php } ?>
				</select>
			</div>
			</div>
				Category:<br>
				<select name="category">
<?php
	$array = array(
		"Information Card",
		"Puzzle"
	);
	foreach ($array as $data) {
?>
					<option value="<?php echo $data ?>"<?php if ($results['poi']->values['category'] == $data) echo " selected" ?>><?php echo $data ?></option>
<?php } ?>
				</select><br>
				Card Type:<br>
				<select name="card_type">
					<option value="none"<?php if ($results['poi']->values['card_type'] == "None") echo " selected" ?> disabled>- None -</option>
<?php
	$array = array(
		"Agricultural",
		"Commercial",
		"Educational",
		"Government",
		"Industrial",
		"Infrastructure",
		"Medical",
		"Military",
		"Parking",
		"Power Provider",
		"Religious",
		"Transport",
		"Others"
	);
	foreach ($array as $data) {
?>
					<option value="<?php echo $data ?>"<?php if ($results['poi']->values['card_type'] == $data) echo " selected" ?>><?php echo $data ?></option>
<?php } ?>
				</select><br>
				Infomation:<br>
				<textarea name="content"><?php echo $results['poi']->values['content'] ?></textarea><br>
				<input type="hidden" name="pic_url" id="pic-url-box">
				<input type="hidden" name="ppl_count" value="<?php echo $results['poi']->values['ppl_count'] ?>">
				<input type="hidden" name="status" value="Pending">
				<div class="pull-right">
					<input class="submit-box" type="submit" name="submit" value="Submit" onclick="setDate();setPicUrl();">
<?php if ($results['formAction'] == "edit-poi" && $results['poi']->values['status'] != "Approved") { ?>
					<input class="submit-box" type="submit" name="delete" value="Delete" formnovalidate>
<?php } ?>
					<input class="submit-box" type="submit" name="cancel" value="Cancel" formnovalidate>
				</div>
			</div>
		</form>
	</div>
</div>
</div>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6XuB53ijPU3lrswSt7MrTLxpA2o4KkY8&callback=initMap" async defer></script>
<script type="text/javascript" src="js/poi_edit.js"></script>

<?php include "footer.php" ?>
