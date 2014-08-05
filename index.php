<?php

require('cart.php');

$Cart = new Cart();

$amount = rand(1,50);

echo $Cart->checkout($amount);


	

// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_URL => 'http://pm4.appdynamics.com',
	CURLOPT_USERAGENT => 'Sample cURL Request'
));

// Send the request & save response to $resp
$resp = curl_exec($curl);

// Close request to clear up some resources
curl_close($curl);

?>