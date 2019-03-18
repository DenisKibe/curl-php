<?php
include_once 'corefunc.php';

$header='Authorization:bearer sometoken';

$data_array=array();

$update_plan=callAPI('PUT','',json_encode($data_array,$header));

$response=json_decode($update_plan, true);

foreach($response as $key_name=>$key_value){
	echo "\$response[$key_name]=>$key_value.\n"; 
}
?>