<?php

function mysqlconnect()
{
	$con= mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect; ' . mysql_error());
	}
	else
	{
		mysql_select_db("streetlight") or die ("error");
	}
	return $con;
}

function mysqlclose($con)
{
	mysql_close($con);
}

print_r ( mysqlconnect());
?>