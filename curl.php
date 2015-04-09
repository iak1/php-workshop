<?php 
	$url = 'http://localhost/laravel/index.php/api/motorcycle';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);
	$data = curl_exec($ch);
	$result = json_decode($data);
	curl_close($ch);

	var_dump($result);
?>
