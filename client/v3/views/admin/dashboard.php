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


            <form method ="post" action="..\server\admin\upload-photo.php">

                <input aria-label="Upload a photo" type="file" class="text-slate-400 my-5"/>

                <button
                    class="text-sky-300 text-2xl p-2 m-2 w-full item-center bg-transparent border-2 border-sky-300 rounded-full transition ease-in-out hover:scale-110 hover:bg-sky-300 hover:text-white active:bg-sky-200">
                    Submit</button>
            </form>

            <p class="text-blue-400"><a href="logout.php">Log out</a></p>

        <?php else: ?>

            <h2 class="text-3xl text-slate-400 my-3">
                To access the dashboard, you'll need to <a href="login.php" class="text-blue-400 hover:text-blue-500 hover:underline">log in.</a>
            </h2>

        <?php endif; ?>

            
    </div>

</body>

</html>