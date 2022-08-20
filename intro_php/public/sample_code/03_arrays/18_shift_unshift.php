
<pre>
<?php

$new = [];
$old = ['Tom', 'Dick', 'Harry'];

print_r($old);
print_r($new);

while($current = array_shift($old)) {
    array_unshift($new, $current);
}

print_r($old);
print_r($new);

?>
