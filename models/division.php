<?php
//require_once '../php-activerecord/ActiveRecord.php';
require_once 'php-activerecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
 {
     $cfg->set_model_directory('models');
     $cfg->set_connections(array(
         'development' => 'mysql://root@localhost/streetlight')
		);
		//'development' => 'mysql://username:password@localhost/database_name'));
 });
 
 class Division extends ActiveRecord\Model
{
	static $table_name = 'division';
    static $primary_key = 'divisionid';
	protected $userId; 
	static $has_many = array(array('streetlight'));
	
	public function retrieve_DivisionsForCombo()
	{ 
		try{
			$results =& parent::all();
		}
		 catch(ActiveRecord\RecordNotFound $rnf){
			$results = array();
		 }	
		return $results;
	}
	
	public function retrieve_DivisionsForComboByCouncilId($councilId)
	{ 
		try{
			$results =& parent::find_by_councilid($councilId);
		}
		 catch(ActiveRecord\RecordNotFound $rnf){
			$results = array();
		 }	
		return $results;
	}

}
?>