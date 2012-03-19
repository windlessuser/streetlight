<?php
/*
*Model that connects to the Public_Request table in the database.
*@Author Marc Byfield
*/

require_once 'php-activerecord/ActiveRecord.php';
 
ActiveRecord\Config::initialize(function($cfg)
 {
     $cfg->set_model_directory('models');
     $cfg->set_connections(array(
        'development' => 'mysql://root@localhost/streetlight'));
          });

class Public_Request extends ActiveRecord\Model 
{
	static $table_name = 'public_request';
}

?>