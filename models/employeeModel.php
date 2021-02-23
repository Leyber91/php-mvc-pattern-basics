<?php

include $_SERVER['DOCUMENT_ROOT'].'/LeyberProject/php-mvc-pattern-basics/models/employees.php';


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

function create($employee)
{
    $query = conn()->prepare("INSERT INTO employees (emp_no, birth_date, first_name, last_name, gender, hire_date)
    VALUES
    (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");

    $query->bindParam(1, $employee["emp_no"]);
    $query->bindParam(2, $employee["birth_date"]);
    $query->bindParam(3, $employee["first_name"]);
    $query->bindParam(4, $employee["last_name"]);
    $query->bindParam(5, $employee["gender"]);
    $query->bindParam(6, $employee["hire_date"]);

    try {
        $query->execute();
        return [true];
    } catch (PDOException $e) {
        return [false, $e];
    }
}

function update($employee)
{
    $query = conn()->prepare("UPDATE employees
    SET emp_no = ?, birth_date = ?, first_name = ?, last_name = ?, gender = ?, hire_date = ?
    WHERE id = ?;");

    $query->bindParam(1, $employee["emp_no"]);
    $query->bindParam(2, $employee["birth_date"]);
    $query->bindParam(3, $employee["first_name"]);
    $query->bindParam(4, $employee["last_name"]);
    $query->bindParam(5, $employee["gender"]);
    $query->bindParam(6, $employee["hire_date"]);
    try {
        $query->execute();
        return [true];
    } catch (PDOException $e) {
        return [false, $e];
    }
}

function delete($id)
{
    $query = conn()->prepare("DELETE FROM employees WHERE emp_no = ?");
    $query->bindParam(1, $id);

    try {
        $query->execute();
        return [true];
    } catch (PDOException $e) {
        return [false, $e];
    }
}


?>