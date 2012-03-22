<?php
/*
* Creates an array of the json encoding of each record in the public_requests table.
* returns a json encoded rep of that array
* Author Marc Byfield
* date: 20/03/2010
*/

require '../models/Public_Request.php';

try{
	$requests =& Public_Request::find_all_by_public_request_statusid(1);
	foreach($requests as $r){
		$public_requests[$r->public_requestid] =& $r->to_json();
	}
}
catch (ActiveRecord\RecordNotFound $rnf){
	$public_requests = array();
}

echo json_encode($public_requests);

?>