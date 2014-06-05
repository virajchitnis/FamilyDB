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

if (isset($_GET['userid'])) {
	if (true) {
		
	}
	else {
		echo json_encode(array('response' => false));
	}
}
else {
	header("Location: ../login");
}
?>