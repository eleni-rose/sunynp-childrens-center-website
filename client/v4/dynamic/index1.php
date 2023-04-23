<?php

$mysqli = require_once('config.php');
$key1=1;
$sql1 = 'SELECT * FROM text WHERE id='. $key1;
$result1 = $mysqli->query($sql1);
$text1 = $result1->fetch_assoc();

$key2=2;
$sql2 = 'SELECT * FROM text WHERE id='. $key2;
$result2 = $mysqli->query($sql2);
$text2 = $result2->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/main.css">
</head>

<body>

<?php include('header.php'); ?>

<!--------------------- Banner carousel start  --------------------->

<section id="banner-carousel">
        <div class="w-full bg-cover bg-center" style="height:38rem; background-image: url('../img/banner4.jpg');">
            <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50 hover:bg-opacity-90 transition duration-700">

            <!--------------------- Banner text and items start  --------------------->
                <div class="text-center">
                  <iframe scr="carousel.php" width="100%" height="100%" frameborder="0" scrolling="yes"></iframe>

                  <h1 class="text-white text-5xl font-bold uppercase">
                        <?= $text1["content"] ?>
                    </h1>

                    <h2 class="text-white text-5xl font-bold uppercase">
                        <?= $text2["content"] ?>
                    </h2>

                </div>

            <!--------------------- Banner text and items end  --------------------->
            </div>
        </div>
    </section>

<!--------------------- Banner carousel end --------------------->

<!--------------------- Information section start --------------------->

    <section id="information">
        

        <!--------------------- Information items start --------------------->

            

        <!--------------------- Information items end --------------------->

    </section>

<!--------------------- Information section end --------------------->
<!--
  <h1>Pure <span id="css">Css</span> Carousel</h1>
  <div class="carousel-wrapper">
    <span id="item-1"></span>
    <span id="item-2"></span>
    <span id="item-3"></span>
    <div class="carousel-item item-1">
      <a href="#item-3" class="arrow-prev arrow"></a>
      <a href="#item-2" class="arrow-next arrow"></a>
    </div>

    <div class="carousel-item item-2">
      <a href="#item-1" class="arrow-prev arrow"></a>
      <a href="#item-3" class="arrow-next arrow"></a>
    </div>

    <div class="carousel-item item-3">
      <a href="#item-2" class="arrow-prev arrow"></a>
      <a href="#item-1" class="arrow-next arrow"></a>
    </div>

  </div>

-->
<?php include('footer.php'); ?>

</body>
</html>