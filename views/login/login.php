<?php

?>

<section class="signup-form">
<h2>Log In</h2>
<div class="sign-up-form-form">
    <form action="../controllers/loginController.php">
    <input type="text" name="name" placeholder="Username/Email...">
    <input type="password" name="pwd" placeholder="Password...">
    <button type="submit" name="submit">Log In</button>
    </form>
</div>
</section>

<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields </p>";
    }
    else if ($_GET["error"] == "wronglogin") {
        echo "<p>Incorrect login information!</p>";
    }

}

?>