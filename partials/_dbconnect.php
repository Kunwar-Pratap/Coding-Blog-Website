<?php 
    $servername = 'localhost';
    $username = 'root';
    $password = "";
    $database = 'codingblog';

    $conn = mysqli_connect($servername, $username, $password, $database);
    // if (!$conn) {
    //     die("We failed to connect to the database due to this error: " . mysqli_connect_error());
    // }