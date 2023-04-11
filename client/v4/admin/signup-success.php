<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
    <title>Registration Successful!</title>
</head>

<body class="bg-slate-900">

<?php include('../header.php'); ?>

    <div class="h-screen flex flex-col items-center justify-center">
        <h1 class="my-3 text-5xl text-sky-100">Your account has been created!</h1>

        <h2 class="my-3 text-3xl text-sky-100">You can now 
            <a href="login.php" class="text-blue-500 hover:underline hover:text-blue-600">log in</a>
            or, alternatively, <a href="../index.php" class="text-blue-500 hover:underline hover:text-blue-600">head back home.</a>
        </h2>
        
    </div>

<?php include('../footer.php'); ?>

</body>
</html>