<?php
require_once ('php-activerecord/ActiveRecord.php');

ActiveRecord\Config::initialize(function($cfg) {
     $cfg->set_model_directory('models');
     $cfg->set_connections(array(
         'development' => 'mysql://root@localhost/streetlight')
         //'development' => 'mysql://C344630_infantry:INFANTRY321@66.116.150.176/C344630_streetlight')
		//'development' => 'mysql://username:password@localhost/database_name'));
		);
 });

class Streetlight extends ActiveRecord\Model
{
	
	static $table_name = 'streetlight';
    static $primary_key = 'streetlight_no';
	protected $streetLightNo; 
	
	function retrieve_Streetlight($streetLightNo)
	{
		//$streetLight = Streetlight->find("streetlightid = $streetLightNo");
		 try{
			$streetLight =& parent::find($streetLightNo);
		 }
		 //In case the record does not exsist.
		 catch(ActiveRecord\RecordNotFound $rnf){
			$streetLight = array();
		 }
/*		
		//$posts = Post::find('all',array('conditions' => array('name=?','The Bridge Builder')));
		$streetLight = Streetlight::find('all', array('conditions' => array('streetlight_no=?', $streetLightNo)));
		//$streetLight =& parent::find_by_streetlight_no($this->streetLightNo);  
*/
		return $streetLight;
	}
}


	$sl = new Streetlight;
	print_r($sl->retrieve_Streetlight("101"));
	
	
?>