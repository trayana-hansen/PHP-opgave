<?php
$dns = "mysql:host=localhost;dbname=techcollege";
$username = 'root';
$password = '';

try {
$db = new PDO($dns, $username, $password);
} catch(PDOException $err) {
	echo "Fejl i tilslutning af database: " .$err;
}

//Example of DDL query
$sql = "CREATE TABLE education_tech (
	id BIGINT(20) NOT NULL AUTO_INCREMENT,
	name VARCHAR(100) NOT NULL DEFAULT 'Ikke navngivet',
	active BOOL NOT NULL DEFAULT '0',
	PRIMARY KEY (id)

)";

//var_dump($db->query($sql));


//Example of fetchAll query with PDO object
$sql2 = "SELECT firstname, lastname FROM student";
$statement = $db->query($sql2, PDO::FETCH_ASSOC);
$result = $statement->fetchAll();

//var_dump($result);

//Example with prepared statements in PDO

$zipcode = 2300;

$sql = "SELECT email
		FROM student
		WHERE zipcode > :zipcode
		AND lastname = :lastname";


$statement = $db->prepare($sql);
$statement->bindParam(':zipcode',$zipcode);
$statement->bindParam(':lastname',$lastname);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($result);

?>
