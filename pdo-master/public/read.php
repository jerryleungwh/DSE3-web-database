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

		$sql = "SELECT * 
						FROM pois
						WHERE user_id = :user_id";

		$user_id = $_POST['user_id'];

		$statement = $connection->prepare($sql);
		$statement->bindParam(':user_id', $user_id, PDO::PARAM_STR);
		$statement->execute();

		$result = $statement->fetchAll();
	}
	
	catch(PDOException $error) 
	{
		echo $sql . "<br>" . $error->getMessage();
	}
}
?>
<?php require "templates/header.php"; ?>
		
<?php  
if (isset($_POST['submit'])) 
{
	if ($result && $statement->rowCount() > 0) 
	{ ?>
		<h2>Results</h2>

		<table>
			<thead>
				<tr>
					<th>id</th>
					<th>user_id</th>
					<th>longitude</th>
					<th>latitude</th>
					<th>altitude</th>
					<th>name</th>
					<th>info</th>
					<th>card_type</th>
					<th>category</th>
					<th>picURL</th>
					<th>date</th>
				</tr>
			</thead>
			<tbody>
	<?php 
		foreach ($result as $row) 
		{ ?>
			<tr>
				<td><?php echo escape($row["id"]); ?></td>
				<td><?php echo escape($row["user_id"]); ?></td>
				<td><?php echo escape($row["longitude"]); ?></td>
				<td><?php echo escape($row["latitude"]); ?></td>
				<td><?php echo escape($row["altitude"]); ?></td>
				<td><?php echo escape($row["name"]); ?></td>
				<td><?php echo escape($row["info"]); ?></td>
				<td><?php echo escape($row["card_type"]); ?></td>
				<td><?php echo escape($row["category"]); ?></td>
				<td><?php echo escape($row["picURL"]); ?></td>
				<td><?php echo escape($row["date"]); ?> </td>
			</tr>
		<?php 
		} ?>
		</tbody>
	</table>
	<?php 
	} 
	else 
	{ ?>
		<blockquote>No results found for user ID <?php echo escape($_POST['user_id']); ?>.</blockquote>
	<?php
	} 
}?> 

<h2>Find user based on user_id</h2>

<form method="post">
	<label for="user_id">user_id</label>
	<input type="text" id="user_id" name="user_id">
	<input type="submit" name="submit" value="View Results">
</form>

<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>