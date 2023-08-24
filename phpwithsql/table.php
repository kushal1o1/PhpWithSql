<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "gcesdatabase";
// Create a connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// SQL query to insert records
$sql = "INSERT INTO student (name, phone) VALUES

('Ram', '1234567890'),
('Sam', '9876543210')";
// Execute query
if ($conn->query($sql) === TRUE) {
echo "Records inserted successfully";
} else {
echo "Error inserting records: " . $conn->error;
}