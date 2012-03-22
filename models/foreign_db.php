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
	
	
	public function get_report_list(){
		return parent::find_by_sql('select `contacts`.`contactid` AS `contactid`,`contacts`.`divisionid` AS `divisionid`,`contacts`.`councilid` AS `councilid`,`contacts`.`constituencyid` AS `constituencyid`,`contacts`.`email` AS `email`,`contacts`.`firstname` AS `firstname`,`contacts`.`lastname` AS `lastname`,`contacts`.`remarks` AS `remarks`,`contacts`.`create_date` AS `create_date`,`contacts`.`update_date` AS `update_date`,`public_request`.`public_requestid` AS `public_requestid`,`division`.`division` AS `division`,`district`.`district` AS `district`,`councils`.`council` AS `council` from ((((`contacts` join `public_request` on((`public_request`.`divisionid` = `contacts`.`divisionid`))) join `division` on((`division`.`divisionid` = `public_request`.`divisionid`))) join `district` on((`public_request`.`districtid` = `district`.`districtid`))) join `councils` on((`public_request`.`councilid` = `councils`.`councilid`)))');	
	}
	
}