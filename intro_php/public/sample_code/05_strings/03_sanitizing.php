<?php

$str = "Content copyright © 2021 by <strong>'WDD'</strong> &amp; <strong>PACE</strong>"; 

?>
<h1>Formatting for output</h1>

<p>View Source to see difference</p>

<h2>htmlentities()</h2>
<p>
<?=htmlentities($str, ENT_NOQUOTES); ?><br />
<?=htmlentities($str, ENT_QUOTES)?>
<p>


<h2>htmlspecialchars()</h2>
<p>
<?=htmlspecialchars($str, ENT_NOQUOTES); ?><br />
<?=htmlspecialchars($str, ENT_QUOTES)?>
<p>

