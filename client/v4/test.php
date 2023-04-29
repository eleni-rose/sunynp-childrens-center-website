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
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <?php include('header.php'); ?>

    <!--------------------- Banner carousel start  --------------------->

    <section id="banner-carousel">
        <div id="controls-carousel" class="w-full bg-cover bg-center"style="height:38rem;" data-carousel="slide"> 
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96"style="height:38rem">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/banner.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        @ -23,30 +46,67 @@
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/banner3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
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

                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/banner4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/banner5.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
        </div>

    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
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