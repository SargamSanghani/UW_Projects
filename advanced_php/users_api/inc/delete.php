<?php

$delete = json_decode( file_get_contents('php://input') ) ?? [];

if(empty($delete->id)) {
    
    $response = [
        "status" => 400,
        "message" => "Bad Request: id is a required field"
    ];

} else {

    $query = "DELETE FROM users WHERE id = :id";
    $stmt = $dbh->prepare($query);
    $stmt->bindValue(':id', $delete->id, PDO::PARAM_STR);
    $stmt->execute();

    if($stmt->rowCount()) {
        $response = array(
            'status' => 200,
            'message' => 'OK: record was deleted'
        );
    } else {
        $response = array(
            'status' => 400,
            'message' => 'Bad Request: unable to create record'
        );
    }

}

echo json_encode($response);