<?php
$db_server_name = "localhost";
$db_username = "aslukili";
$db_password = "aslukili";
$db_name = "e_class_db";

$conn = mysqli_connect($db_server_name, $db_username, $db_password, $db_name);

if (!$conn){
    die("not connected!" . mysqli_connect_error());
}

//checking connection to the database:
//try {
//    $conn;
//    echo "connected!";
//}
//catch (Exception $e){
//    echo "connection failed!" . $e->getMessage();
//}