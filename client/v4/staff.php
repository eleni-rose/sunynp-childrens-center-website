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

      <h2 class="text-3xl font-bold mb-12">Meet Our Staff!</h2>

      <div class="grid grid-cols-3 gap-6 md:gap-2 sm:gap-2">

        <?php foreach ($staff as $s): ?>

          <div class="mb-12">

            <img src = <?= $filepath."/".$s['pic'] ?>
                  class="rounded-md mx-auto shadow-lg mb-5" alt="Staff Member Photo"
                  style="max-width: 10rem" />

            <h1 class="font-bold text-xl text-blue-900">
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