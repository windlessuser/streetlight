<?php
//require_once '../php-activerecord/ActiveRecord.php';
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
	
    static $table_name = 'public_request'; //explicit table name
	static $primay_key = 'public_requestid'; //explicit primary key
	
	 public function generate_Reference()
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
			$existingRequest =& parent::find_by_reference_no($referenceNo); 
		}
		//In case the record does not exsist.
		 catch(ActiveRecord\RecordNotFound $rnf)
		 {
			$existingRequest = array();
		 }
		
		While (isset($exsistingRequest->reference_no))  // loops until it generates a unique reference
		{			
			$currentDateTime =& getdate();
			$year =& substr($currentDateTime['year'],-2);
			$month = $currentDateTime['mon'];
			$day = $currentDateTime['mday'];
			$hours = $currentDateTime['hours'];
			$minutes = $currentDateTime['minutes'];
			$minutes++;
			$referenceNo = $year."".$month."".$day."".$hours."".$minutes;

			try
			{
				$existingRequest =& parent::find_by_reference_no($referenceNo); 
			}
			catch(ActiveRecord\RecordNotFound $rnf){
				$existingRequest = array();
			} 
		}
		return $referenceNo;
	}
	
	
	 public function retrieve_PublicRequestbyReference($referenceNo)
	{
		try
			{
				$requestInfo =& parent::find_by_reference_no($referenceNo); 
			}
			catch(ActiveRecord\RecordNotFound $rnf){
				$requestInfo = array();
			} 
		return $requestInfo;
	}
	
	public function retrieve_UserRequests($userId)
	{
		try
			{
				$requests =& parent::find_by_userid($userId); 
			}
			catch(ActiveRecord\RecordNotFound $rnf){
				$requests = array();
			} 
		return $requests;
	}
	
}
?>