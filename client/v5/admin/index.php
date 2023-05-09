<?php

$mysqli = require_once('config.php');
$filepath = "../files";

// Title
$sql1 = 'SELECT * FROM text WHERE id=1';
$result1 = $mysqli->query($sql1);
$title = $result1->fetch_assoc();

// Subtitle
$sql2 = 'SELECT * FROM text WHERE id=2';
$result2 = $mysqli->query($sql2);
$subtitle = $result2->fetch_assoc();

// About Content
$sql3 = 'SELECT * FROM text WHERE id=3';
$result3 = $mysqli->query($sql3);
$about = $result3->fetch_assoc();

// Info Title 1
$sql4 = 'SELECT * FROM text WHERE id=4';
$result4 = $mysqli->query($sql4);
$info_title1 = $result4->fetch_assoc();

// Info Title 2
$sql5 = 'SELECT * FROM text WHERE id=5';
$result5 = $mysqli->query($sql5);
$info_title2 = $result5->fetch_assoc();

// Info Title 3
$sql6 = 'SELECT * FROM text WHERE id=6';
$result6 = $mysqli->query($sql6);
$info_title3 = $result6->fetch_assoc();

// Info 1
$sql7 = 'SELECT * FROM text WHERE id=7';
$result7 = $mysqli->query($sql7);
$info1 = $result7->fetch_assoc();

// Info 2
$sql8 = 'SELECT * FROM text WHERE id=8';
$result8 = $mysqli->query($sql8);
$info2 = $result8->fetch_assoc();

// Info 3
$sql9 = 'SELECT * FROM text WHERE id=9';
$result9 = $mysqli->query($sql9);
$info3 = $result9->fetch_assoc();


$sql10 = "SELECT * FROM slideshow";
$result10 = mysqli_query($mysqli, $sql10);

$img = mysqli_fetch_all($result, MYSQLI_ASSOC);


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

        <div id="controls-carousel" class="w-full bg-cover bg-center" style="height:35rem;" data-carousel="slide"> 
            <!-- Carousel wrapper -->
            
            <div class="relative h-20 overflow-hidden rounded-lg md:h-96" style="height:35rem">

            <!-- Text Items -->
                <div class="absolute top-0 left-0 z-50 flex items-center justify-center h-full w-full">
                    <div class="text-center">
                        <h1 class="mb-3 text-white text-4xl font-['Arial'] sm:text-4xl font-extrabold uppercase drop-shadow-md">
                            <?= $title["content"] ?>
                        </h1>

                        <h2 class="text-white text-2xl sm:text-3xl drop-shadow-md">
                            <?= $subtitle["content"] ?>
                        </h2>
                    </div>
                </div>

                <!-- Slideshow Images  -->

                <div class="hidden duration-700 transition ease-in-out" data-carousel-item>
                    <img src = <?= $filepath."/".$i['filename'] ?> class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>

            </div>                    
        </div>

    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    </section>

    <!--------------------- Banner carousel end --------------------->

    <!--------------------- Information section start --------------------->

    <section id="information">
        <div class="py-24 sm:py-14">

        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto w-3/4 items-center">
                <h2 class="text-3xl text-center font-bold tracking-tight text-gray-900 sm:text-4xl">
                    About Our Program
                </h2>
                <p class="mt-2 text-lg text-center leading-8 text-gray-600">
                    <?= $about["content"] ?>
                </p>
            </div>

            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-10 sm:pt-10 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="group relative">

                        <img src="img/7.jpg"  class="mb-5 rounded-lg">

                        <h3 class="mt-3 text-center text-2xl leading-6 text-orange-500">
                            <?= $info_title1["content"] ?>
                        </h3>
                        
                        <p class="mt-5 text-md text-center leading-6 text-gray-600">
                            <?= $info1["content"] ?>
                        </p>
                    </div>
                </article>

                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="group relative">

                        <img src="img/9.jpg"  class="mb-5 rounded-lg">

                        <h3 class="mt-3 text-center text-2xl leading-6 text-orange-500">
                            <?= $info_title2["content"] ?>
                        </h3>
                        
                        <p class="mt-5 text-md text-center leading-6 text-gray-600">
                            <?= $info2["content"] ?>
                        </p>
                    </div>
                </article>

                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="group relative">

                        <img src="img/13.jpg"  class="mb-5 rounded-lg">

                        <h3 class="mt-3 text-center text-2xl leading-6 text-orange-500">
                            <?= $info_title3["content"] ?>
                        </h3>
                        
                        <p class="mt-5 text-md text-center leading-6 text-gray-600">
                            <?= $info3["content"] ?>
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>
    </section>

    <!--------------------- Information section end --------------------->

    <script>

    </script>

    <?php include('footer.php'); ?>

</body>

</html>