<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="../css/main.css">
    <title>NPCC Admin Dashboard</title>
</head>

<body class="bg-slate-900">

<?php include('dashboard.php'); ?>

    <div class="h-screen flex flex-col items-center justify-center">

        <h1 class="text-sky-100 text-5xl my-3">
            Upload New Gallery Photo
        </h1>

            <form method ="post" action="gallery-create-process.php" enctype="multipart/form-data">

                <label for="image">Image file</label>

                    <input aria-label="Upload image"
                            id="fileToUpload"
                            name="fileToUpload"
                            type="file"
                            class="text-slate-400 my-5"/>

                <div class="flex flex-col items-center justify-center">
                    <button
                        class="text-sky-400 text-lg py-1.5 my-3 w-full bg-transparent border-2 border-sky-300
                                rounded-full transition ease-in-out hover:scale-110 hover:bg-sky-400 hover:border-sky-400
                                hover:text-white active:bg-sky-300">
                        Upload
                    </button>
                </div>
            </form>
    </div>

</body>

</html>