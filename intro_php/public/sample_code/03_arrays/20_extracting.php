
<?php

$user = [
    'first' => 'Davey',
    'last' => 'Jones',
    'email' => 'davey@hotmail.com'
];

extract($user);

echo 'First Name: ' .  $first . '<br />'; 
echo 'Last Name: ' .  $last . '<br />'; 
echo 'Email: ' .  $email; 
?>
