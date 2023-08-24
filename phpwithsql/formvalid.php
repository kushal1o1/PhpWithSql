
<?php
// Define the regular expressions for form validation

$nameRegex = '/^[A-Za-z\s]/'; // Only alphabetic characters and spaces are allowed
$emailRegex = '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,})/'; //
// Valid email format
$passwordRegex = '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/'; // At least 8 characters
// with at least one letter and one number
$phoneRegex = '/^\d{10}$/'; // 10 digits phone number format

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$phone = $_POST['phone'];

// Validate form inputs
$errors = array();

if (!preg_match($nameRegex, $name)) {
$errors[] = 'Invalid name format. Only alphabetic characters and spaces are
allowed.';
}

if (!preg_match($emailRegex, $email)) {
$errors[] = 'Invalid email format.';
}

if (!preg_match($passwordRegex, $password)) {
$errors[] = 'Invalid password format. It should contain at least 8 characters with at
least one letter and one number.';
}

if ($password !== $repassword) {
$errors[] = 'Passwords do not match.';
}

if (!preg_match($phoneRegex, $phone)) {
$errors[] = 'Invalid phone number format. It should be a 10-digit number.';
}

// Display validation errors or process form submission
if (count($errors) > 0) {
// Display validation errors
foreach ($errors as $error) {
echo $error . '<br>';
}
} else {
// Process form submission
echo 'Form submitted successfully!';
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Form Validation</title>
</head>
<body>
<form action="" method="post" >
<label for="name">Name:</label>
<input type="text" name="name" id="name" required><br>

<label for="email">Email:</label>
<input type="email" name="email" id="email" required><br>

<label for="password">Password:</label>
<input type="password" name="password" id="password" required><br>

<label for="repassword">Re-enter Password:</label>
<input type="password" name="repassword" id="repassword" required><br>

<label for="phone">Phone:</label>
<input type="text" name="phone" id="phone" required><br>

<input type="submit" value="Submit">
</form>
</body>
</html>