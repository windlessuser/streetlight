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
 
 class Scheme extends ActiveRecord\Model
{
	static $table_name = 'scheme';
    static $primary_key = 'schemeid';
	protected $userId; 
	static $has_many = array(array('streetlight'));
	
	
	public function retrieve_SchemesForCombo()
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