<?php

$BASE_PATH = 'http://localhost/LeyberProject/php-mvc-pattern-basics';

//CONTROLLERS
define("CONTROLLERS", $BASE_PATH . '/controllers/');

//VIEWS
define("VIEWS", $BASE_PATH . '/views/');

//MODELS
define("MODELS", $BASE_PATH . '/models/');

//RESOURCES
define("RESOURCES", $BASE_PATH . '/resources/');

echo CONTROLLERS;
echo '<br>';
echo VIEWS;
echo '<br>';
echo MODELS;
echo '<br>';
echo RESOURCES;

?>