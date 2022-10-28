<?php

$host = "localhost";
$dbname = "php_project";
$username = "root";
$password = "";

$mysqli = new mysqli(
    hostname: $host,
    username: $username,
    password: $password,
    database: $dbname
);

// if ($mysqli->connect_error) {
//     die("connection error: " . $mysqli->connect_error);
// }

// if($mysqli){
//     echo "connected to database";
// } else{
//     die(mysqli_error($mysqli));
// }

if(! $mysqli){
    die(mysqli_error($mysqli));
}

return $mysqli;
