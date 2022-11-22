<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";

Route::add('/api/user/', function() {
	$user = new User();
	$result = $user->list();
	echo Tools::jsonParser($result);
});

//details
Route::add('/api/user/([0-9]*)', function($id) {
	$user = new User();
	$result = $user->details($id);
	echo Tools::jsonParser($result);
});

//create
Route::add('/api/user/', function() {
 $user = new User();
 $user->username = ($_POST['username']) && !empty($_POST['username']) ? $_POST['username'] :null;
 $user->firstname = ($_POST['firstname'])  && !empty($_POST['firstname']) ? $_POST['firstname'] :null;
 $user->lastname = ($_POST['lastname'])  && !empty($_POST['lastname']) ? $_POST['lastname'] :null;
 $user->password = ($_POST['password'])  && !empty($_POST['password']) ? $_POST['password'] :null;
 $user->email = ($_POST['email'])  && !empty($_POST['email']) ? $_POST['email'] :null;
 $user->address = ($_POST['address'])  && !empty($_POST['address']) ? $_POST['address'] :null;
 $user->zipcode = ($_POST['zipcode'])  && !empty($_POST['zipcode']) ? $_POST['zipcode'] :null;

 if ($user->username && $user->firstname && $user->lastname && $user->password && $user->email && $user->address && $user->zipcode){
	$user->create();
 } else {
	echo "User cannot be created";
 }
}, 'post');

//update user
Route::add('/api/user/', function() {
	$data = file_get_contents("php://input");
	parse_str($data, $parsed_data);

	$user = new User;
	$user->id = isset($parsed_data['id']) && !empty($parsed_data['id']) ? (int)$parsed_data['id'] :null;
	$user->username = isset($parsed_data['username']) && !empty($parsed_data['username']) ? $parsed_data['username'] :null;
	$user->firstname = isset($parsed_data['firstname'])  && !empty($parsed_data['firstname']) ? $parsed_data['firstname'] :null;
	$user->lastname = isset($parsed_data['lastname'])  && !empty($parsed_data['lastname']) ? $parsed_data['lastname'] :null;
	$user->password = isset($parsed_data['password'])  && !empty($parsed_data['password']) ? $parsed_data['password'] :null;
	$user->email = isset($parsed_data['email'])  && !empty($parsed_data['email']) ? $parsed_data['email'] :null;
	$user->address = isset($parsed_data['address'])  && !empty($parsed_data['address']) ? $parsed_data['address'] :null;
	$user->zipcode = isset($parsed_data['zipcode'])  && !empty($parsed_data['zipcode']) ? (int)$parsed_data['zipcode'] :null;

	if($user->id && $user->username && $user->firstname && $user->lastname && $user->password && $user->email && $user->address && $user->zipcode){
		echo $user->update();
	 } else {
		echo "User cannot be updated";
	 }
}, 'put');

//delete user
Route::add('/api/user/([0-9]*)', function($id) {
	$user = new User;
	echo $user->delete($id);
}, 'delete');
Route::run('/');
?>
