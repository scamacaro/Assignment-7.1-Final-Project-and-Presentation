<?php
    $db_username = "root";
    $db_password = "";
    $db_servername = "localhost";
    $db_name = "csc356";
    $db_port = "3306"; // 3307 is default port for the mariadb; 3306 is default port for mysql

    $db_conn = mysqli_connect($db_servername, $db_username, $db_password, $db_name,$db_port);

    // if this statement is true, it means the database connection failed
    if(!$db_conn){
        echo "connection failed.";
    }
?>