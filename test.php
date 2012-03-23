<?php
include('includes/config.php');


	$ParishId = 13;
	$con = mysqlconnect();
	$results = array();
	$query=mysql_query("
      SELECT * from users where parishid = $ParishId");
	if(!($query==null))
	{
		$num_rows = mysql_num_rows($query);
		if($num_rows > 0)
		{
			$counter = 0;
			while($row = mysql_fetch_assoc($query))
			{
				$results[$counter]= $row['parishid'];
				$counter++;
			}

		}
	}
	mysqlclose($con);
	
	echo $results[0]; 

?>