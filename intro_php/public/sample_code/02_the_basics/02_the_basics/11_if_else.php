<h1>Guess the number between 1 and 100</h1>

<form method="post">
<p><label for="guess">Guess</label>:<br />
<input type="text" name="guess" size="5" />
<input type="submit"></p>
</form>

<?php

$num = 67; // guess this number

if(isset($_POST["guess"])) {

    $guess = intval($_POST['guess']);

    if($guess < $num) {
        echo "<p>" . $guess  . " is too low...</p>";
    } elseif($guess > $num) {
        echo "<p>" . $guess . " is too high...</p>";
    } else {
        echo "<p>" . $guess . " is correct!</p>";
    }

} // endif

?>

