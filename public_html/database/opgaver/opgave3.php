<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/assets/incl/init.php');

$artist_id = isset($_GET["artist_id"]) && !empty($_GET["artist_id"]) ? (int)$_GET["artist_id"] : 0;
$params = array(
    'artist_id' => array($artist_id, PDO::PARAM_INT)
);

$sql = "SELECT name
        FROM artist
        WHERE id = :artist_id";
$result = $db->query($sql, $params, Db::RESULT_VALUE); //One single result
var_dump($result);
?>
