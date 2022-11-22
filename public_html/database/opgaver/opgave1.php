<?php
//Gets init.php
require_once($_SERVER['DOCUMENT_ROOT'].'/assets/incl/init.php');
?>
<?php

$sql = "SELECT title
		 FROM song
		 ORDER BY title ASC";
$statement = $db->prepare($sql);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($result);






