<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $password = $_POST["password"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Basic validation (you should implement more thorough validation and sanitation)
    if (empty($name) || empty($password) || empty($age) || empty($email) || empty($phone)) {
        echo "All fields are required.";
    } else {
        // Perform database operations (e.g., insert data into the database)
        // You should use prepared statements and ensure data security here
        echo "Registration successful!";
    }
}
?>
