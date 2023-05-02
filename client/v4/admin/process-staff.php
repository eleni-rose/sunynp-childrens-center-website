<?php

require __DIR__ . "/config.php";

$id = 0;
$name = $_POST["staff-name"];
$title = $_POST["job-title"];
$bio = $_POST["biography"];

if (isset($_GET['update'])) {
    $id = isset($_POST['id']) ? $_POST['id'] : NULL;
} else {
    echo "No ID set!";
    exit;
}

$sql = "UPDATE staff
        SET name = '$name', title = '$title', bio = '$bio'
        WHERE id='$id'";

$stmt = $mysqli->stmt_init();

if (! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

if ($stmt->execute()) {
    header("Location: update-success.html");
    exit;
} else {
    
    die($mysqli-->error . " ". $mysqli->errno);

}