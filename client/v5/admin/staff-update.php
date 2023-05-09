<?php
$mysqli = require_once('config.php');
$filepath = dirname(__DIR__, 1);

if (isset($_GET['id'])) {

    $sid = $_GET['id'];
    $sql = "SELECT * FROM staff WHERE id='$sid'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $name = $row['name'];
            $title = $row['title'];
            $bio = $row['bio'];
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

    <h1 class="text-sky-100 text-5xl my-5 py-5">Update <?php echo $name ?> </h1>

        <form method="post" action="staff-update-process.php" class="w-full max-w-lg">

            <div class="flex flex-wrap -mx-3 mb-4">

                <div class="w-full px-3 mb-6 md:mb-0 transition ease-in-out hover:scale-110">
                    <label class="block tracking-wide text-blue-300 text-xl mb-2"
                        for="grid-name">
                        Update name
                    </label>

                    <input
                        class="appearance-none block w-full bg-slate-800 text-white text-lg rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-slate-600 focus:placeholder:opacity-0"
                        id="grid-text"
                        name="staff-name"
                        type="text"
                        value="<?php echo $name ?>"
                        placeholder="Name">

                    <input type="hidden" name="sid" value="<?php echo $sid; ?>">

                </div>

                <div class="w-full px-3 mb-6 md:mb-0 transition ease-in-out hover:scale-110">
                    <label class="block tracking-wide text-blue-300 text-xl mb-2"
                        for="grid-title">
                        Update job title
                    </label>

                    <input
                        class="appearance-none block w-full bg-slate-800 text-white text-lg rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-slate-600 focus:placeholder:opacity-0"
                        id="grid-title"
                        name="job-title"
                        type="text"
                        value="<?php echo $title ?>"
                        placeholder="Job title">
                </div>


                <div class="w-full px-3 mb-6 md:mb-0 transition ease-in-out hover:scale-110">
                    <label class="block tracking-wide text-blue-300 text-xl mb-2"
                        for="grid-bio">
                        Update biography
                    </label>

                    <input
                        class="appearance-none block w-full bg-slate-800 text-white text-lg rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-slate-600 focus:placeholder:opacity-0"
                        id="grid-bio"
                        name="biography"
                        type="text"
                        value="<?php echo $bio ?>"
                        placeholder="Biography"></input>
                </div>

            </div>

            <div class="flex flex-col items-center justify-center">
                <button
                    class="text-sky-400 text-lg py-1.5 my-3 w-1/2 bg-transparent border-2
                    border-sky-300 rounded-full transition ease-in-out hover:scale-110 hover:bg-sky-400
                    hover:text-white hover:border-sky-400 active:bg-sky-300">
                    Update user!
                </button>
            </div>

        </form>

        <a href="staff-list.php" class="text-red-500 text-lg hover:text-red-400">Cancel</a>
</body>
</html>