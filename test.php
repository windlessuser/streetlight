<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require 'models/public_request.php';

$pr = Public_Requests::find('all');

echo $pr->to_xml();
?>