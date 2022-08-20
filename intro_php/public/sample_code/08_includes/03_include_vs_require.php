<h1>Include vs Require</h1>


<!-- The following line will cause a fatal error if you
      uncomment it -->
      
<?php  // require __DIR__ . '/inc/file_does_not_exist.php'; ?>

<?php require __DIR__ . '/inc/functions.php'; ?>

<p>If an error occurs, you will not see this line.</p>
