<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "netmatters_reflection";


$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
    or die("Connect failed: %s/n" . $conn->error);
