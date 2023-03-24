<?php

// Simple form validation checks
if (empty($_POST["f-name"])) {
    die("Invalid first name. Field must not be empty.");
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format.");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters.");
}

if (! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain one lower case letter.");
}
if (! preg_match("/[A-Z]/i", $_POST["password"])) {
    die("Password must contain one upper case letter.");
}
if (! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain a number.");
}

if ($_POST["password"] !== $_POST["repeat-password"]) {
    die("Passwords must match.");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

require __DIR__ . "/config.php";

$sql = "INSERT INTO Admin (first_name, last_name, email, password_hash)
        VALUES (?, ?, ?)";

$stmt = $mysqli->stmt_init();

if (! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssss",
                $_POST["first_name"],
                $_POST["last_name"],
                $_POST["email"],
                $password_hash);

$stmt->execute();
echo "Signup successful!";


print_r($_POST);
var_dump($password_hash);
