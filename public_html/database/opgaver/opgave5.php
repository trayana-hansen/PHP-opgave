<?php
//Gets init.php
require_once($_SERVER['DOCUMENT_ROOT'].'/assets/incl/init.php');
?>

<?php
$keyword = "%" . $_GET['keyword'] . "%";
$params = array(
"keyword"=>array($keyword, PDO::PARAM_STR)
);


$sql = "SELECT title, content
		FROM song
		WHERE title LIKE :keyword";


$result = $db->query($sql,$params);

var_dump($result);
?>
