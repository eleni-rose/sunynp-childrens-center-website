<?php

require __DIR__ . "/config.php";

$id = $_POST["id"];
$content = $_POST["content"];
$info = $_POST["info"];

$sql = "UPDATE text 
        SET content = '$content', info = '$info'
        WHERE id='$id'";

$stmt = $mysqli->stmt_init();

if (! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

if ($stmt->execute()) {
    header("Location: success-text.html");
    exit;
} else {
    
    die($mysqli-->error . " ". $mysqli->errno);

}