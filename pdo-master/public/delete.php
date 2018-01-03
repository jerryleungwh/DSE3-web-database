<?php

/**
 * Function to query information based on 
 * a parameter: in this case, location.
 *
 */

if (isset($_POST['submit'])) 
{
	
	try 
	{
		
		require "../config.php";
		require "../common.php";

		$connection = new PDO($dsn, $username, $password, $options);

		$sql = "DELETE  
						FROM pois
						WHERE id = :id";

		$id = $_POST['id'];

		$statement = $connection->prepare($sql);
		$statement->bindParam(':id', $id, PDO::PARAM_STR);
		$statement->execute();

		/*$result = $statement->fetchAll();*/
	}
	
	catch(PDOException $error) 
	{
		echo $sql . "<br>" . $error->getMessage();
	}
}
?>
<?php require "templates/header.php"; ?>
	

<h2>Find user based on id</h2>

<form method="post">
	<label for="id">id</label>
	<input type="text" id="id" name="id">
	<input type="submit" name="submit" value="View Results">
</form>

<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>