
<?php

$band = ['John', 'Paul', 'George', 'Ringo'];

$num1 = count($band);

$num2 = sizeof($band);

echo "<p>According to count(), there are $num1 band members.</p>";

echo "<p>Accourding to sizeof(), there are $num2 band members.</p>";
echo '<pre>';
print_r($band);

?>
