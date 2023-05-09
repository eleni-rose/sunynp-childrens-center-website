<?php
$mysqli = require_once('config.php');
$filepath = dirname(__DIR__, 1);

if (isset($_GET['id'])) {

    $tid = $_GET['id'];
    $sql = "SELECT * FROM text WHERE id='$tid'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $description = $row['info'];
            $content = $row['content'];
        }
    }

} else {
    echo "No ID set!";
    die;
}

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

<!-- Staff CRUD Form for Updating -->

<body class='bg-slate-900'>

<?php include('dashboard.php'); ?>

<div class="h-screen flex flex-col items-center justify-center">

    <h1 class="text-sky-100 text-5xl my-5 py-5">Update <?php echo $description ?> </h1>

        <form method="post" action="text-update-process.php" class="w-full max-w-lg">

            <div class="flex flex-wrap -mx-3 mb-4">

                <input type="hidden" name="tid" value="<?php echo $tid; ?>">

                <input type="hidden" name="info" value="<?php echo $tid; ?>">

                <div class="w-full px-3 mb-6 md:mb-0 transition ease-in-out hover:scale-110">
                    <label class="block tracking-wide text-blue-300 text-xl mb-2"
                        for="grid-content">
                        Update content
                    </label>

                    <input
                        class="appearance-none block w-full bg-slate-800 text-white text-lg rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-slate-600 focus:placeholder:opacity-0"
                        id="grid-content"
                        name="content"
                        type="text"
                        value="<?php echo $content ?>"
                        placeholder="Content"></input>
                </div>

            </div>

            <div class="flex flex-col items-center justify-center">
                <button
                    class="text-sky-400 text-lg py-1.5 my-3 w-1/2 bg-transparent border-2
                    border-sky-300 rounded-full transition ease-in-out hover:scale-110 hover:bg-sky-400
                    hover:text-white hover:border-sky-400 active:bg-sky-300">
                    Update text content!
                </button>
            </div>

        </form>

        <a href="text-list.php" class="text-red-500 text-lg hover:text-red-400">Cancel</a>
</body>
</html>