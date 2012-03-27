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
 
 class Streetlight extends ActiveRecord\Model
{
	static $table_name = 'streetlight';
    static $primary_key = 'streetlightid';
	protected $userId; 
	static $belongs_to = array(array('district'),array('councils'),array('division'));

		public function retrieve_StreetlightInfo($streetlightNo)
	{
		try
			{
				$districtJoin = 'LEFT OUTER JOIN district ON streetlight.districtid =  district.districtid';
				$divisionJoin = 'LEFT OUTER JOIN division ON streetlight.divisionid = division.divisionid';
				$councilJoin = 'LEFT OUTER JOIN councils ON streetlight.councilid = councils.councilid';
				$strtLightTypeJoin = 'LEFT OUTER JOIN streetlight_type ON streetlight.streetlight_typeid = streetlight_type.streetlight_typeid';
				
				$sel = '*,councils.council AS councilName,division.division AS divisionName,district.district AS districtName,streetlight_type.streetlight_type AS streetlightType';
				
				$requests =& parent::find_by_streetlight_no($streetlightNo,array('joins' => array($districtJoin,$divisionJoin,$councilJoin,$strtLightTypeJoin),'select'=>$sel));
			}
			catch(ActiveRecord\RecordNotFound $rnf){
				$requests = array();
			} 
		return $requests;
	}
}
?>