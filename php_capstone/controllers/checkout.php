<?php

$title = "Checkout";

if (isLoggedIn()) {
    // if user has click on submit button
    if(isset($_POST['paynow']) && 'POST' == $_SERVER['REQUEST_METHOD']) {
    
        // an array of errors
        $errors = [];
    
        // trimming all the inserted values
        foreach($_POST as $key => $value) {
            $_POST[$key] = trim($value);
        }
    
        // list of required fields
        $required = ['credit', 'card_name', 'expiry_date', 'cvv', 'street', 'city', 'postal_code', 'province', 'country'];
    
        // All fields are required
        foreach($required as $post_key) {
    
            if(empty($_POST[$post_key])) {
                $label = ucwords(str_replace('_', ' ', $post_key));
                $errors[$post_key][] = "Required field";
            }
    
            // length check for form fields
            if (($post_key == 'street' || $post_key == 'city') && strlen($_POST[$post_key]) > 255) {
                $errors[$post_key][] = "Maximum length of the field must be 255";
            } else if (($post_key == 'province' || $post_key == 'country') && strlen($_POST[$post_key]) > 50) {
                $errors[$post_key][] = "Maximum length of the field must be 50";
            }
    
        }    
    
        // validating postal code 
        if(!preg_match("/[a-zA-Z]\d[a-zA-Z][\s]\d[a-zA-Z]\d/", $_POST['postal_code'])) {
            $errors['postal_code'][] = 'Postal code must be valid';
        }
    
        // validating credit card number 
        if(!preg_match('/^[0-9]{16}$/', $_POST['credit'])) {
            $errors['credit'][] = 'Credit card number must be valid';
        }
    
        // validating expiry month 
        if(!preg_match("/^(0[1-9]|1[0-2])\/[0-9]{2}$/", $_POST['expiry_date'])) {
            $errors['expiry_date'][] = 'Expiry month must be valid';
        }
    
        // validating CVV
        if(!preg_match("/^[0-9]{3}$/", $_POST['cvv'])) {
            $errors['cvv'][] = 'CVV must be valid';
        }
    
        if (count($errors) == 0) {
    
            // inserting data in orders table
            $address = [
                'street' => $_POST['street'],
                'city' => $_POST['city'],
                'postal_code' => $_POST['postal_code'],
                'province' => $_POST['province'],
                'country' => $_POST['country'],
            ];
            $data['user_id'] = $_SESSION['user_id'];
            $data['gst'] = $total['gst'];
            $data['pst'] = $total['pst'];
            $data['delivery_charges'] = $total['delivery_charges'];
            $data['sub_total'] = $total['sub_total'];
            $data['total'] = $total['total'];
            $data['order_status'] = 'completed';
            $data['cc_number'] = substr($_POST['credit'], 12);
            $data['address'] = json_encode($address);
            $orderId = insertOrder($data);
            $_SESSION['order_id'] = $orderId;
            
            // inserting data in order_products table using order id
            foreach ($cart as $key => $value) {
                $productsData['order_id'] = $orderId;
                $productsData['product_id'] = $value['id'];
                $productsData['quantity'] = $value['quantity'];
                $productsData['price'] = $value['unit_price'];
                $productsData['title'] = $value['title'];
                $productsData['total_price'] = $value['total_price'];
    
                $orderProductId = insertOrderProduct($productsData);
            }
    
            $_SESSION['flash']['success'] = "Order placed successfully!";
            header('Location: ?p=thankyou');
            die;
    
        } else {
            $_SESSION['post'] = $_POST;
            $_SESSION['errors'] = $errors;
            header('Location: ?p=checkout');
            die;
        }
    }
} else {
    $_SESSION['target'] = "?p=checkout";
    header('Location: ?p=login');
    die;
}


view('checkout', compact('title', 'cart' ,'total', 'errors', 'post', 'flash'));