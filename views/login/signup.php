<?php

?>

<section class="sign-up-form">
    <h2>Sign Up</h2>
    <div class="sign-up-form-form">
        <form action="../../controllers/signupController.php" method="post">
        <input type="text" name="name" placeholder="Full Name..." id="">
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="uid" placeholder="Username...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="password" name="pwdrepeat" placeholder="Reapeat password..." id="">
        <button type="submit" name="submit">Sign Up</button>       
        </form>
    </div>
</section>

<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields </p>";
    }
    else if ($_GET["error"] == "invaliuduid") {
        echo "<p>Choose a proper username</p>";
    }
    else if ($_GET["error"] == "invalidemail") {
        echo "<p>Choose a proper email</p>";
    }
    else if ($_GET["error"] == "pwdsdontmatch") {
        echo "<p>Passwords doesn`t match</p>";
    }
    else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Something went wrong try again!</p>";
    }
    else if ($_GET["error"] == "usernametaken") {
        echo "<p>Username already taken!</p>";
    }
    else if ($_GET["error"] == "none") {
        echo "<p>You have signed up!</p>";
    }

}

?>
