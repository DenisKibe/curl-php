<?php
include_once 'corefunc.php';

$header='Authorization:bearer sometoken';

$Del=callAPI('DELETE',''.$something,false,$header);

$response=json_decode($Del,true);

foreach($response as $key_name=>$key_value){
	echo "\$response[$key_name]=>$key_value.\n";
}
?>