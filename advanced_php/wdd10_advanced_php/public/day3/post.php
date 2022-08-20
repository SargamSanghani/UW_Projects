<?php

// header('Content-Type: text/plain');
// header('Content-Type: text/html')
header('Content-Type: application/json');

echo json_encode($_POST);