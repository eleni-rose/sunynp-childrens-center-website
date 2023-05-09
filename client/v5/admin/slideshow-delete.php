<?php
$mysqli = require_once('config.php');
$filepath = dirname(__DIR__, 1);

if (isset($_GET['id'])) {

    $ssid = $_GET['id'];
    $sql = "DELETE FROM slideshow WHERE id='$ssid'";

    $stmt = $mysqli->stmt_init();

    if (! $stmt->prepare($sql)) {
        die("SQL error: " . $mysqli->error);
    }

    if ($stmt->execute()) {
        header("Location: slideshow-list.php");
        exit;
    } else {
        die($mysqli-->error . " ". $mysqli->errno);
    }
} else {
    die("No ID set or MySQL error: " . $mysqli-->error . " ". $mysqli->errno);
}

?>