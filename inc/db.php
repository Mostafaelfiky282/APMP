<?php 

    $serverName = 'localhost';
    $userName = 'root';
    $password = '';
    $dbname = 'crud_php_mysql';

    //create connection
    $conn = mysqli_connect($serverName, $userName, $password, $dbname);
    if (!$conn) {
        die('Connection Failed : '. mysqli_connect_error());
    }
