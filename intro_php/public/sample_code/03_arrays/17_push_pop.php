<pre>
<?php

$new = [];
$old = ['Tom', 'Dick','Harry'];

print_r($old);
print_r($new);

while($current = array_pop($old)) {
    array_push($new, $current);
}

print_r($old);
print_r($new);

?>
