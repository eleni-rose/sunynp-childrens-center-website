<?php

// Simple form validation checks
if (empty($_POST["f_name"])) {
    die("First name cannot be empty.");
}

if (empty($_POST["l_name"])) {
    die("Last name cannot be empty.");
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format.");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters long.");
}

if (!preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one lower case letter.");
}
if (!preg_match("/[A-Z]/i", $_POST["password"])) {
    die("Password must contain at least one upper case letter.");
}
if (!preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number.");
}

if ($_POST["password"] !== $_POST["r_password"]) {
    die("Passwords must match.");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

require __DIR__ . "/config.php";

$sql = "INSERT INTO Admin (f_name, l_name, email, password_hash)
        VALUES (?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if (! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssss",
                $_POST["f_name"],
                $_POST["l_name"],
                $_POST["email"],
                $password_hash);

if ($stmt->execute()) {

    header("Location: ../../views/admin/signup-success.html");
    exit;

} else {
    
    // 1062 = error # when a duplicate record attempts to insert into a unique field
    if ($mysqli->errno === 1062) {

        die("Email already taken, please use a unique email address.");

    } else {

        die($mysqli-->error . " ". $mysqli->errno);

    }
}


/* Debugging to see what is posted to array

print_r($_POST);
var_dump($password_hash);

*/
