<?php
include_once("./employees.php");


function get(){
    global $mysqli;
    return $mysqli -> query("SELECT * FROM employees") -> fetch_all();
}

function getById($id){
    global $mysqli;
    return $mysqli -> query("SELECT * FROM employees WHERE emp_no = $id") -> fetch_assoc();
}

function getByLastName(){
    global $mysqli;
    return $mysqli -> query("SELECT * FROM employees WHERE last_name LIKE 'A%'") -> fetch_all();
}

echo '<pre>';
echo var_dump(get());
echo var_dump(getById(1));
echo var_dump(getByLastName());

?>