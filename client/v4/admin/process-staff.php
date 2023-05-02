<?php

require __DIR__ . "/config.php";

$id = $_POST["user-id"];
$name = $_POST["staff-name"];
$title = $_POST["job-title"];
$bio = $_POST["biography"];

$sql = "UPDATE staff
        SET name = '$name', title = '$title', bio = '$bio'
        WHERE id='$id'";

$stmt = $mysqli->stmt_init();

if (! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

if ($stmt->execute()) {
    header("Location: staff-update-success.html");
    exit;
} else {
    
    die($mysqli-->error . " ". $mysqli->errno);

}