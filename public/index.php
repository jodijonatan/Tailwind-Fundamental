<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TailwindCSS Fundamental</title>
    <link href="/src/css/output.css" rel="stylesheet" />
  </head>
  <body class="bg-gradient-to-r from-[#FBFBFB] via-[#D4F6FF] to-[#C6E7FF]">
    <header class="h-screen">
      <h1 class="text-stone-900 m-5 font-bold">Belajar Tailwind CSS dasar</h1>
      <form action="">
        <div class="border-2 border-[#C6E7FF] m-5 p-3 w-80">
          <label class="font-bold" for="">Nama: </label>
          <input
            class="p-2 outline-none"
            type="text"
            placeholder="Masukkan nama anda"
          />
          <label class="font-bold" for="">Gmail: </label>
          <input
            class="p-2 outline-none"
            type="email"
            placeholder="Masukkan gmail anda"
          />
        </div>
        <button
          class="bg-[#9FB3DF] mx-5 px-2 py-1 hover:bg-sky-700 hover:cursor-pointer rounded-[8px]"
        >
          Sign In
        </button>
      </form>
      <div>
        <h3 class="ml-5 mt-1 text-2xl font-bold">Lorem, ipsum.</h3>
        <p class="mx-5 my-2 p-2 border-1 border-[#C6E7FF]">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem
          excepturi tempora assumenda sint. Accusantium itaque accusamus in
          sapiente sed veritatis?
        </p>
      </div>
    </header>
  </body>
</html>
