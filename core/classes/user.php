<?php
class User {
	public $id;
	public $username;
	public $firstname;
	public $lastname;
	public $password;
	public $email;
	public $address;
	public $zipcode;

	private $db;

	//Function to get the lists with
	public function __construct() {
	global $db;
	$this->db = $db;
}

public function list() {
	$sql = "SELECT id, username, firstname, lastname,password, email, address, zipcode
	FROM user
	ORDER BY id";
return $this->db->query($sql);

}
	//Details route
	public function details($id) {
		$params = array(
			'id' => array($id,PDO::PARAM_INT)
		);

		$sql = "SELECT firstname, lastname, email, address, zipcode
				FROM user
				WHERE id = :id";
		return $this->db->query($sql, $params, Db::RESULT_SINGLE);
	}
	//create a new user
	public function create() {
		$params = array(
			'username' => array($this->username, PDO::PARAM_STR),
			'firstname' => array($this->firstname, PDO::PARAM_STR),
			'lastname' => array($this->lastname, PDO::PARAM_STR),
			'password' => array($this->password, PDO::PARAM_STR),
			'email' => array($this->email, PDO::PARAM_STR),
			'address' => array($this->address, PDO::PARAM_STR),
			'zipcode' => array($this->zipcode, PDO::PARAM_INT)

		);
		$sql = "INSERT INTO user(username, firstname, lastname, password, email, address, zipcode)
				VALUES(:username, :firstname, :lastname, :password, :email, :address, :zipcode)";
			$this->db->query($sql, $params);
			return $this->db->lastInsertId();
	}
	//update a user
	public function update() {
		$params = array(

			'id' => array($this->id, PDO::PARAM_INT),
			'username' => array($this->username, PDO::PARAM_STR),
			'firstname' => array($this->firstname, PDO::PARAM_STR),
			'lastname' => array($this->lastname, PDO::PARAM_STR),
			'password' => array($this->password, PDO::PARAM_STR),
			'email' => array($this->email, PDO::PARAM_STR),
			'address' => array($this->address, PDO::PARAM_STR),
			'zipcode' => array($this->zipcode, PDO::PARAM_INT)

		);
		$sql = "UPDATE user SET
				username = :username,
				firstname = :firstname,
				lastname = :lastname,
				password = :password,
				email = :email,
				address = :address,
				zipcode = :zipcode
				WHERE id = :id";
			return $this->db->query($sql, $params);
	}

	//delete a user
	public function delete($id) {
		$params = array(
			'id' => array($id, PDO::PARAM_INT)
		);

		$sql = "DELETE FROM user
				WHERE id = :id";
        return $this->db->query($sql, $params);
	}
}
?>



