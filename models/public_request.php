<?php
/*
*Model that connects to the Public_Request table in the database.
*@Author Marc Byfield
*/

require_once '../php-activerecord/ActiveRecord.php';
 
ActiveRecord\Config::initialize(function($cfg)
 {
     $cfg->set_model_directory('models');
     $cfg->set_connections(array(
         'development' => 'mysql://C344630_infantry:INFANTRY321@66.116.150.176/C344630_streetlight'));
          });

class Public_Request extends ActiveRecord\Model 
{}

?>