<?php

$post =  json_decode( file_get_contents('php://input') );

$query = "INSERT INTO authors 
                (name, country)
                VALUES
                (:name, :country)";

$stmt = $dbh->prepare($query);

$stmt->bindValue(':name', $post->name);
$stmt->bindValue(':country', $post->country);

$stmt->execute();

$resp = [];
if(!$dbh->lastInsertId()) {
    $resp['status'] = 'error';
    $resp['message'] = 'Could not create record';
} else {
    $resp['status'] = 'ok';
    $resp['message'] = 'Record was successfully created';
    $resp['author_id'] = $dbh->lastInsertId();
}


echo json_encode($resp);
die;