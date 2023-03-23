<?php
// Basic connection settings
$databaseHost = "localhost:3307";
$databaseUsername = "laura";
$databasePassword = "laura";
$databaseName = "form";

// Connect to the database
$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if ($conn->connect_error) {
    /* Use your preferred error logging method here */
    error_log('Connection error: ' . $conn->connect_error);
}
else {
    echo("Connected");
}
?>