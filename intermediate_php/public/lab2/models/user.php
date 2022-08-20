<?php 

function insertUser(PDO $dbh = null):int {
    $query = "INSERT INTO users
        (
            first_name, 
            last_name, 
            street, 
            city, 
            postal_code,
            province,
            country,
            phone,
            email,
            password,
            is_subscribed
        )
        VALUES
        (
            :first_name,
            :last_name,
            :street,
            :city,
            :postal_code,
            :province,
            :country,
            :phone,
            :email,
            :password,
            :is_subscribed
        )";

    $stmt = $dbh->prepare($query);

    $stmt->bindValue(':first_name', $_POST['first_name']);
    $stmt->bindValue(':last_name', $_POST['last_name']);
    $stmt->bindValue(':street', $_POST['street']);
    $stmt->bindValue(':city', $_POST['city']);
    $stmt->bindValue(':postal_code', $_POST['postal_code']);
    $stmt->bindValue(':province', $_POST['province']);
    $stmt->bindValue(':country', $_POST['country']);
    $stmt->bindValue(':phone', $_POST['phone']);
    $stmt->bindValue(':email', $_POST['email']);
    $stmt->bindValue(':password', $_POST['password']);
    $stmt->bindValue(':is_subscribed', (isset($_POST['is_subscribed'])) ? 1 : 0);

    $stmt->execute();

    $id = $dbh->lastInsertId();
    return $id ?? null;
}

function getUser():array {

    global $dbh;
    $query = "SELECT
        *
        FROM
        users
        WHERE
        id=?";

    $stmt = $dbh->prepare($query);

    $stmt->bindValue(1, $_GET['id'], PDO::PARAM_INT);

    $stmt->execute();

    $result = $stmt->fetch();

    return $result ?? [];
}
