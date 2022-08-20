<?php
$user1 = [
'name' => 'Davey Jones',
'email' => 'davey@hotmail.com',
'city' => 'London'
];

$user2 = [
'name' => 'Clarice Starling',
'email' => 'clarice@fbi.gov',
'city' => 'Los Angeles'
];

$users = [$user1, $user2];

foreach($users as $user) {
    foreach($user as $key => $value ) {
        echo "<strong>$key</strong>: $value <br />";
    }
    echo '-----------<br />';
}
?>

