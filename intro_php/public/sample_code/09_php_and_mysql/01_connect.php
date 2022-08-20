<?php

define('DB_DSN', 'mysql:host=localhost;dbname=borland');
define('DB_USER', 'web_user');
define('DB_PASS', 'mypass');

$dbh = new PDO(DB_DSN, DB_USER, DB_PASS);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

var_dump($dbh);