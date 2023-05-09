<?php

$mysqli = require_once('config.php');
$filepath = "../../files";

$sql = "SELECT * FROM staff";

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

    <h1 class="text-sky-100 text-5xl">Current Staff List</h1>

    <div class="my-5 py-5 flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">

                <table class="min-w-full text-left text-sky-100 my-3">

                    <thead class="border-b-5">
                        <tr class="text-xl">
                            <th scope="col" class="px-6 py-4 font-normal">ID</th>
                            <th scope="col" class="px-6 py-4 font-normal">Name</th>
                            <th scope="col" class="px-6 py-4 font-normal">Job Title</th>
                            <th scope="col" class="px-6 py-4 font-normal">Biography</th>
                            <th scope="col" class="px-6 py-4 font-normal">Profile Picture</th>
                        </tr>
                    </thead>

                    <?php if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) {

                    ?>

                    <tbody>

                        <tr class="border-b font-light">
                            <td class="whitespace-nowrap px-6 py-4"><?= $row["id"] ?></td>
                            <td class="whitespace-nowrap px-6 py-4"><?= $row["name"] ?></td>
                            <td class="whitespace-nowrap px-6 py-4"><?= $row["title"] ?></td>
                            <td class="whitespace-nowrap px-6 py-4"><?= $row["bio"] ?></td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <img src= <?= $filepath."/".$row["pic"] ?> class="rounded" style="max-width: 6rem"/>
                            </td>

                            <td class="whitespace-nowrap px-6 py-4">
                                <div class="inline-flex">
                                    <a class="bg-gray-400 hover:bg-sky-500 text-gray-800 hover:text-white duration-150 py-2 px-4 text-lg rounded-l"
                                        href="staff-update.php?id=<?php echo $row['id']; ?>">
                                        Update
                                    </a>

                                    <a class="bg-gray-300 hover:bg-red-500 text-gray-800 hover:text-white duration-150 py-2 px-4 text-lg rounded-r"
                                        href="staff-delete.php?id=<?php echo $row['id']; ?>">
                                        Delete
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

    <a href="staff-create.php"
       class="text-sky-400 text-lg text-center py-1.5 my-3 w-1/5 bg-transparent border-2 border-sky-300
                rounded-full transition ease-in-out hover:scale-110 hover:bg-sky-400 hover:border-sky-400
                hover:text-white active:bg-sky-300">
        Add new staff member
    </a>

</body>
</html>