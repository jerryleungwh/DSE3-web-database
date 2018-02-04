<?php
	/**
	 * Class to handle Pois
	 */
	class Poi {
		/**
		 * @var assoc Default values of the Poi variables
		 */
		public $id = null;
		public $values = array(
			"user_id"	=> "",
			"pub_date"	=> 0,
			"title"		=> "Hong Kong University of Science and Technology",
			"card_type"	=> "None",
			"category"	=> "Information Card",
			"excerpt"	=> "",
			"content"	=> "",
			"longitude"	=> "114.26545143127441",
			"latitude"	=> "22.336401432259724",
			"elevation"	=> "Ground",
			"pic_url"	=> "",
			"ppl_count"	=> 0,
			"status"	=> "Pending"
		);
		
		/**
		 * Sets the object's properties using the values in the supplied array
		 *
		 * @param assoc The property values
		 */
		public function __construct($data = array()) {
			if (isset($data['id']))			$this->id					= (int) $data['id'];
			if (isset($data['user_id']))	$this->values['user_id']	= preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['user_id']);
			if (isset($data['pub_date']))	$this->values['pub_date']	= (int) $data['pub_date'];
			if (isset($data['title']))		$this->values['title']		= preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['title']);
			if (isset($data['card_type']))	$this->values['card_type']	= $data['card_type'];
			if (isset($data['category']))	$this->values['category']	= $data['category'];
			if (isset($data['excerpt']))	$this->values['excerpt']	= preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['excerpt']);
			if (isset($data['content']))	$this->values['content']	= preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['content']);
			if (isset($data['longitude']))	$this->values['longitude']	= $data['longitude'];
			if (isset($data['latitude']))	$this->values['latitude']	= $data['latitude'];
			if (isset($data['elevation']))	$this->values['elevation']	= $data['elevation'];
			if (isset($data['pic_url']))	$this->values['pic_url']	= $data['pic_url'];
			if (isset($data['ppl_count']))	$this->values['ppl_count']	= (int) $data['ppl_count'];
			if (isset($data['status']))		$this->values['status']		= $data['status'];
		}
		
		/**
		 * Prints the object's properties for debugging purpose
		 *
		 * @param assoc The property values
		 */
		public function printValues() {
			echo "<p>id: " . (is_null($this->id)? "null" : $this->id) . "<br>";
			foreach ($this->values as $key => $data) {
				echo $key . ": " . (is_null($data)? "null" : $data) . "<br>";
			}
			echo "</p>";
		}
		
		/**
		 * Sets the object's properties using the edit form post values in the supplied array
		 *
		 * @param assoc The form post values
		 */
		public function storeFormValues($params) {
			// Store all the parameters
			$this->__construct($params);
			
			// Parse and store the publication date
			if (isset($params['pub_date'])) {
				$pub_date = explode('-', $params['pub_date']);
				if (count($pub_date) == 6) {
					list($y, $m, $d, $h, $n, $s) = $pub_date;
					$this->values['pub_date'] = mktime($h, $n, $s, $m, $d, $y);
				}
			}
		}
		
		/**
		 * Returns a Poi object matching the given Poi ID
		 *
		 * @param int The Poi ID
		 * @return Poi|false The Poi object, or false if the record was not found or there was a problem
		 */
		public static function getById($id) {
			$pdo = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
			$sql = "SELECT * FROM pois WHERE id = :id";
			$st = $pdo->prepare($sql);
			$st->bindValue(":id", $id, PDO::PARAM_INT);
			$st->execute();
			$row = $st->fetch();
			unset($pdo);
			if ($row) return new Poi($row);
		}
		
		/**
		 * Returns all (or a range of) Poi objects in the database
		 *
		 * @param string Optional condition for the search (default = "")
		 * @return Array|false A two-element array: results => array, a list of Poi objects; totalRows => Total number of Pois
		 */
		public static function getList($condition = "") {
			$pdo = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
			$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM pois " . $condition;
			$st = $pdo->prepare($sql);
			$st->execute();
			
			$list = array();
			while($row = $st->fetch()){
				$Poi = new Poi($row);
				$list[] = $Poi;
			}

			// Now get the total number of Pois that matched the criteria
			$sql = "SELECT FOUND_ROWS() AS totalRows";
			$totalRows = $pdo->query($sql)->fetch();
			unset($pdo);
			return (array("results" => $list, "totalRows" => $totalRows[0]));
		}
		
		/**
		 * Inserts the current Poi object into the database, and sets its ID property.
		 */
		public function insert() {
			// Does the Poi object already have an ID?
			if (!is_null($this->id)) {
				trigger_error("Poi::insert(): Attempt to insert a Poi object that already has its ID property set (to $this->id).", E_USER_ERROR);
			}
			
			// Insert the Poi
			$pdo = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
			$sql = sprintf("INSERT INTO pois (%s) VALUES (%s)",
						implode(", ", array_keys($this->values)),
						":" . implode(", :", array_keys($this->values))
					);
			$st = $pdo->prepare($sql);
			$st->execute($this->values);
			
			$this->id = $pdo->lastInsertId();
			unset($pdo);
		}

		/**
		 * Updates the current Poi object in the database.
		 */
		public function update() {
			// Does the Poi object have an ID?
			if (is_null($this->id)) {
				trigger_error("Poi::update(): Attempt to update a Poi object that does not have its ID property set.", E_USER_ERROR);
			}
			
			// Update the Poi
			$pdo = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
			foreach ($this->values as $key => $data) {
				$set[] = sprintf("%s=:%s", $key, $key);
			}
			$sql = sprintf("UPDATE pois SET %s WHERE id=:id", implode(", ", $set));
					
			$st = $pdo->prepare($sql);
			$st->bindValue(":id",			$this->id,					PDO::PARAM_INT);
			$st->bindValue(":user_id",		$this->values['user_id'],	PDO::PARAM_STR);
			$st->bindValue(":pub_date",		$this->values['pub_date'],	PDO::PARAM_INT);
			$st->bindValue(":title",		$this->values['title'],		PDO::PARAM_STR);
			$st->bindValue(":card_type",	$this->values['card_type'],	PDO::PARAM_STR);
			$st->bindValue(":category",		$this->values['category'],	PDO::PARAM_STR);
			$st->bindValue(":excerpt",		$this->values['excerpt'],	PDO::PARAM_STR);
			$st->bindValue(":content",		$this->values['content'],	PDO::PARAM_STR);
			$st->bindValue(":longitude",	$this->values['longitude'],	PDO::PARAM_STR);
			$st->bindValue(":latitude",		$this->values['latitude'],	PDO::PARAM_STR);
			$st->bindValue(":elevation",	$this->values['elevation'],	PDO::PARAM_STR);
			$st->bindValue(":pic_url",		$this->values['pic_url'],	PDO::PARAM_STR);
			$st->bindValue(":ppl_count",	$this->values['ppl_count'],	PDO::PARAM_INT);
			$st->bindValue(":status",		$this->values['status'],	PDO::PARAM_STR);
			$st->execute();
			
			unset($pdo);
		}
	  
		/**
		 * Deletes the current Poi object from the database.
		 */
		public function remove() {
			// Does the Poi object have an ID?
			if (is_null($this->id)) {
				trigger_error("Poi::delete(): Attempt to delete a Poi object that does not have its ID property set.", E_USER_ERROR);
			}
			
			// Delete the Poi
			$pdo = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
			$st = $pdo->prepare("DELETE FROM pois WHERE id = :id LIMIT 1");
			$st->bindValue(":id", $this->id, PDO::PARAM_INT);
			$st->execute();
			unset($pdo);
		}
	}
?>
