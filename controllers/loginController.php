<?php

if (isset($_POST["submit"])) {

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once '../models/dbh.inc.php';
    require_once '../models/loginModel.php';

    if(emptyInputLogin( $username, $pwd !== false)) {
        header("location: ../views/login/login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);

}
else {
    header("location: ../views/login/login.php");
    exit();
}
