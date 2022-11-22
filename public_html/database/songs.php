<?php
//Gets init.php
require_once($_SERVER['DOCUMENT_ROOT'].'/assets/incl/init.php');
?>
<?php

$artist_id = $_GET['artist_id'];

//Declares SQL variable with join to artist table
 $sql = "SELECT song.title, artist.name
		FROM song
		JOIN artist
		ON song.artist_id = artist.id
		WHERE song.artist_id = :artist_id";


//Evokes prepared statement
$statement = $db->prepare($sql);

//Binds parameters to statement
$statement->bindParam(':artist_id',$artist_id);

//Executes SQL statement
$statement->execute();

//Calls for fetch on statement object
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($rows);


?>
