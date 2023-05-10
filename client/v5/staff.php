<?php

$mysqli = require_once('config.php');
$filepath = "../files";

$sql = "SELECT * FROM staff";
$result = mysqli_query($mysqli, $sql);

$staff = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Staff</title>
  <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

  <?php include('header.php'); ?>

  <!-- Container for demo purpose -->
  <div class="container my-24 px-6 mx-auto">

    <!-- Section: Design Block -->

    <section class="mb-32 text-gray-800 text-center">

    <h1 class="text-3xl sm:text-4xl font-title font-bold bg-clip-text text-transparent bg-gradient-to-br
        pb-4 mb-5 md:pb-6 from-blue-500 to-violet-700">Meet Our Staff</h1>

      <div class="grid grid-cols-2 gap-0 md:grid-cols-3">

        <?php foreach ($staff as $s): ?>

          <div class="mb-12">

            <img src = <?= $filepath."/".$s['pic'] ?>
                  class="rounded-md mx-auto shadow-lg mb-5 transition ease-in-out hover:scale-110" alt="Staff Member Photo"
                  style="max-width: 10rem" />

            <h1 class="text-xl text-blue-900">
              <?= $s["name"] ?>
            </h1>

            <h2 class="text-slate-700 text-lg">
              <?= $s["title"] ?>
            </h2>

            <p class="text-slate-500">
              <?= $s["bio"] ?>
            </p>

          </div>

        <?php endforeach ?>

      </div>

    </section>

  </div>

  <?php include('footer.php'); ?>

</body>

</html>