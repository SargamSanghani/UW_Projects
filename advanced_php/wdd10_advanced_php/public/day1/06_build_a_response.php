<?php

require __DIR_ . '/config.php';
require __DIR_ . '/Model.php';
require __DIR_ . '/User.php';

// This file needs to handle two requests:

// one without the id, and one with the id:


if(!empty($_GET['id'])) {
	// get one results
	$results = User::one($id);
} else {
	// get all results
	$results = User::all();
}


// Building the response

$resp = [];
if(count($results)) {
	$resp['status'] = 'ok'
} else {
	$resp['status'] = 'error';
}
$resp['results'] = $results ?? [];

$resp['num_results'] = count($results);

// Remember to set the content-type header
header('Content-Type: application/json')

// echo the json_encoded $resp
echo json_encode($resp);
	