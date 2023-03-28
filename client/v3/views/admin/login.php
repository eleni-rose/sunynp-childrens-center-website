<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . '/config.php';

    $sql = sprintf("SELECT * FROM Admin
            WHERE email = '%s'",
            $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);

    $admin = $result->fetch_assoc();

    if ($admin) {
        if (password_verify($_POST["password"], $admin["password_hash"])) {

            session_start();

            session_regenerate_id();

            $_SESSION["admin_id"] = $admin["id"];

            header("Location: dashboard.php");
            exit;

        }
    }

    $is_invalid = true;
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
    <title>Sign in</title>
</head>

<body class="bg-slate-900">
    <div class="h-screen flex flex-col items-center justify-center">

    <h1 class="text-4xl mb-3 text-sky-100">Sign In</h1>
        <h2 class="text-xl mb-6 text-sky-100">Log in to admin dashboard</h2>

        <!--------------------- Form start  --------------------->

        <form method="post" class="w-full max-w-lg">

            <!--------------------- Email start --------------------->

            <div class="flex flex-wrap -mx-3 mb-4">

                <div class="w-full px-3 transition ease-in-out hover:scale-110">

                    <label class="block uppercase tracking-wide text-red-300 text-xs font-bold mb-2" for="grid-email">
                        Email
                    </label>

                    <input
                        class="appearance-none block w-full bg-slate-800 text-white border border-slate-800 rounded py-3 px-4 mb-3 leading-tight focus:bg-slate-600 focus:outline-none focus:placeholder:opacity-0"
                        id="grid-email"
                        name="email"
                        type="email"
                        value="<?= htmlspecialchars($_POST["email"] ?? "") ?>"
                        placeholder="example@email.com">

                </div>


            </div>

            <!--------------------- Email end --------------------->

            <!--------------------- Password start  --------------------->

            <div class="flex flex-wrap -mx-3 mb-4">

                <div class="w-full px-3 transition ease-in-out hover:scale-110">

                    <label class="block uppercase tracking-wide text-yellow-200 text-xs font-bold mb-2"
                        for="grid-password">
                        Password
                    </label>

                    <input
                        class="appearance-none block w-full bg-slate-800 text-white border border-slate-800 rounded py-3 px-4 leading-tight focus:bg-slate-600 focus:outline-none focus:placeholder:opacity-0"
                        id="grid-password"
                        name="password"
                        type="password"
                        placeholder="***********">

                </div>

            </div>

            <!--------------------- Password end  --------------------->

            <?php if ($is_invalid): ?>
                <p class="my-3 text-red-300 text-xl text-center">Invalid credentials. Please try again.</p>
            <?php endif; ?>

            <!--------------------- Submit button start --------------------->

            <div class="flex flex-col items-center justify-center">
                <button
                    class="text-sky-400 text-lg py-1.5 my-3 w-1/2 bg-transparent border-2 border-sky-300 rounded-full transition ease-in-out hover:scale-110 hover:bg-sky-400 hover:text-white active:bg-sky-300">
                    Log in
                </button>
            </div>

            <!--------------------- Submit button end --------------------->

        </form>

        <!--------------------- Form end  --------------------->

        <p class="my-3 text-slate-400 text-md">Don't have an account? <a href="signup.html" class="text-blue-500 hover:text-blue-600 hover:underline">Create one today.</a></p>

    </div>
</body>
</html>