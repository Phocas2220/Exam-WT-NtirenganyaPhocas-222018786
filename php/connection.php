<?php
// Database connection parameters
$dbhost = "localhost"; // You may need to change this depending on your database server
$dbuser = "root"; // Your database username
$dbpass = ""; // Your database password
$dbname = "project"; // Your database name

// Establishing connection to the database
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Checking if the connection was successful
if (!$con) {
    // If connection fails, exit the script and display the error message
    exit("Failed to connect: " . mysqli_connect_error());
}
?>
