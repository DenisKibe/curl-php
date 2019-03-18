<?php
include_once 'corefunc.php';

$header='Authorization:bearer sometoken';

$data_array=array("username"=>"kibedenis@gmail.com","password"=>"@Wanyugik2018");

$make_call=callAPI('POST','http://api.pennyinc.co.ke/oAuth2/GetToken',json_encode($data_array),$header);

$response=json_decode($make_call, true);

foreach($response as $key_name=>$key_value){
	echo "\$response[$key_name]=>$key_value.\n"; 
}


?>