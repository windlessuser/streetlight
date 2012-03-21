<?php
require_once 'php-activerecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
 {
     $cfg->set_model_directory('models');
     $cfg->set_connections(array(
         'development' => 'mysql://root@localhost/streetlight')
		);
		//'development' => 'mysql://username:password@localhost/database_name'));
 });
 
 class CouncilRequest extends ActiveRecord\Model
{
	static $table_name = 'councils';
    static $primary_key = 'councilid';
	protected $councilId; 

	function retrieve_CouncilInfo($councilId)
	{ 
		//$userInfo = user->find("userid = $userId");  
		try{
			$coucilInfo =& parent::find($councilId);
		}
		 catch(ActiveRecord\RecordNotFound $rnf){
			$coucilInfo = array();
		 }
		
		// retrieves a particular user's information and stores the result into an array.
				
		return $coucilInfo;
	}	
	
	function get_CouncilName($councilId){
		$coucilInfo =& parent::find('name', array('conditions' => "councilid LIKE '$councilId'"));
	}
}

$ccl = new CouncilRequest;
	print_r($usr->retrieve_CouncilInfo("4"));
?>