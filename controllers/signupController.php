<?php

    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['uid'];
        $pwd = $_POST['pwd'];
        $pwdRepeat = $_POST['pwdrepeat'];

        require_once '../models/dbh.inc.php';
        require_once '../models/signupModel.php';

        if(emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
            header("location: ../signup.php?error=emptyinput");
            exit();
        }

        if(invalidUid($username) !== false) {
            header("location: ../signup.php?error=invaliduid");
            exit();
        }

        if(invalidEmail($email) !== false) {
            header("location: ../signup.php?erro=invalidemail");
            exit();
        }

        if(pwdMatch($pwd, $pwdRepeat) !== false) {
            header("location: ../signup.php?erro=pwdsdontmatch");
            exit();
        }

        if(uidExists($conn, $username, $email) !== false) {
            header("location: ../signup.php?erro=usernametaken");
            exit();
        }

        createUser($conn, $name, $email, $username, $password);

    } else {
        header("location: ../views/login/signup.php");
        exit();
    }