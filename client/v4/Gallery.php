<?php

$mysqli = require_once('config.php');
//$filepath = "/var/www/projects/s23-04/html/files";
//$filepath = dirname(__DIR__, 1);

//Web address or URL: absolute path
//$filepath = "https://cs.newpaltz.edu/p/s23-04/files";

//Web address or URL: RELATIVE path
$filepath = "../files";


$sql = "SELECT * FROM Files";
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

  <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-12">

    <div class="-m-1 flex flex-wrap md:-m-2">

    <?php foreach ($img as $i): ?>

      <div class="flex w-1/3 flex-wrap">
        <div class="w-full p-1 md:p-2">
          <img
            src = <?= $filepath."/".$i['filename'] ?>
            alt = "Gallery Image"
            class="block h-full w-full rounded-lg object-cover object-center">
        </div>
      </div>

      <?php endforeach ?>

    </div>

  </div>
    
</body>
</html>