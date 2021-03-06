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
 
 class Councils extends ActiveRecord\Model
{
	static $table_name = 'councils';
    static $primary_key = 'councilid';
	protected $userId; 
	static $has_many = array(
      array('streetlight')
    );

	public function retrieve_CouncilsForCombo()
	{ 
		try{
			$councils =& parent::all();
		}
		 catch(ActiveRecord\RecordNotFound $rnf){
			$councils = array();
		 }	
		return $councils;
	}
	
	public function retrieve_CouncilsForComboByParish($parishId)
	{ 
		try{
			$councils =& parent::find_by_parishid($parishId);
		}
		 catch(ActiveRecord\RecordNotFound $rnf){
			$councils = array();
		 }	
		return $councils;
	}
}
?>