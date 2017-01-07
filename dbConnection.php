<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "motogp";


$conn = new mysqli($serverName, $username, $password, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}