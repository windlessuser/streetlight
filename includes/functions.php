<?php
include('config.php');

function retrieveCouncilsForComboByParishId($ParishId)
{
	$con = mysqlconnect();
	$results = array();
	$query=mysql_query("
      SELECT * from councils where parishid = $ParishId");
	if(!($query==null))
	{
		$num_rows = mysql_num_rows($query);
		if($num_rows > 0)
		{
			$counter = 0;
			while($row = mysql_fetch_assoc($query))
			{
				$results[$counter]['councilid']= $row['councilid'];
				$results[$counter]['council']= $row['council'];
				$counter++;
			}

		}
	}
	mysqlclose($con);
	
	return $results;
}  

function retrieveDivisionsForComboByCouncilId($councilsid)
{
	$con = mysqlconnect();
	$results = array();
	$query=mysql_query("
      SELECT * from division where councilid = $councilsid");
	if(!($query==null))
	{
		$num_rows = mysql_num_rows($query);
		if($num_rows > 0)
		{
			$counter = 0;
			while($row = mysql_fetch_assoc($query))
			{
				$results[$counter]['divisionid']= $row['divisionid'];
				$results[$counter]['division']= $row['division'];
				$counter++;
			}

		}
	}
	mysqlclose($con);
	
	return $results;
}

function retrieveDistrictsForComboByCouncilId($councilsid)
{
	$con = mysqlconnect();
	$results = array();
	$query=mysql_query("
      SELECT * from district where councilid = $councilsid");
	if(!($query==null))
	{
		$num_rows = mysql_num_rows($query);
		if($num_rows > 0)
		{
			$counter = 0;
			while($row = mysql_fetch_assoc($query))
			{
				$results[$counter]['districtid']= $row['districtid'];
				$results[$counter]['district']= $row['district'];
				$counter++;
			}
		}
	}
	mysqlclose($con);
	
	return $results;
}


function retrieveSchemesForComboByParishId($parishId)
{
	$con = mysqlconnect();
	$results = array();
	$query=mysql_query("
      SELECT * from scheme where parishid = $parishId");
	if(!($query==null))
	{
		$num_rows = mysql_num_rows($query);
		if($num_rows > 0)
		{
			$counter = 0;
			while($row = mysql_fetch_assoc($query))
			{
				$results[$counter]['schemeid']= $row['schemeid'];
				$results[$counter]['scheme']= $row['scheme'];
				$counter++;
			}
		}
	}
	mysqlclose($con);
	
	return $results;
}

function retrieveParishesForCombo()
{
	$con = mysqlconnect();
	$results = array();
	$query=mysql_query("
      SELECT * from parish");
	if(!($query==null))
	{
		$num_rows = mysql_num_rows($query);
		if($num_rows > 0)
		{
			$counter = 0;
			while($row = mysql_fetch_assoc($query))
			{
				$results[$counter]['parishid']= $row['parishid'];
				$results[$counter]['parish']= $row['parish'];
				$counter++;
			}
		}
	}
	mysqlclose($con);
	
	return $results;
}

function retrieveOrgTypesForCombo()
{
	$con = mysqlconnect();
	$results = array();
	$query=mysql_query("
      SELECT * from organization_type");
	if(!($query==null))
	{
		$num_rows = mysql_num_rows($query);
		if($num_rows > 0)
		{
			$counter = 0;
			while($row = mysql_fetch_assoc($query))
			{
				$results[$counter]['organization_typeid']= $row['organization_typeid'];
				$results[$counter]['organization_type']= $row['organization_type'];
				$counter++;
			}
		}
	}
	mysqlclose($con);
	
	return $results;
}

function retrieveStatusForCombo()
{
	$con = mysqlconnect();
	$results = array();
	$query=mysql_query("
      SELECT * from public_request_status");
	if(!($query==null))
	{
		$num_rows = mysql_num_rows($query);
		if($num_rows > 0)
		{
			$counter = 0;
			while($row = mysql_fetch_assoc($query))
			{
				$results[$counter]['public_request_statusid']= $row['public_request_statusid'];
				$results[$counter]['public_request_status']= $row['public_request_status'];
				$counter++;
			}
		}
	}
	mysqlclose($con);
	
	return $results;
}

function retrieveDefectsForCombo()
{
	$con = mysqlconnect();
	$results = array();
	$query=mysql_query("
      SELECT * from streetlight_defect");
	if(!($query==null))
	{
		$num_rows = mysql_num_rows($query);
		if($num_rows > 0)
		{
			$counter = 0;
			while($row = mysql_fetch_assoc($query))
			{
				$results[$counter]['streetlight_defecttypeid']= $row['streetlight_defecttypeid'];
				$results[$counter]['streetlight_defecttype']= $row['streetlight_defecttype'];
				$counter++;
			}
		}
	}
	mysqlclose($con);
	
	return $results;
}




?>