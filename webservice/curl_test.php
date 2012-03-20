<?php
require '../models/Public_Request3.php';

/*
* This file retrives the created json array created in public_requests_json and uses it to syncronises the other database.
* Author Marc Byfield
* date: 20/03/2010
*/

//This section uses cURL to retrieve the json object.

//url for the json feed. You MUST remember to change this.
$ch =& curl_init("http://localhost:8080/streetlight/webservice/public_request_json.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$raw_request =& curl_exec($ch);
curl_close($ch);

//Decode the Json object back to a php array.
$public_requests =& json_decode($raw_request);
$public_request = new Public_Request; //Database model
$total_requests = count((array)$public_requests);
$successful_updates = 0;
$successful_creates = 0;

foreach($public_requests as $request){
	//convert the record to an object
	$request =& json_decode($request);
	try{
		$public_request =& $public_request->find($request->public_requestid);
		$public_request->update_attributes(get_object_vars($request));
		$successful_updates++;
	}
	//If the record doesn't exist, then create it.
	catch(ActiveRecord\RecordNotFound $rnf){
		$public_request->create(get_object_vars($request));
		$successful_creates++;
	}
	//If there was another error, ignore the bad record.
	catch(Exception $e){
		$public_request->reload();
	}
}

echo "Synchronisation complete:From a total of $total_requests records, $successful_updates were updated and $successful_creates created.";
?>