<pre>
<?php

$string = 'To be or not to be that is the question';
$array = ['O', 'Romeo', 'Romeo', 'wherefore', 'art', 'thou', 'Romeo'];

echo 'Before...<br />';
print_r($string);
echo '<br />';
print_r($array);

$new_array = explode(' ', $string);
$new_string = implode(' ', $array);

echo 'After...<br />';
print_r($new_string);
echo '<br />';
print_r($new_array);
?>
