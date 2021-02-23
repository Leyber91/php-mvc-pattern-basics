<?php

// This is the entry point of your application, all your application must be executed in
// the "index.php", in such a way that you must include the controller passed by the URL
// dynamically so that it ends up including the view.


include $_SERVER['DOCUMENT_ROOT']."/LeyberProject/php-mvc-pattern-basics"."/config/constants.php";

// TODO Implement the logic to include the controller passed by the URL dynamically
// In the event that the controller passed by URL does not exist, you must show the error view.

echo 'hello';
echo '<br>';

// echo file_get_contents('http://localhost/LeyberProject/php-mvc-pattern-basics/config/constants.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
    <title>MVC</title>

</head>
<body>




    <?php
    include_once "./config/constants.php";
    include_once "config/db.php";
    
    if (isset($_GET['controller'])) {
        $controller = getControllerPath($_GET['controller']);
        $fileExists = file_exists($controller);
        if ($fileExists) {
            require_once $controller;
        } else {
            $errorMsg = "The page you are trying to access does not exist.";
            require_once VIEWS . "error/error.php";
        }
    } else {
        require_once VIEWS . "main/main.php";
    }
    
    function getControllerPath($controller): string
    {
        return CONTROLLERS . $controller . "Controller.php";
    }
    
    ?>

</body>
</html>