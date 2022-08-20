<?php 

/**
 * A function to get all categories from db
 *
 * @return array
 */
function getAllCategories():array {

    global $dbh;
    $query = "SELECT 
            *
            FROM 
            categories
            WHERE deleted = 0";

    $stmt = $dbh->prepare($query);

    $stmt->execute();

    $results = $stmt->fetchAll();

    return $results ? $results : [];

}

/**
 * A function to get products
 *
 * @return array
 */
function getProducts($category_id):array {
 
    global $dbh;
    $query = "SELECT 
            *
            FROM 
            products
            WHERE deleted = 0";

    if ($category_id != 0) {
        $query .= ' AND category_id = :category';
        $stmt = $dbh->prepare($query);
        $stmt->bindValue(':category', $category_id);
    } else {
        $stmt = $dbh->prepare($query);
    }

    $stmt->execute();

    $results = $stmt->fetchAll();

    return $results ? $results : [];

}

/**
 * A function to search products from search bar
 *
 * @param [type] $keyword
 * @return void
 */
function searchProducts($keyword) {

    global $dbh;

    $query = "SELECT
                *
                FROM 
                products
                WHERE
                deleted = 0 
                AND
                (title LIKE :search 
                OR
                description LIKE :search)";

    $stmt = $dbh->prepare($query);

    $stmt->bindValue(':search', "%$keyword%", PDO::PARAM_STR);
    
    $stmt->execute();
    
    $results = $stmt->fetchAll();

    return $results ? $results : [];
}

/**
 * a function to get product detail from product id
 *
 * @param [type] $id
 * @return void
 */
function getProductById($id) {

    global $dbh;
    $query = "SELECT 
            *
            FROM 
            products 
            WHERE 
            id=:id";

    $stmt = $dbh->prepare($query);

    $stmt->bindValue(':id', $id);

    $stmt->execute();

    $result = $stmt->fetch();

    return $result ? $result : [];

}

/**
 * Inserting order detail in orders table
 *
 * @param [type] $data
 * @return void
 */
function insertOrder($data) {

    global $dbh;

    $query = "INSERT INTO
        orders
        (user_id,
        gst,
        pst,
        delivery_charges,
        sub_total,
        total,
        cc_number,
        order_status,
        address)
        VALUES
        (:user_id,
        :gst,
        :pst,
        :delivery_charges,
        :sub_total,
        :total,
        :cc_number,
        :order_status,
        :address)";
    
    $stmt = $dbh->prepare($query);

    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':gst', $data['gst']);
    $stmt->bindValue(':pst', $data['pst']);
    $stmt->bindValue(':delivery_charges', $data['delivery_charges']);
    $stmt->bindValue(':sub_total', $data['sub_total']);
    $stmt->bindValue(':cc_number', $data['cc_number']);
    $stmt->bindValue(':total', $data['total']);
    $stmt->bindValue(':order_status', $data['order_status']);
    $stmt->bindValue(':address', $data['address']);

    $stmt->execute();

    $id = $dbh->lastInsertId();
    return $id ?? null;

}

/**
 * a function to insert data in order_product table
 *
 * @param [type] $data
 * @return void
 */
function insertOrderProduct($data) {

    global $dbh;
 
    $query = "INSERT INTO
        order_product
        (order_id,
        product_id,
        quantity,
        price,
        title,
        total_price)
        VALUES
        (:order_id,
        :product_id,
        :quantity,
        :price,
        :title,
        :total_price)";
    
    $stmt = $dbh->prepare($query);

    $stmt->bindValue(':order_id', $data['order_id']);
    $stmt->bindValue(':product_id', $data['product_id']);
    $stmt->bindValue(':quantity', $data['quantity']);
    $stmt->bindValue(':price', $data['price']);
    $stmt->bindValue(':title', $data['title']);
    $stmt->bindValue(':total_price', $data['total_price']);

    $stmt->execute();

    $id = $dbh->lastInsertId();
    return $id ?? null;

}

/**
 * A function to get user by ID
 *
 * @param [type] $id
 * @return void
 */
function getUserById($id) {

    global $dbh;
    $query = "SELECT 
            first_name,
            last_name,
            email
            FROM 
            users 
            WHERE 
            id=:id";

    $stmt = $dbh->prepare($query);

    $stmt->bindValue(':id', $id);

    $stmt->execute();

    $result = $stmt->fetch();

    return $result ? $result : [];

}

/**
 * A function for getting 
 *
 * @param [type] $orderId
 * @return void
 */
function fetchLineProducts($orderId) {

    global $dbh;

    $query = "SELECT 
            line.title,  
            line.price, 
            line.quantity,
            sub_total, 
            gst, 
            pst, 
            total,
            line.created_at,
            cc_number,
            delivery_charges,
            line.total_price,
            address
            FROM 
            order_product as line 
            JOIN orders 
            on line.order_id= orders.id 
            WHERE order_id=:order_id ";

    $stmt = $dbh->prepare($query);

    $stmt->bindValue(':order_id', $orderId);

    $stmt->execute(); 

    $results = $stmt->fetchAll();

    return $results ?? [];
}

/**
 * A function to get orders list from orders table
 *
 * @param [type] $orderId
 * @return void
 */
function fetchOrders($orderId) {

    global $dbh;

    $query = "SELECT 
            * from 
            orders
            WHERE id=:order_id";

    $stmt = $dbh->prepare($query);

    $stmt->bindValue(':order_id', $orderId);

    $stmt->execute(); 

    $result = $stmt->fetch();

    return $result ?? [];
}