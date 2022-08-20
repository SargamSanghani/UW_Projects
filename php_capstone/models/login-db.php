<?php 

/**
 * get user detail by email address
 *
 * @param string $email
 * @return array
 */
function getUserByEmail(string $email):array {

    global $dbh;
    $query = "SELECT 
            id,
            first_name,
            password
            FROM 
            users 
            WHERE 
            email=:email";

    $stmt = $dbh->prepare($query);

    $stmt->bindValue(':email', $_POST['email']);

    $stmt->execute();

    $result = $stmt->fetch();

    return $result ? $result : [];

}
