<?php

    require __DIR__ . "/config.php";

    $sql = "INSERT INTO staff (name, title, bio)
            VALUES (?, ?, ?)";

    $stmt = $mysqli->stmt_init();

    if (! $stmt->prepare($sql)) {
        die("SQL error: " . $mysqli->error);
    }

    $stmt->bind_param("sss",
                    $_POST["staff-name"],
                    $_POST["job-title"],
                    $_POST["biography"]);

    if ($stmt->execute()) {

        header("Location: staff-list.php");
        exit;

    } else {

        die($mysqli-->error . " ". $mysqli->errno);

    }
?>