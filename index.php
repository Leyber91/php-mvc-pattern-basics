<?php

// This is the entry point of your application, all your application must be executed in
// the "index.php", in such a way that you must include the controller passed by the URL
// dynamically so that it ends up including the view.


include_once "../config/constants.php";

// TODO Implement the logic to include the controller passed by the URL dynamically
// In the event that the controller passed by URL does not exist, you must show the error view.

echo 'hello';
echo '<br>';

echo file_get_contents('http://localhost/LeyberProject/php-mvc-pattern-basics/config/constants.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>MVC</title>

</head>
<body>




    <?php

        echo "
        <header>
            <img src='../'>
            <nav class = 'nav'>
                <button class = 'dashboardBtn'><a href='http://localhost/LeyberProject/php-mvc-pattern-basics/views/employee/employee.php'>EMPLOYEES</a></button>
                <button class = 'logInBtn'><a href='http://localhost/LeyberProject/php-mvc-pattern-basics/views/employee/login.php'>LOGIN</a></button>
                <button class = 'SignUpBtn'><a href='http://localhost/LeyberProject/php-mvc-pattern-basics/views/login/signup.php'>SIGNUP</a></button>
                </nav>
        </header>";

    function console_log( $data ){
    echo '<script>';
    
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
    }

    console_log('hiiii');
    
    ?>

</body>
</html>