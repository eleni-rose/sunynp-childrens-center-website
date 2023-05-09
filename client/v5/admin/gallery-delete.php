<?php
$mysqli = require_once('config.php');
$filepath = dirname(__DIR__, 1);

if (isset($_GET['id'])) {

    $gid = $_GET['id'];
    $sql = "DELETE FROM gallery WHERE id='$gid'";

    $stmt = $mysqli->stmt_init();

    if (! $stmt->prepare($sql)) {
        die("SQL error: " . $mysqli->error);
    }

    if ($stmt->execute()) {
        header("Location: gallery-list.php");
        exit;
    } else {
        die($mysqli-->error . " ". $mysqli->errno);
    }
} else {
    die("No ID set or MySQL error: " . $mysqli-->error . " ". $mysqli->errno);
}

?>