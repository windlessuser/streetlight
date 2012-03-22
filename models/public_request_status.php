<?php
require_once '../php-activerecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
 {
     $cfg->set_model_directory('models');
     $cfg->set_connections(array(
         'development' => 'mysql://root@localhost/streetlight')
		);
		//'development' => 'mysql://username:password@localhost/database_name'));
 });
 
 class Public_Request_Status extends ActiveRecord\Model
{
	static $table_name = 'public_request_status';
    static $primary_key = 'public_request_statusid';
	protected $userId; 
	static $has_many = array(array('streetlight'));
	
	public function retrieve_StatusForCombo()
	{ 
		try{
			$results =& parent::all();
		}
		 catch(ActiveRecord\RecordNotFound $rnf){
			$results = array();
		 }	
		return $results;
	}

}
?>