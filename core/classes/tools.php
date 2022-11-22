<?php

class Tools {
	static public function Header($title) {
		$strPageTitle = $title;
		require_once ["DOCUMENT_ROOT"] . "/assets/incl/init.php";
	}
	static public function Footer() {
        require_once(DOCROOT . '/assets/incl/footer.php');
    }

    static public function jsonParser($json) {
        header('Content-Type: application/json; charset=utf-8');
        return json_encode($json);
    }
}

?>
