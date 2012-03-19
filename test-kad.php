<?php
require 'models/public_request.php';

$reference =  Public_Request::generate_Reference();

echo $reference;
?>