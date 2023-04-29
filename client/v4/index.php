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

        <div id="controls-carousel" class="w-full bg-cover bg-center" style="height:30rem;" data-carousel="slide"> 
            <!-- Carousel wrapper -->
            
            <div class="relative h-20 overflow-hidden rounded-lg md:h-96" style="height:30rem">

            <!-- Text Items -->
                <div class="absolute top-0 left-0 z-50 flex items-center justify-center h-full w-full">
                    <div class="text-center">
                        <h1 class="mb-3 text-white text-3xl font-['Arial'] sm:text-5xl font-extrabold uppercase drop-shadow-md">
                            Welcome to the <span class="text-orange-400">SUNY New Paltz</span> Children's Center!
                        </h1>

                        <h2 class="text-white text-2xl sm:text-4xl">
                            Serving the New Paltz community since 1998
                        </h2>
                    </div>
                </div>

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

                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/banner4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>

                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/banner5.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>

            </div>

            <!-- Slider controls

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

            -->
                    
        </div>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

    </section>

    <!--------------------- Banner carousel end --------------------->

    <!--------------------- Information section start --------------------->

    <section id="information">
        <div class="py-24 sm:py-32">

            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto w-3/4 items-center">
                    <h2 class="text-3xl text-center font-bold tracking-tight text-gray-900 uppercase sm:text-4xl">
                        Our Program and Philosophy
                    </h2>
                    <p class="mt-2 text-lg text-center leading-8 text-gray-600">
                        Our primary concern is the social and emotional development of each child.
                        We strive to provide a loving and secure environment which encourages cooperation,
                        self-expression and respect for others. Our daily curriculum provides activities
                        such as free play, arts and crafts, music, story telling, and outdoor play.
                        Through various activities we try to foster a curiosity and respect for nature
                        and for all the different cultures in the world around us. All themes are presented
                        in an age appropriate, relaxed and fun-filled way. Our program is based on
                        non-competitive, non-sexist and multicultural values. Most importantly we seek to
                        respect the freedom of each child while providing structure and direction.
                    </p>
                </div>

            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-10 sm:pt-10 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="group relative">

                        <img src="img/banner.jpg"  class="mb-5 rounded-lg">

                        <h3 class="mt-3 text-center text-2xl leading-6 text-orange-500">
                            Our Philosophy
                        </h3>
                        
                        <p class="mt-5 text-md text-center leading-6 text-gray-600">
                            The campus early childhood program mirrors Bard's value on progressive education
                            for our youngest citizens. The Nursery School and Children's Center operate as one
                            unified program.  Our early childhood campus includes two buildings (next door
                            to one another) designed for full day education & care, with adjacent playgrounds
                            and nature scapes for outdoor play every day in all seasons and all weather.
                        </p>
                    </div>
                </article>

                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="group relative">

                        <img src="img/banner5.jpg"  class="mb-5 rounded-lg">

                        <h3 class="mt-3 text-center text-2xl leading-6 text-orange-500">
                            Our Program
                        </h3>
                        
                        <p class="mt-5 text-md text-center leading-6 text-gray-600">
                            The campus early childhood program mirrors Bard's value on progressive education
                            for our youngest citizens. The Nursery School and Children's Center operate as one
                            unified program.  Our early childhood campus includes two buildings (next door
                            to one another) designed for full day education & care, with adjacent playgrounds
                            and nature scapes for outdoor play every day in all seasons and all weather.
                        </p>
                    </div>
                </article>

                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="group relative">

                        <img src="img/banner4.jpg"  class="mb-5 rounded-lg">

                        <h3 class="mt-3 text-center text-2xl leading-6 text-orange-500">
                            Our Promise
                        </h3>
                        
                        <p class="mt-5 text-md text-center leading-6 text-gray-600">
                            The campus early childhood program mirrors Bard's value on progressive education
                            for our youngest citizens. The Nursery School and Children's Center operate as one
                            unified program.  Our early childhood campus includes two buildings (next door
                            to one another) designed for full day education & care, with adjacent playgrounds
                            and nature scapes for outdoor play every day in all seasons and all weather.
                        </p>
                    </div>
                </article>

        <!-- More posts... -->
        </div>
    </div>
    </div>
    </section>

    <!--------------------- Information section end --------------------->

    <?php include('footer.php'); ?>

</body>

</html>