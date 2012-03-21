<?php
require 'models/public_request.php';

//$reference =  Public_Request::generate_Reference();

$posts  = Streetlight::retrieve_StreetlightInfo('1203202349');

foreach ($posts as $post)
   echo $posts->council;

?>