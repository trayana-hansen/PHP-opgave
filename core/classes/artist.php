<?php
class Artist {
	public $id;
	public $name;
	public $created_at;
	public $updated_at;

	private $db;

	//Function to get the lists with
	public function __construct() {
		global $db;
		$this->db = $db;
	}


	public function list() {
		$sql = "SELECT id, name
		FROM artist
		ORDER BY id";
	return $this->db->query($sql);

	}

	public function details($id) {
		$params = array(
			'id' => array($id,PDO::PARAM_INT)
		);

		$sql = "SELECT name
				FROM artist
				WHERE id = :id";
		return $this->db->query($sql, $params, Db::RESULT_SINGLE);
	}
	//create a new artist
	public function create() {
		$params = array(
			'name' => array($this->name, PDO::PARAM_STR),
		);
		$sql = "INSERT INTO artist(name)
				VALUES(:name)";
			$this->db->query($sql, $params);
			return $this->db->lastInsertId();
	}
	//update an artist
	public function update() {
		$params = array(

			'id' => array($this->id, PDO::PARAM_INT),
			'name' => array($this->name, PDO::PARAM_STR)
		);
		$sql = "UPDATE artist SET
				name = :name
				WHERE id = :id";
			return $this->db->query($sql, $params);
	}
	public function delete($id) {
		$params = array(
			'id' => array($id, PDO::PARAM_INT)
		);

		$sql = "DELETE FROM artist a
				JOIN song s
				ON a.id = s.artist_id
				WHERE id = :id";
        return $this->db->query($sql, $params);
	}
}
?>
