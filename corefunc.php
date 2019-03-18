<?php
function callAPI($method, $url, $data, $headers=false){
	$curl=curl_init();
	
	switch($method){
		case "POST":
			curl_setopt($curl, CURLOPT_POST, 1);
			
			if ($data)
				curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
			break;
		case "PUT":
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
			
			if($data)
				curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
			break;
		default:
			if($data)
				$url=sprintf("%s?%s", $curl, http_build_query($data));
	}
	
	//options:
	curl_setopt($curl, CURLOPT_URL, $url);
	
	if(!$headers){
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
			'Content-Type:application/json',
			'Authorization:bearer hvdpQH08s_o2Moj0uQPp3izeZt_7hs06QIwJr6bEUrgDQHZ6brHHJ0RzpHnE7bt5O7-SS4BbG-SELlaaq32ieqvbXJvTs5-5j08bfC0xoIX35vtY67jyr54xKIjN0UOVKPrTjZnm2Ox3qdBk_lL62NAzybCDBe7wTka3tdkwMuSTeKsHskcD3NNU58rr1Tj4qD8N6_qXa5hBaianENJRpYP3smuGH2yg-9LHFc98HxR7wjEKL2QRBbWz00212WHEsxIIAk9rpLxoL5vCrHX9xdFflCiQo2ILmTAVVAMuC3qiPZk1YVRDyoDkZu9HWoD8XxV8FV65fsOLTg5rhL3XRARr1c1P6YQg2H7bkSZGKxoZTSol4j1xYsPz-6cMax9XgiqZfd3KSMxpCCXdwDRigAmGWby3dAlEqSdLEDpv_HTIFUkIZPQ6lvCSu-N43RNjFGjYfyNa8Ff_EHSzqFq0VMh1kA3cl63kDo_Rr_nUj8urmmI_OHixVK0nt_m_4QuJ0rKpvCpJ4E3WuP8_Fhxm1kDeOLR7dQLWPwwFgXyxG3Dhrt5FNxYzLWYGxypk19dC'
			));
	}else{
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
			$headers
			));
	}
	
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	
	//Execute:
	$result=curl_exec($curl);
	if(!$result){die("Failed.");}
	
	curl_close($curl);
	return $result;
}
?>