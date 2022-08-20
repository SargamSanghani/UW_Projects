<h1>The Captains</h1>
<?php

$captains = [
    "kirk.jpg",
    "picard.jpg",
    "janeway.jpg",
    "archer.jpg"
];

shuffle($captains);

?>

<h3>Who's the best captain?</h3>

<img width="200" height="auto" 
    src="images/<?php echo array_pop($captains) ?>" />

<p><a href="23_the_captains.php"><button>Try Again</button></a></p>
