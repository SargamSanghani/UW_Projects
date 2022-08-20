<h1>What's your age range?</h1>

<form method="post">
<p><input type="radio" name="age" value="1" /> Under 18  <br />
   <input type="radio" name="age" value="2" /> 18 - 65  <br />
   <input type="radio" name="age" value="3" /> Over 65  <br />
   <input type="submit"></p>
</form>

<?php

if(isset($_POST['age'])) {

    switch($_POST['age']) {
        case 1:
            echo '<p>You are a child</p>';
            break;
        case 2:
            echo '<p>You are an adult</p>';
            break;
        case 3:
            echo '<p>You are a senior</p>';
            break;
        default:
            echo '<p>You are unborn or deceased.</p>';
    }

}

?>

