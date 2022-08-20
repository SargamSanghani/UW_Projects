<h1>Return... there can be only one!</h1>
<?php

function saySomething($a)
{
    if($a > 5) {
        return 'A is greater than 5';
    }
    return 'A is less than or equal to 5';
}

print(saySomething(8));

echo '<p>------------------</p>';

print(saySomething(2));