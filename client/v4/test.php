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
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96"style="height:38rem">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="img/banner.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="img/banner2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
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
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

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