<?php

/**
 * Use an HTML form to create a new entry in the
 * users table.
 *
 */


if (isset($_POST['submit']))
{
	

	try 
	{
		require "../config.php";
		require "../common.php";
		
		$connection = new PDO($dsn, $username, $password, $options);
		
		$new_user = array(
			
			"user_id" => $_POST['user_id'],
			"longitude"  => $_POST['longitude'],
			"latitude"     => $_POST['latitude'],
			"altitude"       => $_POST['altitude'],
			"name"  => $_POST['name'],
			"info" => $_POST['info'],
			"card_type" => $_POST['card_type'],
			"category" => $_POST['category'],
			"picURL" => $_POST['picURL']
		);
		
		$id = $_POST['id'];
		$name  = $_POST['name'];
		

		$sql = sprintf(
				"UPDATE pois SET name=:name WHERE id=:id"
				/*"pois",
				implode(", ", array_keys($new_user)),
				":" . implode(", :", array_keys($new_user))*/
		);
		
		/*$statement = $connection->prepare($sql);
		$statement->execute(/*$new_user);*/
		
		$connection->exec($sql);
	}

	catch(PDOException $error) 
	{
		echo $sql . "<br>" . $error->getMessage();
	}
	
}
?>

<?php require "templates/header.php"; ?>

<?php 
if (isset($_POST['submit']) && $statement) 
{ ?>
	<blockquote><?php echo $_POST['name']; ?> successfully added.</blockquote>
<?php 
} ?>

<h2>edit a POI</h2>

<form method="post">
	<label for="id">id</label>
	<input type="text" id="id" name="id">
	<label for="user_id">user_id</label>
	<input type="text" name="user_id" value="000" id="user_id">
	<label for="longitude">longitude</label>
	<input type="text" name="longitude" value="000" id="longitude">
	<label for="latitude">latitude</label>
	<input type="text" name="latitude" value="000" id="latitude">
	<label for="altitude">altitude</label>
	<input type="text" name="altitude" value="000" id="altitude">
	<label for="name">name</label>
	<input type="text" name="name" value="000" id="name">
	<label for="info">info</label>
	<input type="text" name="info" value="000" id="info">
	<label for="card_type">card_type</label>
	<input type="text" name="card_type" value="000" id="card_type">
	<label for="category">category</label>
	<input type="text" name="category" value="000" id="category">
	<label for="picURL">picURL</label>
	<input type="text" name="picURL" value="000" id="picURL">
	<input type="submit" name="submit" value="Submit">
	
</form>

<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>