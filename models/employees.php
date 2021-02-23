<?php
function OpenCon()
    {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "Spacex91";
    $db = "employees";
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $mysqli -> error);
    
    return  $mysqli;
    }
    
    function CloseCon($mysqli)
    {
    $mysqli -> close();
    }



    $mysqli = OpenCon();
    echo "Connected Successfully";

    
    ?>