<?php
//require_once 'php-activerecord\ActiveRecord.php';
require_once '../php-activerecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
	 $cfg->set_model_directory('models');
	 $cfg->set_connections(array(
	 //'development' => 'mysql://C344630_infantry:INFANTRY321@66.116.150.176/C344630_streetlight'));
	//'development' => 'mysql://username:password@localhost/database_name'));
	'development' => 'mysql://root@localhost/streetlight'));
});

class Foreign_DB extends ActiveRecord\Model
{
	
    static $table_name = 'public_request_copy'; //explicit table name
	static $primay_key = 'public_requestid'; //explicit primary key
	
}