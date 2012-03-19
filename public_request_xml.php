<?php
require 'models/Public_Request2.php';

$requests =& Public_Request::find('all');

header ("Content-Type:text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<Public_Requests>\n";
foreach($requests as $request)
	echo $request->to_xml(array('skip_instruct' =>true));
echo '</Public_Requests>';
?>