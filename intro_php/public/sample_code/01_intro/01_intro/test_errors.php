<?php

$display_errors = ini_get('display_errors');
$error_reporting = ini_get('error_reporting');

if($display_errors != '1' || $error_reporting != E_ALL) {
    $message = '<p style="color: #dd0000"><strong>You can\'t handle the truth!</strong></p>';
    $message .= 'You are not displaying errors correctly!<br /><br />';
    $message .= 'Please check your <code>php.ini</code> file and make sure that "display_errors" <br />';
    $message .= 'and "error_reporting" are set to the correct values:<br /><br />';
    $message .= '<pre><code>';
    $message .= 'display_errors = On<br />';
    $message .= 'error_reporting = E_ALL';
    $message .= '</code></pre>';
} else {
    $message = '<p style="color: #006400"><strong>You are reporting errors correctly!</strong></p>';
}

?>

<h1>Testing your Error Settings in PHP</h1>

<p>Download this file and run it on your own system.</p>

<?=$message?>
