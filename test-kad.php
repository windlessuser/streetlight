<?php
require_once 'php-activerecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
	$cfg->set_model_directory('.');
	$cfg->set_connections(array(
	//'development' => 'mysql://C344630_infantry:INFANTRY321@66.116.150.176/C344630_streetlight'));
	//'development' => 'mysql://username:password@localhost/database_name'));
	'development' => 'mysql://root@localhost/streetlight'));
});
	 
class public_request extends ActiveRecord\Model
{	
	function generate_Reference()
	{
		$currentDateTime = getdate();
		$year = substr($currentDateTime['year'],-2);
		$month = $currentDateTime['mon'];
		$day = $currentDateTime['mday'];
		$hours = $currentDateTime['hours'];
		$minutes = $currentDateTime['minutes'];
		
		$referenceNo = $year."".$month."".$day."".$hours."".$minutes;
	
		$existingRequest = public_request::find("reference_no = $referenceNo"); 
		
		While ($existingRequest != null)
		{			
			$currentDateTime = getdate();
			$year = substr($currentDateTime['year'],-2);
			$month = $currentDateTime['mon'];
			$day = $currentDateTime['mday'];
			$hours = $currentDateTime['hours'];
			$minutes = $currentDateTime['minutes'];
			$minutes++;
			$referenceNo = $year."".$month."".$day."".$hours."".$minutes;

			$existingRequest = public_request::find("reference_no = $referenceNo"); 
		} 
		
		return $referenceNo;
	}
}

$reference =  public_request::generate_Reference();

echo $reference;
?>