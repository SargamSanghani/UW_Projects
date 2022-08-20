<?php

$user['first'] = 'Dave';
$user['last'] = 'Jones';
$user['email'] = 'djones@example.com';

foreach($user as $key => $value) {
    echo "<strong>$key</strong>: $value <br />";
}
    
?>