<h1>Once is Enough</h1>

<p>Use <code>require_once</code> or <code>include_once</code> instead of 
<code>require</code> or <code>include</code> to avoid inadvertently 
loading a file twice and potentially causing a fatal error.</p>

<p>Note, using <code>require_once</code> or <code>include_once</code> 
needs to be done consistently... every time a file is loaded.</p>

<pre>
<?php

// uncomment the following two lines to see the
// problem that re-loading files can cause.
// require(__DIR__ . '/inc/functions.php');
// require(__DIR__ . '/inc/functions.php');


// The following two lines will not throw errors
// The second line will simply not be executed
require_once(__DIR__ . '/inc/functions.php');
require_once(__DIR__ . '/inc/functions.php');


?>
</pre>

<p>You will not see this line if an error occurs.</p>
