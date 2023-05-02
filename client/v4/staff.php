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

      <div class="grid md:grid-cols-3 xl:grid-cols-3 gap-x-6 lg:gap-xl-12">

        <?php foreach ($staff as $s): ?>

          <div class="mb-12">

            <p class="font-bold mb-2">
              <?= $s["name"] ?>
            </p>

            <img src = <?= $filepath."/".$s['pic'] ?>
                  class="rounded-full mx-auto shadow-lg mb-4" alt="Staff Member Photo"
                  style="max-width: 100px" />

            <p class="text-gray-500">
              <?= $s["title"] ?>
            </p>

            <p class="text-gray-500">
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