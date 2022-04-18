<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testproject";
    $conn = mysqli_connect($host,$username,$password,$dbname);
    mysqli_set_charset($conn, "utf8");
?>