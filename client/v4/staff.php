<?php
$mysqli = require_once('config.php');

$key4=4;
$sql4 = 'SELECT * FROM text WHERE id='. $key4;
$result4 = $mysqli->query($sql4);
$text4 = $result4->fetch_assoc();


$key5=5;
$sql5 = 'SELECT * FROM text WHERE id='. $key5;
$result5 = $mysqli->query($sql5);
$text5 = $result5->fetch_assoc();

$key6=6;
$sql6 = 'SELECT * FROM text WHERE id='. $key6;
$result6 = $mysqli->query($sql6);
$text6 = $result6->fetch_assoc();

$key7=7;
$sql7 = 'SELECT * FROM text WHERE id='. $key7;
$result7 = $mysqli->query($sql7);
$text7 = $result7->fetch_assoc();


$key8=8;
$sql8 = 'SELECT * FROM text WHERE id='. $key8;
$result8 = $mysqli->query($sql8);
$text8 = $result8->fetch_assoc();

$key9=9;
$sql9 = 'SELECT * FROM text WHERE id='. $key9;
$result9 = $mysqli->query($sql9);
$text9 = $result9->fetch_assoc();

$key10=10;
$sql10 = 'SELECT * FROM text WHERE id='. $key10;
$result10 = $mysqli->query($sql10);
$text10 = $result10->fetch_assoc();


$key11=11;
$sql11 = 'SELECT * FROM text WHERE id='. $key11;
$result11 = $mysqli->query($sql11);
$text11 = $result11->fetch_assoc();

$key12=12;
$sql12 = 'SELECT * FROM text WHERE id='. $key12;
$result12 = $mysqli->query($sql12);
$text12 = $result12->fetch_assoc();

$key13=13;
$sql13 = 'SELECT * FROM text WHERE id='. $key13;
$result13 = $mysqli->query($sql13);
$text13 = $result13->fetch_assoc();


$key14=14;
$sql14 = 'SELECT * FROM text WHERE id='. $key14;
$result14 = $mysqli->query($sql14);
$text14 = $result14->fetch_assoc();

$key15=15;
$sql15 = 'SELECT * FROM text WHERE id='. $key15;
$result15 = $mysqli->query($sql15);
$text15 = $result15->fetch_assoc();

$key16=16;
$sql16 = 'SELECT * FROM text WHERE id='. $key16;
$result16 = $mysqli->query($sql16);
$text16 = $result16->fetch_assoc();


$key17=17;
$sql17 = 'SELECT * FROM text WHERE id='. $key17;
$result17 = $mysqli->query($sql17);
$text17 = $result17->fetch_assoc();

$key18=18;
$sql18 = 'SELECT * FROM text WHERE id='. $key18;
$result18 = $mysqli->query($sql18);
$text18 = $result18->fetch_assoc();

$key19=19;
$sql19 = 'SELECT * FROM text WHERE id='. $key19;
$result19 = $mysqli->query($sql19);
$text19 = $result19->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="en">
<head>
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
      <h2 class="text-3xl font-bold mb-12"> <?= $text4["content"] ?> </h2>
  
      <div class="grid md:grid-cols-3 xl:grid-cols-3 gap-x-6 lg:gap-xl-12">
        <div class="mb-12">
          <p class="font-bold mb-2"> <?= $text5["content"] ?> </p>

          <img src="https://mdbootstrap.com/img/new/avatars/5.jpg" class="rounded-full mx-auto shadow-lg mb-4" alt=""
            style="max-width: 100px" />
  
          <p class="text-gray-500"><?= $text6["content"] ?></p>
          <p class="text-gray-500"><?= $text7["content"] ?></p>
        </div>

        <div class="mb-12">
          <p class="font-bold mb-2"> <?= $text8["content"] ?> </p>

          <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-full mx-auto shadow-lg mb-4" alt=""
            style="max-width: 100px" />
          <p class="text-gray-500"><?= $text9["content"] ?></p>
          <p class="text-gray-500"><?= $text10["content"] ?></p>
        </div>
        
  
        <div class="mb-12">
          <p class="font-bold mb-2"> <?= $text11["content"] ?> </p>

          <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" class="rounded-full mx-auto shadow-lg mb-4" alt=""
            style="max-width: 100px" />
          <p class="text-gray-500"><?= $text12["content"] ?></p>
          <p class="text-gray-500"><?= $text13["content"] ?></p>
        </div>

        <div class="mb-12">
          <p class="font-bold mb-2"> <?= $text14["content"] ?> </p>

          <img src="https://mdbootstrap.com/img/new/avatars/7.jpg" class="rounded-full mx-auto shadow-lg mb-4" alt=""
            style="max-width: 100px" />
          <p class="text-gray-500"><?= $text15["content"] ?></p>
          <p class="text-gray-500"><?= $text16["content"] ?></p>
        </div>

        <div class="mb-12">
          <p class="font-bold mb-2"> <?= $text17["content"] ?> </p>

          <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" class="rounded-full mx-auto shadow-lg mb-4" alt=""
            style="max-width: 100px" />
          <p class="text-gray-500"><?= $text18["content"] ?></p>
          <p class="text-gray-500"><?= $text19["content"] ?></p>
        </div>

        <!--
        <div class="mb-12">
          <img src="https://mdbootstrap.com/img/new/avatars/9.jpg" class="rounded-full mx-auto shadow-lg mb-4" alt=""
            style="max-width: 100px" />
          <p class="font-bold mb-2">Soraya Letto</p>
          <p class="text-gray-500">SEO expert</p>
        </div>
  
        <div class="mb-12">
          <img src="https://mdbootstrap.com/img/new/avatars/10.jpg" class="rounded-full mx-auto shadow-lg mb-4" alt=""
            style="max-width: 100px" />
          <p class="font-bold mb-2">Maliha Welch</p>
          <p class="text-gray-500">Web designer</p>
        </div>
  
        <div class="mb-12">
          <img src="https://mdbootstrap.com/img/new/avatars/11.jpg" class="rounded-full mx-auto shadow-lg mb-4" alt=""
            style="max-width: 100px" />
          <p class="font-bold mb-2">Zeynep Dudley</p>
          <p class="text-gray-500">Web developer</p>
        </div>
  
        <div class="mb-12">
          <img src="https://mdbootstrap.com/img/new/avatars/12.jpg" class="rounded-full mx-auto shadow-lg mb-4" alt=""
            style="max-width: 100px" />
          <p class="font-bold mb-2">Avaya Hills</p>
          <p class="text-gray-500">Copywritter</p>
        </div>
  
        <div class="mb-12">
          <img src="https://mdbootstrap.com/img/new/avatars/13.jpg" class="rounded-full mx-auto shadow-lg mb-4" alt=""
            style="max-width: 100px" />
          <p class="font-bold mb-2">Thierry Fischer</p>
          <p class="text-gray-500">Senior consultant</p>
        </div>
  
        <div class="mb-12">
          <img src="https://mdbootstrap.com/img/new/avatars/14.jpg" class="rounded-full mx-auto shadow-lg mb-4" alt=""
            style="max-width: 100px" />
          <p class="font-bold mb-2">Aisling Sheldon</p>
          <p class="text-gray-500">Senior developer</p>
        </div>
  
        <div class="mb-12">
          <img src="https://mdbootstrap.com/img/new/avatars/15.jpg" class="rounded-full mx-auto shadow-lg mb-4" alt=""
            style="max-width: 100px" />
          <p class="font-bold mb-2">Ayat Black</p>
          <p class="text-gray-500">Web designer</p>
        </div>
        *** if more profile pictures are needed-->

      </div>
    </section>
    <!-- Section: Design Block -->
  
  </div>
  <!-- Container for demo purpose -->

  <?php include('footer.php'); ?>
</body>
</html>