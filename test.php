<?php
require 'models/public_request.php';

$pr = Public_Requests::find('all');

echo $pr->to_xml();
?>