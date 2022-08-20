<h1>Name Collisions</h1>
<?php

// Try commenting out this function to see if the output is different

// function doSomething()
// {
//     return 'I am the first doSomething in my family!';
// }

if(!function_exists('doSomething')) {
    function doSomething() 
    {
        return 'No other doSomethings around here!';
    }
}

echo doSomething();