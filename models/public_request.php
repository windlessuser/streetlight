<?php
require_once 'php-activerecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
	 $cfg->set_model_directory('models');
	 $cfg->set_connections(array(
	 //'development' => 'mysql://C344630_infantry:INFANTRY321@66.116.150.176/C344630_streetlight'));
	//'development' => 'mysql://username:password@localhost/database_name'));
	'development' => 'mysql://root@localhost/streetlight'));
});

class Public_Request extends ActiveRecord\Model
{
	 # explicit table name since our table is not "books" 
    static $table_name = 'public_request';
	private $referenceNumber = 000000; //class variable instantiated to a default value.currently not being used
	
	//save update, delete  and most retrieve methods will be handled by the active record
	
	function generate_Reference()
	{
		$currentDateTime = getdate();
		$year = substr($currentDateTime['year'],-2);
		$month = $currentDateTime['mon'];
		$day = $currentDateTime['mday'];
		$hours = $currentDateTime['hours'];
		$minutes = $currentDateTime['minutes'];
		
		$referenceNo = $year."".$month."".$day."".$hours."".$minutes;
		
		try
		{
			$existingRequest = Public_Request::find("reference_no = $referenceNo"); 
			echo $existingRequest;
		}
		catch(Exception $e)
		{
			$existingRequest  = null;
		}
		
		/*While (!(isset($existingRequest)))
		{			
			$currentDateTime = getdate();
			$year = substr($currentDateTime['year'],-2);
			$month = $currentDateTime['mon'];
			$day = $currentDateTime['mday'];
			$hours = $currentDateTime['hours'];
			$minutes = $currentDateTime['minutes'];
			$minutes++;
			$referenceNo = $year."".$month."".$day."".$hours."".$minutes;

			$existingRequest = Public_Request::find("reference_no = $referenceNo"); 
		}
		*/
		
		return $referenceNo;
	}
	
	
	function retrieve_PublicRequestbyReference($referenceNo)
	{
		$requestInfo = Public_Request::find("reference_no = $referenceNo"); // retrieves a particular request information and stores the result into an array.
		
		return $requestInfo;
	}
	
	function retrieve_UserRequests($userId)
	{
		$requests = Public_Request::find("userid = $userId"); // retrieves a particular user's requests and stores the result into an array.
		
		return $requests;
	}
	
	function retrieve_AllRequests($userId)
	{
		$requests = Public_Request::find(); // retrieves all requests and stores the result into an array.
		
		return $requests;
	}
}
?>