<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";

Route::add('/api/artist/', function() {
	$artist = new Artist();
	$result = $artist->list();
	echo Tools::jsonParser($result);
});

//Details route
Route::add('/api/artist/([0-9]*)', function($id) {
	$artist = new Artist();
	$result = $artist->details($id);
	echo Tools::jsonParser($result);
});

//create new Artist
Route::add('/api/artist/', function() {
	$artist = new Artist();
	$artist->name = isset($_POST['name']) && !empty($_POST['name']) ? $_POST['name'] :null;

	if ($artist->name){
	 echo $artist->create();
	} else {
	   echo "Artist cannot be created";
	}
   }, 'post');

// update existing Artist

Route::add('/api/artist/', function() {
	$data = file_get_contents("php://input");
	parse_str($data, $parsed_data);

	$artist = new Artist();
	$artist->id = isset($parsed_data['id']) && !empty($parsed_data['id']) ? (int)$parsed_data['id'] :null;
	$artist->name = isset($parsed_data['name']) && !empty($parsed_data['name']) ? $parsed_data['name'] :null;


	if($artist->id && $artist->name){
		echo $artist->update();
	 } else {
		echo "Artist cannot be updated";
	 }
}, 'put');


//delete artist

Route::add('/api/artist/([0-9]*)', function($id) {
	$artist = new Artist;

	if($artist->id){
		echo $artist->delete($id);
	 } else {
		echo "Artist cannot be deleted. Delete songs associated with this artist first.";
	 }
}, 'delete');


Route::run('/');
?>
