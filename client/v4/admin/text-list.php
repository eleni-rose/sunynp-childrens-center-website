<?php

$mysqli = require_once('config.php');
$filepath = dirname(__DIR__, 1);

$sql = "SELECT * FROM text";

$result = mysqli_query($mysqli, $sql);
$text = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/main.css">


</head>

<body class='bg-slate-700'>

<div class="h-screen flex flex-col items-center justify-center">

    <h1 class="text-sky-100 text-5xl my-5 py-5">Staff List</h1>

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full text-left text-sm font-light">

                <thead class="border-b font-medium">
                    <tr>
                    <th scope="col" class="px-6 py-4">Name</th>
                    <th scope="col" class="px-6 py-4">Job Title</th>
                    <th scope="col" class="px-6 py-4">Biography</th>
                    <th scope="col" class="px-6 py-4">Profile Picture</th>
                    </tr>
                </thead>

                <?php foreach ($text as $t): ?>

                    <tbody>
                        <tr class="border-b">
                            <td class="whitespace-nowrap px-6 py-4 font-medium"><?= $t["info"] ?></td>
                            <td class="whitespace-nowrap px-6 py-4"><?= $t["content"] ?></td>

                            <td class="whitespace-nowrap px-6 py-4">
                                <a href="process-staff.php?id=<?php echo $row["id"]; ?>">Update</a></td>
                            </td>

                            <td class="whitespace-nowrap px-6 py-4">
                                Delete
                            </td>
                        </tr>
                    </tbody>

                <?php endforeach ?>

                </table>
            </div>
            </div>
        </div>
    </div>

</body>
</html>