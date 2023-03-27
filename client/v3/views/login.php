<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="../css/main.css">
    <title>Sign up</title>
</head>

<body class="bg-slate-900">
    <div class="h-screen flex flex-col items-center justify-center">

        <h1 class="text-3xl my-5 py-2 text-orange-300">Sign in</h1>

        <!--------------------- Form start  --------------------->

        <form action="../server/account/create-account.php" method="post" novalidate class="w-full max-w-lg">

            <!--------------------- Email start --------------------->

            <div class="flex flex-wrap -mx-3 mb-4">

                <div class="w-full px-3 transition ease-in-out hover:scale-110">

                    <label class="block uppercase tracking-wide text-red-300 text-xs font-bold mb-2" for="grid-email">
                        Email
                    </label>

                    <input
                        class="appearance-none block w-full bg-slate-800 text-white border border-slate-800 rounded py-3 px-4 mb-3 leading-tight focus:bg-slate-600 focus:outline-none focus:placeholder:opacity-0"
                        id="grid-email"
                        name="email"
                        type="email"
                        placeholder="example@email.com">

                </div>


            </div>

            <!--------------------- Email end --------------------->

            <!--------------------- Password start  --------------------->

            <div class="flex flex-wrap -mx-3 mb-4">

                <div class="w-full px-3 transition ease-in-out hover:scale-110">

                    <label class="block uppercase tracking-wide text-yellow-200 text-xs font-bold mb-2"
                        for="grid-password">
                        Password
                    </label>

                    <input
                        class="appearance-none block w-full bg-slate-800 text-white border border-slate-800 rounded py-3 px-4 mb-3 leading-tight focus:bg-slate-600 focus:outline-none focus:placeholder:opacity-0"
                        id="grid-password"
                        name="password"
                        type="password"
                        placeholder="***********">

                </div>

            </div>

            <!--------------------- Password end  --------------------->

            <!--------------------- Submit button start --------------------->

            <button
                class="text-orange-300 p-2 m-2 w-1/2 item-center bg-transparent border-2 border-orange-300 rounded-full transition ease-in-out hover:scale-110 hover:bg-orange-300 hover:text-white active:bg-orange-200">
                Sign in!</button>

            <!--------------------- Submit button end --------------------->

        </form>

        <!--------------------- Form end  --------------------->

    </div>
</body>
</html>