<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="css/main.css">
    <title>SUNY New Paltz Children's Center</title>
</head>

<body>
      
<!--------------------- Navbar --------------------->

    <nav class="px-5 py-5 my-5 bg-white drop-shadow-sm" id="main-nav">
        <div class="flex place-content-center">

        <!--------------------- Navigation items --------------------->

            <div class="text-xl text-center hidden md:flex space-x-8">

                <a href="index.php" class="my-1 group transition duration-500">
                    Home
                    <span
                        class="
                            block max-w-0
                            group-hover:max-w-full
                            transition-all
                            duration-500
                            h-0.5
                            bg-orange-500">
                    </span>
                </a>

                <a href="calendar.php" class="my-1 group transition duration-500">
                    Calendar
                    <span
                        class="
                            block max-w-0
                            group-hover:max-w-full
                            transition-all
                            duration-500
                            h-0.5
                            bg-blue-700">
                    </span>
                </a>

                <a href="staff.php" class="my-1 group transition duration-500">
                    Our Teachers
                    <span
                        class="
                            block max-w-0
                            group-hover:max-w-full
                            transition-all
                            duration-500
                            h-0.5
                            bg-orange-500">
                    </span>
                </a>

                <a href="gallery.php" class="my-1 group transition duration-500">
                    Gallery
                    <span
                        class="
                            block max-w-0
                            group-hover:max-w-full
                            transition-all
                            duration-500
                            h-0.5
                            bg-blue-700">
                    </span>
                </a>

                <a href="contact.php" class="my-1 group transition duration-500">
                    Contact Us
                    <span
                        class="
                            block max-w-0
                            group-hover:max-w-full
                            transition-all
                            duration-500
                            h-0.5
                            bg-blue-700">
                    </span>
                </a>

                <a href="admin/login.php" class="my-1 group transition duration-500">
                    Admin
                    <span
                        class="
                            block max-w-0
                            group-hover:max-w-full
                            transition-all
                            duration-500
                            h-0.5
                            bg-orange-500">
                    </span>
                </a>

                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-black focus:outline-none focus:ring-blue-300 text-center inline-flex items-center" type="button">Parent Resources <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>     <!-- Dropdown menu -->
                <div id="dropdown" class="z-[100] hidden bg-gray-200 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                    <ul class="py-2 text-lg text-gray-700" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="about.php"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                Program Info
                            </a>
                        </li>

                        <li>
                            <a href="handbook.php"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                Parent Handbook
                            </a>
                        </li>

                        <li>
                            <a href="faq.php"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                FAQ
                            </a>
                        </li>

                        <li>
                            <a href="waitlist.php"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                Waitlist
                            </a>
                        </li>
                    </ul>
                </div>

            <!--------------------- Navigation items end --------------------->

            </div>
        </div>
    </nav>

<!--------------------- Navbar end --------------------->

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>
</html>
