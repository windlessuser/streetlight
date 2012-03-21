<?php
require 'models/public_request.php';

//$reference =  Public_Request::generate_Reference();

$posts  = District::retrieve_DistrictsForCombo();

foreach ($posts as $post)
   echo $post->district."</br>";

?>