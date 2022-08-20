<form method="post">

    <p><label>Name</label>  
       <input type="text" name="name"></p>

    <p><label for="email">Email</label> 
       <input type="email" name="email"></p>

    <p><input type="submit" name="register"></p>
</form>


<?php 

if(isset($_POST['register'])) {
    echo "<h2>Thankyou for registering!</h2>";

    echo "<ul>";
        echo "<li>Name: " . $_POST['name'] . "</li>";
        echo "<li>Name: " . $_POST['email'] . "</li>";
    echo "</ul>";

}

?>
