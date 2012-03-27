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
 
 class User extends ActiveRecord\Model
{
	static $table_name = 'users';
    static $primary_key = 'userid';
	protected $userId; 

	Public function retrieve_UserInfo($userId)
	{ 
		try
		{
			$orgTypeJoin = 'LEFT OUTER JOIN organization_type ON users.organization_typeid = organization_type.organization_typeid';
			$sel = '*,organization_type.organization_type';
		
			$userInfo =& parent::find($userId,array('joins' => array($orgTypeJoin),'select'=>$sel));
		}
		 catch(ActiveRecord\RecordNotFound $rnf){
			$userInfo = array();
		 }
				
		return $userInfo;
	}	
}

?>