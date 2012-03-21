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
 
 class Division extends ActiveRecord\Model
{
	static $table_name = 'division';
    static $primary_key = 'divisionid';
	protected $userId; 
	static $has_many = array(array('streetlight'));

}
?>