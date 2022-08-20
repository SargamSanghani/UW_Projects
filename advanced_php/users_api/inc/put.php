<?php

$post = (array) json_decode(file_get_contents('php://input')) ?? [];

if(empty($post['name']) || empty($post['email']) || empty($post['phone']) ) {
    
    $response = [
        "status" => 400,
        "message" => "All fields required"
    ];

} else {

    try {

        $query = "UPDATE users
                SET
                name = :name,
                email = :email,
                phone = :phone,
                updated_at = CURRENT_TIMESTAMP
                WHERE
                id = :id";

        $params = array(
            ':name' => $post['name'],
            ':email' => $post['email'],
            ':phone' => $post['phone'],
            ':id' => $post['id']
        );

        $stmt = $dbh->prepare($query);

        $stmt->execute($params);

        if($stmt->rowCount()) {
            $response = array(
                'status' => 200,
                'message' => 'OK: Record was updated'
            );
        } else {
            $response = array(
                'status' => 400,
                'message' => 'Bad Request: There was a problem updating the record'
            );
        }

    } catch(Exception $e) {

        $response = array(
                'status' => 400,
                'message' => $e->getMessage()
            );
    }

}

echo json_encode($response);