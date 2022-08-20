<?php

$post = (array) json_decode( file_get_contents('php://input') ) ?? [];

if( empty($post['name']) || empty($post['email']) || empty($post['phone']) ) {
    
    $response = [
        "status" => 400,
        "message" => 'All fields are required'
    ];

} else {

    $query = "INSERT INTO users (name, email, phone)
                VALUES (:name, :email, :phone)";

    $params = array(
        ':name' => $post['name'],
        ':email' => $post['email'],
        ':phone' => $post['phone']
    );

    $stmt = $dbh->prepare($query);



    $stmt->execute($params);

    if($dbh->lastInsertId()) {
        $response = array(
            'status' => 201,
            'message' => 'Created: record was created',
            'id' => $dbh->lastInsertId()
        );
    } else {
        $response = array(
            'status' => 400,
            'message' => 'Bad Request: There was a problem creating the record.'
        );
    }

}

echo json_encode( $response );