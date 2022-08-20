<?php

  if(isset($_POST['add_employee'])) {
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
  }

?>
<h1>Insert Form</h1>

<form method="post">

<p><label for="first_name">First Name</label><br />
<input type="text" name="first_name" size="40"></p>

<p><label for="last_name">Last Name</label><br />
 <input type="text" name="last_name" size="40"></p>

<p><label for="email">Email Address</label><br />
<input type="text" name="email" size="40"></p>

<p><label for="phone">Phone Number</label><br />
<input type="text" name="phone" size="40"></p>

<p><label for="department">Department</label><br />
<input type="text" name="department" size="40">

<p><input type="submit" name="add_employee"></p>

</form>



  

