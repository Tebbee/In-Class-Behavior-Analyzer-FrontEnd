<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbName = "icda";

$conn = new mysqli($servername, $username, $password, $dbName);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
