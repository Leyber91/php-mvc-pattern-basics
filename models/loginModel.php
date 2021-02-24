<?php
require('../models/signupModel.php');

function emptyInputLogin($username, $pwd) {
    $result;

    if(empty($username) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
// function uidExists($conn, $username, $email) {
//     $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
//     $stmt = mysqli_stmt_init($conn);
//     if(!mysqli_stmt_prepare($stmt, $sql)) {
//         header("location: ../views/login/signup.php?error=stmtfailed");
//         exit();
//     }
// }

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false) {
        header("location: ../views/login/login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../views/login/login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESION["userid"] = $uidExists["usersId"];
        $_SESION["useruid"] = $uidExists["usersUid"];
        header("location: ../index.php");
        exit();
    }
}