<h1>Variable Status</h1>
<?php

$name = 'Davey';
$friends = [];
$city = '';

echo isset($name) ? '$name is set<br />' : '$name is not set<br />';
echo empty($name) ? '$name is empty<br />' : '$name is not empty<br />';
echo isset($friends) ? '$friends is set<br />' : '$friends is not set<br />';
echo empty($friends) ? '$friends is empty<br />' : '$friends is not empty<br />';
echo isset($city) ? '$city is set<br />' : '$city is not set<br />';
echo empty($city) ? '$city is empty<br />' : '$city is not empty<br />';
echo isset($net_worth) ? '$net_worth is set<br />' : '$net_worth is not set<br />';
echo empty($net_worth) ? '$net_worth is empty<br />' : '$net_worth is not empty<br />';

?>