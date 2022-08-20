<?php

$user1 = [
'first' => 'Tom',
'last' => 'Jones',
'email' => 'tom@hotmail.com'
];

$user2 = [
'last' => 'Jones',
'email' => 'tom@hotmail.com',
'first' => 'Tom'
];

echo $user1 == $user2 ? '$user1 == $user2<br />' : 
                        '$user1 != $user2<br />';
echo $user1 === $user2 ? '$user1 is identical to $user2<br />' : 
                         '$user1 is not identical to $user2<br />';

echo '<pre>';
print_r($user1);
print_r($user2);


