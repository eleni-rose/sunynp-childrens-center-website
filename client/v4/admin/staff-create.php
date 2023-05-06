
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

<!-- Staff CRUD Form for Creating -->

<body class='bg-slate-900'>

<div class="h-screen flex flex-col items-center justify-center">

    <h1 class="text-sky-100 text-5xl my-5 py-5">Add New Staff Member</h1>

        <form method="post" action="staff-create-process.php" class="w-full max-w-lg">

            <div class="flex flex-wrap -mx-3 mb-4">

                <div class="w-full px-3 mb-6 md:mb-0 transition ease-in-out hover:scale-110">

                    <label class="block tracking-wide text-blue-300 text-xl font-bold mb-2"
                        for="grid-name">
                        Name
                    </label>

                    <input
                        class="appearance-none block w-full bg-slate-800 text-white text-lg rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-slate-600 focus:placeholder:opacity-0"
                        id="grid-text"
                        name="staff-name"
                        type="text"
                        placeholder="Name">
                </div>

                <div class="w-full px-3 mb-6 md:mb-0 transition ease-in-out hover:scale-110">

                    <label class="block uppercase tracking-wide text-blue-300 text-xl font-bold mb-2"
                        for="grid-title">
                        Job Title
                    </label>

                    <input
                        class="appearance-none block w-full bg-slate-800 text-white text-lg rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-slate-600 focus:placeholder:opacity-0"
                        id="grid-title"
                        name="job-title"
                        type="text"
                        placeholder="Job title">
                </div>


                <div class="w-full px-3 mb-6 md:mb-0 transition ease-in-out hover:scale-110">

                    <label class="block uppercase tracking-wide text-blue-300 text-xl font-bold mb-2"
                        for="grid-bio">
                        Biography
                    </label>

                    <textarea
                        class="appearance-none block w-full bg-slate-800 text-white text-lg rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-slate-600 focus:placeholder:opacity-0"
                        id="grid-bio"
                        name="biography"
                        type="text"
                        placeholder="Biography"></textarea>
                </div>

            </div>

            <div class="flex flex-col items-center justify-center">
                <button
                    class="text-sky-400 text-lg py-1.5 my-3 w-1/2 bg-transparent border-2
                    border-sky-300 rounded-full transition ease-in-out hover:scale-110 hover:bg-sky-400
                    hover:text-white hover:border-sky-400 active:bg-sky-300">
                    Add staff
                </button>
            </div>


        </form>

        <a href="staff-list.php" class="text-red-500 text-lg hover:text-red-400">Cancel</a>

    </div>
</body>
</html>