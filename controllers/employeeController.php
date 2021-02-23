<?php


require_once MODELS . "employeeModel.php";

$action = "";

if (isset($_REQUEST["action"])) {
    $action = $_REQUEST["action"];
}

if (function_exists($action)) {
    call_user_func($action, $_REQUEST);
} else {
    error("Invalid user action");
}


/* ~~~ CONTROLLER FUNCTIONS ~~~ */

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getAllEmployees()
{
    $employees = get();
    if (isset($employees)) {
        require_once VIEWS . "/employee/employeeDashboard.php";
    }
}

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getEmployee($request)
{
    $action = $request["action"];
    $employee = null;
    if (isset($request["id"])) {
        $employee = getById($request["id"]);
    }
    require_once VIEWS . "/employee/employee.php";
}

function updateEmployee($request)
{
    $action = $request["action"];
    if (sizeof($_POST) > 0) {
        $employee = update($_POST);

        if ($employee[0]) {
            header("Location: index.php?controller=employee&action=getAllEmployees");
        } else {
            $employee = $_POST;
            $error = "The data entered is incorrect, check that there is no other employee with that email.";
            require_once VIEWS . "/employee/employee.php";
        }
    } else {
        require_once VIEWS . "/employee/employee.php";
    }
}

function deleteEmployee($request)
{
    $action = $request["action"];
    $employee = null;
    if (isset($request["id"])) {
        $employee = delete($request["id"]);
        header("Location: index.php?controller=employee&action=getAllEmployees");
    }
}

function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}

?>







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