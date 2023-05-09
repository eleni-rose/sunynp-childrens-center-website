<?php

require __DIR__ . "/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $info = $_POST['info'];
    $content = $_POST['content'];
    $id = $_POST['tid'];

    $sql = "UPDATE text
            SET info = '$info', content = '$content'
            WHERE id='$id'";

    $stmt = $mysqli->stmt_init();

    if (! $stmt->prepare($sql)) {
        die("SQL error: " . $mysqli->error);
    }

    if ($stmt->execute()) {

        header("Location: text-list.php");
        exit;
    
    } else {
        die($mysqli-->error . " ". $mysqli->errno);
    }
} else {
    header("Location: text-list.php");
}