<?php
require 'models/public_request.php';

$pr = Public_Request::find('all');

echo $pr->to_xml();
?>