<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

<?php include('header.php'); ?>

<div class="max-h-screen mt-28 grid gap-4 md:gap-6 lg:gap-8">

  <div class="text-center grid p-4 place-items-center">

  <h1 class="text-3xl sm:text-4xl font-title font-bold bg-clip-text text-transparent bg-gradient-to-br
        pb-4 md:pb-6 from-blue-500 to-violet-700">Contact Us</h1>

    <form method="post" action="email/process-email.php" class="w-full max-w-lg">

      <div class="flex flex-wrap -mx-3 mb-4">

        <div class="w-full px-3 mb-6 md:mb-0 transition ease-in-out hover:scale-110">

            <label class="block tracking-wide text-left text-blue-700 text-xl mb-2"
                for="grid-name">
                Your name
            </label>

            <input
                class="appearance-none block w-full bg-gray-300 text-slate-800 text-lg rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-slate-400 focus:placeholder:opacity-0"
                id="grid-name"
                name="name"
                type="text"
                placeholder="Jane"
                required>
        </div>
      </div>

      <!--------------------- Email start --------------------->

      <div class="flex flex-wrap -mx-3 mb-4">

          <div class="w-full px-3 transition ease-in-out hover:scale-110">

              <label class="block tracking-wide text-left text-blue-700 text-xl mb-2" for="grid-email">
                  Your email
              </label>

              <input
                  class="appearance-none block w-full bg-gray-300 text-slate-800 text-lg rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-slate-400 focus:placeholder:opacity-0"
                  id="grid-email"
                  name="email"
                  type="email"
                  placeholder="example@email.com"
                  required>
          </div>
      </div>

      <!--------------------- Email end --------------------->

      <!--------------------- Subject start  --------------------->

      <div class="flex flex-wrap -mx-3 mb-4">

        <div class="w-full px-3 mb-6 md:mb-0 transition ease-in-out hover:scale-110">

            <label class="block tracking-wide text-left text-blue-700 text-xl mb-2"
                for="grid-subject">
                Subject
            </label>

            <input
                class="appearance-none block w-full bg-gray-300 text-slate-800 text-lg rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-slate-400 focus:placeholder:opacity-0"
                id="grid-subject"
                name="subject"
                type="text"
                placeholder="Question about..."
                required>
        </div>
      </div>

      <!--------------------- Subject end  --------------------->

      <!--------------------- Message start  --------------------->

      <div class="flex flex-wrap -mx-3 mb-4">

        <div class="w-full px-3 mb-6 md:mb-0 transition ease-in-out hover:scale-110">

            <label class="block text-left tracking-wide text-blue-700 text-lg mb-2"
                for="grid-message">
                Your message
            </label>

            <textarea
                class="appearance-none block w-full bg-gray-300 text-slate-800 text-lg rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-slate-400 focus:placeholder:opacity-0"
                id="grid-message"
                name="message"
                type="text"
                placeholder="Your message here!"
                required></textarea>
        </div>
      </div>

      <!--------------------- Message end  --------------------->

      <!--------------------- Submit button start --------------------->

      <div class="flex flex-col items-center justify-center">
          <button
              class="text-sky-400 text-lg py-1.5 my-3 w-1/2 bg-transparent border-2 border-sky-300 rounded-full
              transition ease-in-out hover:scale-110 hover:bg-sky-400 hover:text-white active:bg-sky-300 hover:border-sky-400">
              Send message
          </button>
      </div>

    <!--------------------- Submit button end --------------------->

    <!--------------------- Form end --------------------->

    </form>

  </div>

  <?php include('footer.php'); ?>

</body>
</html>