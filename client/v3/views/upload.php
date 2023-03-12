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

<body class="bg-slate-100">

    <div class="h-screen flex flex-col items-center justify-center">
        <h1 class="text-slate-500 text-4xl mb-3">
            Upload a new banner photo!
        </h1>

        <form method ="post" action="..\server\admin\upload-photo.php">
            <input aria-label="Upload your file!" type="file" class="text-yellow-500"/>

            <button type="submit" class="bg-blue-700 w-full my-5 p-2 rounded-full text-xl text-white hover:bg-blue-500 duration-300">
                Submit
            </button>
        </form>
    </div>

</body>

</html>