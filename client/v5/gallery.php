<?php

$mysqli = require_once('config.php');

// Absolute path $filepath = "https://cs.newpaltz.edu/p/s23-04/files"

// Relative path
$filepath = "../files";

$sql = "SELECT * FROM gallery";
$result = mysqli_query($mysqli, $sql);

$img = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

  <?php include('header.php'); ?>

    <div class="container mx-auto px-10 py-10">

    <h1 class="text-3xl sm:text-4xl font-title font-bold bg-clip-text text-center text-transparent bg-gradient-to-br
        pb-4 mb-5 md:pb-6 from-blue-500 to-violet-700">Photo Gallery</h1>

        <div class="-m-1 flex flex-wrap md:-m-2">

          <?php foreach ($img as $i): ?>

            <div class="flex w-1/3 flex-wrap">
              <div class="w-full p-1 md:p-2">
                <img src=<?= $filepath . "/" . $i['filename'] ?> alt="Gallery Image"
                  class="block h-full w-full rounded-lg object-cover object-center transition ease-in-out hover:scale-125">
              </div>
            </div>

          <?php endforeach ?>

        </div>

      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

</body>

</html>