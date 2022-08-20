
<pre>
<?php

$cities = ['winnipeg', 'brandon', 'portage la prairie'];

$capitalized = array_map(function($el) {
    return ucwords($el);
}, $cities);


print_r($cities);
echo '<br />';
print_r($capitalized);

?>
