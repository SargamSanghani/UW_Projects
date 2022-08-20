<form method="post">
    <p><label for="first">First Name</label>
        <input id="first" name="first" /></p>
    <p><label for="last">Last Name</label> 
        <input id="last" name="last" /></p>
    <p><label for="email">Email</label> 
        <input id="email" name="email" /></p>
    <p><input type="submit"></p>
</form>

<pre>
$_POST ... an associative array
<?php print_r($_POST); ?>
</pre>
