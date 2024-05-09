<?php
$server = "lareb.database.windows.net";
$username = "lareb";
$password = "Hahahahaha55";
$database = "sportclub";

// Create connection
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
