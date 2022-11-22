<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/assets/incl/init.php');

echo $name = isset($_GET["name"]) && !empty($_GET["name"]) ? urldecode($_GET["name"]) : 0;
$params = array(
    'name' => array($name, PDO::PARAM_STR)
);

$sql = "SELECT s.title, s.content
        FROM song s
		JOIN artist a
		ON s.artist_id = a.id
		WHERE a.name LIKE :name";
$result = $db->query($sql, $params);
var_dump($result);
