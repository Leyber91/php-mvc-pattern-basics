<?php


require $_SERVER['DOCUMENT_ROOT'].'/LeyberProject/php-mvc-pattern-basics/models/employeeModel.php';


//OBTAIN THE ACCION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION

//Keep in mind that the function to be executed has to be one of the ones declared in this controller
// TODO Implement the logic


/* ~~~ CONTROLLER FUNCTIONS ~~~ */

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getAllEmployees()
{
    //
    echo var_dump(get());
    require_once VIEWS . "/employee/employeeModel.php";
    
}

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getEmployee($request)
{
    //
}

/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}

switch ($method) {
    case "GET":
        echo var_dump(get());
        echo var_dump(getById(1));
        echo var_dump(getByLastName());
        break;

    // case "DELETE":
    //     deleteEmployee($data, $employeeArray, $employeeJsonPath);
    //     break;

    // case "PATCH":
    //     updateEmployee($data, $employeeArray, $employeeJsonPath);
    //     break;

    // case "POST":
    //     addEmployee($data, $employeeArray, $employeeJsonPath);
    //     break;

    default:
        break;
}

//var_dump(getAllEmployees());
// ?>