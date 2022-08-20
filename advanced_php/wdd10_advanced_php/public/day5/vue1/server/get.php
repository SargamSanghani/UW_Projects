<?php

$query = "SELECT * FROM authors";

$stmt = $dbh->query($query);

$results = $stmt->fetchAll();

$resp = [];
$resp['status'] = 'ok';
$resp['results'] = $results;


echo json_encode($resp);