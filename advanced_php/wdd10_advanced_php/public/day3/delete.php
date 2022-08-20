<?php

if('DELETE' == $_SERVER['REQUEST_METHOD']) {
    header('Content-Type: application/json');
    // echo json_encode($_SERVER);
    echo file_get_contents('php://input');
}