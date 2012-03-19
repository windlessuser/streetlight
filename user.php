<?php
require_once 'php-activerecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
 {
     $cfg->set_model_directory('models');
     $cfg->set_connections(array(
         'development' => 'mysql://root:@localhost/streetlight')
		);
		//'development' => 'mysql://username:password@localhost/database_name'));
 });
 
 class User extends ActiveRecord\Model
{

	function retrieve_UserInfo($userId)
	{ 
		//$userInfo = user->find("userid = $userId");  // retrieves a particular user's information and stores the result into an array.
		$userInfo = $this->find_by_userid($userId);
		return $userInfo;
	}	
}
?>