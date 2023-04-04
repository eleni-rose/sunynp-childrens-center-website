<?php

session_start();

if (isset($_SESSION["admin_id"])) {

    $mysqli = require __DIR__ . "/config.php";

    $sql = "SELECT * FROM Admin
            WHERE id = {$_SESSION["admin_id"]}";

    $result = $mysqli->query($sql);

    $admin = $result->fetch_assoc();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="../../css/main.css">
    <title>NPCC Admin Dashboard</title>
</head>

<body class="bg-slate-900">

    <div class="h-screen flex flex-col items-center justify-center">

        <h1 class="text-sky-100 text-5xl my-3">
            Admin Dashboard
        </h1>

        <?php if (isset($_SESSION["admin_id"])): ?>

            <h2 class="text-3xl text-slate-400 my-3">
                Welcome back, <?= $admin["f_name"]?>
            </h2>

            <form method ="post" action="..\server\admin\banner-upload.php">

                <label for="banner-img">Image file</label>
                <input aria-label="Upload a photo" id="banner-img" name="banner-img" type="file" class="text-slate-400 my-5"/>

                <div class="flex flex-col items-center justify-center">
                    <button
                        class="text-sky-400 text-lg py-1.5 my-3 w-full bg-transparent border-2 border-sky-300 rounded-full transition ease-in-out hover:scale-110 hover:bg-sky-400 hover:text-white active:bg-sky-300">
                        Upload
                    </button>
                </div>

            </form>

            <p class="my-3 text-slate-400 text-md">
                <a href="logout.php" class="text-blue-500 hover:underline hover:text-blue-600">
                    Logout
                </a>
            </p>

        <?php else: ?>

            <h2 class="text-3xl text-slate-400 my-3">
                To access the dashboard, you'll need to <a href="login.php" class="text-blue-400 hover:text-blue-500 hover:underline">log in.</a>
            </h2>

        <?php endif; ?>
            
    </div>

</body>

</html>