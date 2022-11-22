<?php
//Define a constant
define("DOCROOT", $_SERVER["DOCUMENT_ROOT"]);
define("COREROOT", str_replace('public_html', 'core/', $_SERVER['DOCUMENT_ROOT'])) ;
require_once(COREROOT . '/classes/autoload.php');

$db = new dbconf();
?>
