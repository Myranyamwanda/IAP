<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "API_D";

try {
    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check if connection was successful
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    echo "Connected successfully to the database.";
} catch (Exception $e) {
    // Handle connection errors
    echo $e->getMessage();
}
?>