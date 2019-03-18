<?php
include_once 'corefunc.php';

$header='Authorization:bearer sometoken';

$get_data=callAPI('GET', 'http://api.pennyinc.co.ke/api/Account/UserInfo','false',$header);

$response=json_decode($get_data, true);

foreach($response as $key_name=>$key_value){
	echo "\$response[$key_name]=>$key_value.\n"; 
}
?>