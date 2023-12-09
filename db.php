<?php

$host = "localhost";
$dbname = "project3";
$username = "root";
$password = "";



$mysqli = new mysqli(
    hostname: $host,
    username: $username,
    password: $password,
    database: $dbname
);



if($mysqli->connect_errno){

    die("Connect Error" . $mysqli->connect_error);

}

return $mysqli;
?>