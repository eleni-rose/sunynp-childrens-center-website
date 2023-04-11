<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Document</title>
</head>
<body>
    <h1>Message sent!</h1>
    <h2>We'll be in touch soon. We respond to most emails within 1-3 business days.</h2>
    <p> Here's what you sent:</p>
        <?php
            echo $_POST['message'];
        ?>
</body>
</html>