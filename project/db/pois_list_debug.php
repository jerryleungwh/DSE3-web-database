<?php
	require "../config.php";
	try{
		$pdo = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM pois";
		$result = $pdo->query($sql);

		echo "<table border='1' cellspacing='0'>";
			echo "<tr>";
				echo "<th>id</th>";
				echo "<th>user_id</th>";
				echo "<th>pub_date</th>";
				echo "<th>title</th>";
				echo "<th>card_type</th>";
				echo "<th>category</th>";
				echo "<th>excerpt</th>";
				echo "<th>content</th>";
				echo "<th>longitude</th>";
				echo "<th>latitude</th>";
				echo "<th>elevation</th>";
				echo "<th>pic_url</th>";
				echo "<th>ppl_count</th>";
				echo "<th>status</th>";
			echo "</tr>";
			
		if($result->rowCount() > 0){
			while($row = $result->fetch()){
				echo "<tr>";
					echo "<td>" . $row['id'] . "</td>";
					echo "<td>" . $row['user_id'] . "</td>";
					echo "<td>" . $row['pub_date'] . "</td>";
					echo "<td>" . $row['title'] . "</td>";
					echo "<td>" . $row['card_type'] . "</td>";
					echo "<td>" . $row['category'] . "</td>";
					echo "<td>" . $row['excerpt'] . "</td>";
					echo "<td>" . $row['content'] . "</td>";
					echo "<td>" . $row['longitude'] . "</td>";
					echo "<td>" . $row['latitude'] . "</td>";
					echo "<td>" . $row['elevation'] . "</td>";
					echo "<td>" . $row['pic_url'] . "</td>";
					echo "<td>" . $row['ppl_count'] . "</td>";
					echo "<td>" . $row['status'] . "</td>";
				echo "</tr>";
			}
			unset($result);
		}
		
		echo "</table>";
		
	} catch(PDOException $err){
		die("ERROR: " . $err->getMessage());
	}
	unset($pdo);
?>
