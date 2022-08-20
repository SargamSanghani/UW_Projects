<?php

$title = "Login";

// restricting re-login of logged in users
if (isLoggedIn()) {
    $_SESSION['flash']['info'] = "You are already logged in!";
    header('Location: ?p=index');
    die;
}

view('login', compact('title', 'flash', 'errors'));