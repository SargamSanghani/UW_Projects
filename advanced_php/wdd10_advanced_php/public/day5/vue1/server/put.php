<?php

$put = json_decode( file_get_contents('php://input') );

$query = "UPDATE authors
            SET
            name = :name,
            country = :country
            WHERE
            id = :id";

$stmt = $dbh->prepare($query);

$stmt->bindValue(':name', $put->name);
$stmt->bindValue(':country', $put->country);
$stmt->bindValue(':id', $put->id);

$stmt->execute();

$resp = [];
if(!$stmt->rowCount()) {
   $resp['status'] = 'error';
   $resp['message'] = 'There was a problem updating the record'; 
} else {
    $resp['status'] = 'ok';
    $resp['message'] = 'Record successfully updated';
}

echo json_encode($resp);
die;
