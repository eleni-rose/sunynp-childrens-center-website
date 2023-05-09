<?php

$mysqli = require_once('config.php');

$sql = "SELECT * FROM text";

$result = $mysqli->query($sql);

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

<body class="bg-slate-900">

<?php include('dashboard.php'); ?>

<div class="h-screen flex flex-col items-center justify-center">

    <h1 class="text-sky-100 text-5xl">Home Page Content</h1>

    <div class="my-5 py-5 flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">

                <table class="min-w-full text-left text-sky-100 my-3">

                    <thead class="border-b-5">
                        <tr class="text-xl">
                            <th scope="col" class="px-6 py-4 font-normal">ID</th>
                            <th scope="col" class="px-6 py-4 font-normal">Description</th>
                            <th scope="col" class="px-6 py-4 font-normal">Content</th>
                        </tr>
                    </thead>

                    <?php if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) {

                    ?>

                    <tbody>

                        <tr class="border-b font-light">
                            <td class="whitespace-nowrap px-6 py-4"><?= $row["id"] ?></td>
                            <td class="whitespace-nowrap px-6 py-4"><?= $row["info"] ?></td>
                            <td class="whitespace-nowrap px-6 py-4"><?= $row["content"] ?></td>

                            <td class="whitespace-nowrap px-6 py-4">
                                <div class="inline-flex">
                                    <a class="bg-gray-400 hover:bg-sky-500 text-gray-800 hover:text-white duration-150 py-2 px-4 text-lg rounded"
                                        href="text-update.php?id=<?php echo $row['id']; ?>">
                                        Update
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <?php  }
                            }
                        ?>

                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>

</body>
</html>