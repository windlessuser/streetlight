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
 
 class Councils extends ActiveRecord\Model
{
	static $table_name = 'councils';
    static $primary_key = 'councilid';
	protected $userId; 
	static $has_many = array(
      array('streetlight')
    );

}
?>