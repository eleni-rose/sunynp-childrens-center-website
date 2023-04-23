<?php
$mysqli = require_once('config.php');

$key3=3;
$sql3 = 'SELECT * FROM text WHERE id='. $key3;
$result3 = $mysqli->query($sql3);
$text3 = $result3->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="../css/main.css">
    <title>SUNY New Paltz Children's Center</title>

</head>

<!--------------------- Footer start  --------------------->

<body>

    <footer class="bg-gray-100">
        <div class="container mx-auto p-8">

            <div class="flex flex-col md:flex-row justify-between">
                <div class="flex flex-col space-y-4">
                    <h3 class="text-xl font-bold">Contact Us</h3>
                    
                    <p  class="text-white text-5xl font-bold">
                        <?= $text3["content"] ?>
                    </p>
                    <p class="text-slate-400">Address: 1 Hawk Drive, New Paltz, NY 12561</p>
                </div>
            </div>
            
        </div>
    </footer>
    
</body>

<!--------------------- Footer end  --------------------->
