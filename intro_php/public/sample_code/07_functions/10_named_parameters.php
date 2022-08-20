<h1>Named Parameters</h1>
<?php

function do_something(string $param1 = null, int $param2 = null, 
    array $param3 = null, string $param4 = null)
{
    $params = [];
    $params['param1'] = $param1;
    $params['param2'] = $param2;
    $params['param3'] = $param3;
    $params['param4'] = $param4;
    return $params;
}


// If you only have a value for $param4 
// 
// Before PHP 8
// We have to supply all the values for the
// optional parameters before the one we
// want to supply
//

$str = 'Hello, World!';

$out = do_something(null, null, null, $str);

echo '<pre>';
var_dump($out);


// Since PHP 8
// We can name the input parameters...
// We can even supply them out of order, as long as they're
// labeled correctly

$out = do_something(param4: $str);

var_dump($out);

