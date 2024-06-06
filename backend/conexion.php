<?php

$servername = "localhost"; // Replace with your server name or IP
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "crud"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
