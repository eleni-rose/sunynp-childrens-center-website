<?php

require __DIR__ . "/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = $_POST['staff-name'];
    $title = $_POST['job-title'];
    $bio = $_POST['biography'];
    $id = $_POST['sid'];

    $sql = "UPDATE staff
            SET name = '$name', title = '$title', bio = '$bio'
            WHERE id='$id'";

    $stmt = $mysqli->stmt_init();

    if (! $stmt->prepare($sql)) {
        die("SQL error: " . $mysqli->error);
    }

    if ($stmt->execute()) {

        header("Location: staff-list.php");
        exit;
    
    } else {
        die($mysqli-->error . " ". $mysqli->errno);
    }
} else {
    header("Location: staff-list.php");
}