<?php
/* API code goes here. The webpages will be using JavaScript to build 
 * the interface after retrieving JSON from the server using this api.
 * 
 * Each possible data retrival and insertion operation will have its
 * own 'if' clause that will be triggered based upon the 'GET' variables
 * passed.
 * 
 * If no 'if' clause is triggered, the 'else' will be triggered which
 * will display info about how to use the api. The 'else' will also
 * check if invalid 'GET' variables have been set and will warn accordingly.
 * 
 * Before doing anything else, this script also checks if the user is logged
 * in or not.
*/

$objects;

if (isset($_GET['userid'])) {
	// Multiple if statements below will determine the operation performed.
	if (isset($_GET['version'])) {
		// Eventually, the version info will be retrieved from a file in the
		// conf folder which will be updated by git after every push to 
		// 'deploy'.
		$version = "alpha";
		$objects = array('response' => true, 'version' => $version);
		echo json_encode($objects);
	}
	else {
		$objects = array('response' => false);
		echo json_encode($objects);
	}
}
elseif (isset($_GET['username']) && isset($_GET['password'])) {
	$username = $_GET['username'];
	$password_hash = hash("md5", $_GET['password']);
	// Check if the username exists in the database and if the password
	// hash matches the stored hash, if it does not match, then return
	// false, if it does match, return true which will cause the user id
	// cookie to be set and the page to be redirected.
}
else {
	header("Location: ../login");
}
?>