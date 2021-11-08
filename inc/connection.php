<?php
require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$dbServername = $_ENV['DB_HOST'];
$dbUsername = $_ENV['DB_USER'];
$dbPassword = $_ENV['DB_PW'];
$dbName = $_ENV['DB_NAME'];


$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
    or die("Connect failed: %s/n" . $conn->error);
