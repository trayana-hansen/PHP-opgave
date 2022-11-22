<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/assets/incl/init.php');

$song_id = isset($_GET["song_id"]) && !empty($_GET["song_id"]) ? (int)$_GET["song_id"] : 0;
$params = array(
    'song_id' => array($song_id, PDO::PARAM_INT)
);

$sql = "SELECT title, content
        FROM song
        WHERE id = :song_id";
$result = $db->query($sql, $params);
var_dump($result);
?>
