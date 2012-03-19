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
    static $primary_key = 'streetlightid';
	protected $streetLightNo; 
	
	function retrieve_Streetlight($streetLightNo)
	{
		//$streetLight = Streetlight->find("streetlightid = $streetLightNo");
		$streetLight =& parent::find($streetLightNo);  
		return $streetLight;
	}
}


	$sl = new Streetlight;
	echo "Streetlight: ".print_r($sl->retrieve_Streetlight("101"));
	
	
?>