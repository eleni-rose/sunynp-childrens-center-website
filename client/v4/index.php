<?php

$mysqli = require_once('config.php');

$sql = 'SELECT content FROM text';

$result = $mysqli->query($sql);

$text = $result->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUNY New Paltz Children's Center</title>
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <?php include('header.php'); ?>

    <!--------------------- Banner carousel start  --------------------->

    <section id="banner-carousel">
        <div class="w-full bg-cover bg-center" style="height:38rem; background-image: url('img/banner4.jpg');">
            <div
                class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50 hover:bg-opacity-90 transition duration-700">

                <!--------------------- Banner text and items start  --------------------->
                <div class="text-center">

                    <h1 class="text-white text-5xl font-bold uppercase">
                        <?= $text["content"] ?>
                    </h1>

                    <h2 class="text-white text-4xl">
                        <?=$text["content"] ?>
                    </h2>

                </div>

                <!--------------------- Banner text and items end  --------------------->
            </div>
        </div>
    </section>

    <!--------------------- Banner carousel end --------------------->

    <!--------------------- Information section start --------------------->

    <section id="information">


        <!--------------------- Information items start --------------------->



        <!--------------------- Information items end --------------------->

    </section>

    <!--------------------- Information section end --------------------->

    <?php include('footer.php'); ?>

</body>

</html>