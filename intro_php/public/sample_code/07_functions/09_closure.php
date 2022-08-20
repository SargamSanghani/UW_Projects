<h1>Colusures</h1>
<?php

$age = 12;
$name = 'Tommy';

$hello = function () use($age, $name) {
    return "$name is $age years old";
};

$age = 5;
$name = 'Sally';

echo "$name is $age years old";
echo '<br />';
echo $hello();