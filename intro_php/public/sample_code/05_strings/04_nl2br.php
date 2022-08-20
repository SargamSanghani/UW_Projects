<?php

$str = "Just wanted to send a message to say hi!

How are you?  Have you being doing well?

I thought we might come up for a visit on the weekend.  Are you up for that?

All the best, Dave";

?>
<h1>Formatting Text</h1>

<h2>Plain...</h2>

<p><?=$str?></p>

<h2>nl2br...</h2>

<p><?=nl2br($str)?></p>

