<?php

// mysql_connect()   // legacy code (run!)
// mysqli_connect()  // procedural/oo
// PDO  // PHP Data Objects

define('DB_DSN', 'mysql:host=localhost;dbname=borland');
define('DB_USER', 'root');
define('DB_PASS', '');

// connect using PDO object

// create connection to MySQL using POD
$dbh = new PDO(DB_DSN, DB_USER, DB_PASS);
// Tell PDO that we want to see exceptions
$dbh->setAttribute(PDO::ATTR_ERRMODE, 
                    PDO::ERRMODE_EXCEPTION);
// Tell PDO to return results as associative arrays
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, 
                    PDO::FETCH_ASSOC);

var_dump($dbh);
