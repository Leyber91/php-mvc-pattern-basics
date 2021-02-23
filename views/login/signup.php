<?php

?>

<section class="sign-up-form">
    <h2>Sign Up</h2>
    <div class="sign-up-form-form">
        <form action="../../models/signupModel.php" method="post">
        <input type="text" name="name" placeholder="Full Name..." id="">
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="uid" placeholder="Username...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="password" name="pwdrepeat" placeholder="Reapeat password..." id="">
        <button type="submit" name="submit">Sign Up</button>       
        </form>
    </div>
</section>
