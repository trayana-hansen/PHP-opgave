<?php
/**
 * Class dbconf
 * Klasse til database oplysninger
 * Nedarver db klassen og opretter forbindelse til database
 */
class dbconf extends db {
    function __construct() {
        $this->dbhost = "localhost";
	    $this->dbuser = "root";
        $this->dbpassword = "";
        $this->dbname = "songbook";
        $db = parent::connect();
    }
}
