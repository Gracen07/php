<?php
    $username ="root";
    $password = "";
    $server_name = "localhost";
    $db_name = "db_school";

    $conn = new mysqli($server_name , $username, $password, $db_name);

    if($conn->connect_error){
        die("connection failed".$conn->connect_error);
    }
    else
    echo "Connection successful";
?>