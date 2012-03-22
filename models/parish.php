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
 
 class Parish extends ActiveRecord\Model
{
	static $table_name = 'parish';
    static $primary_key = 'parishid';
	protected $userId; 
	static $has_many = array(array('streetlight'));
	
	
	public function retrieve_ParishesForCombo()
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