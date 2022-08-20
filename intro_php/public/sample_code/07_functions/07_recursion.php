<h1>Recursive Functions</h1>
<?php

function upperArray($array)
{
    foreach($array as $key => $value) {
        if(is_array($value)) {
             $array[$key] = upperArray($value);
        } else {
             $array[$key] = strtoupper($value);
        }
       
    }
    return $array;
}


$user = [
    'name' => 'Steve',
    'email' => 'edu@pagerange.com',
    'city' => 'winnipeg',
    'hobbies' => ['readin', 'ritin', 'rithmatic'],
    'status' => 'active'
];

echo '<pre>';
print_r($user);
echo '<br />--------------------<br />';
$new = upperArray($user);
print_r($new);