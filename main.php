<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Testing</title>
    <link href="/src/css/output.css" rel="stylesheet" />
  </head>
  <body class="bg-white dark:bg-black">
    <div
      class="overflow-scroll bg-local h-96 bg-[url('https://images.unsplash.com/photo-1593642634367-d91a135587b5')] w-[400px] mx-auto mt-5"
    >
      <p class="text-2xl">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque sint eum
        magnam ipsa. Nihil inventore dolorem amet repellendus fuga eveniet
        adipisci incidunt corporis suscipit reiciendis minima ab repellat,
        nesciunt sapiente odio rerum quibusdam tenetur consequatur provident
        ullam beatae ratione autem doloribus recusandae. Quae, iusto tempora.
        Molestiae, tenetur eligendi voluptas harum ipsa saepe maxime hic quod
        possimus, esse asperiores iure suscipit minima perferendis sed quos
        earum dolores laboriosam provident aliquam exercitationem? Saepe
        architecto eum qui error alias pariatur enim aperiam, excepturi
        veritatis, eos cum! Eius unde earum at, labore neque dolor obcaecati?
        Iure ducimus, quas aut ipsa quam ab necessitatibus? Natus quibusdam
        earum qui officiis corporis sequi totam alias cupiditate repudiandae
        eius aliquam laboriosam minus ut unde rem recusandae, dicta fugiat
        asperiores iusto. Enim, cum illum. Quod, modi provident explicabo unde
        tempora saepe tempore vero tenetur qui perferendis ab hic distinctio
        blanditiis. Praesentium veritatis inventore aperiam consequatur
        recusandae. Cum esse facere ducimus, consequatur eligendi explicabo
        nobis vitae soluta tempore minima similique provident adipisci pariatur
        tenetur dolores alias inventore nulla culpa fugiat architecto molestiae
        deleniti nemo. A sit architecto illo. Eum blanditiis exercitationem id
        maxime, at dicta? Dolorum sapiente ad veniam, dignissimos exercitationem
        maiores, beatae a nostrum cum sit consequatur accusamus repudiandae!
      </p>
    </div>
    <hr class="my-10" />
    <div
      class="p-5 max-w-lg bg-slate-100 rounded-2xl shadow-md border-slate-200 m-auto group hover:bg-sky-800 dark:bg-slate-500 dark:hover:bg-slate-600"
    >
      <h1
        class="text-black pt-5 text-[20px] font-semibold group-hover:text-white selection:bg-amber-300 selection:text-black dark:group-hover:text-slate-400"
      >
        My Card
      </h1>
      <p
        class="first-line:text-cyan-500 first-letter:text-5xl first-letter:float-left first-letter:mr-1 group-hover:text-white selection:bg-amber-300 selection:text-black dark:group-hover:text-slate-400"
      >
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ducimus
        deleniti iste iure architecto tempore amet accusamus sed officiis ipsam
        nihil officia, accusantium velit aliquid recusandae, animi dolore
        molestias excepturi?
      </p>
    </div>
    <hr class="my-10" />
    <div
      class="p-5 max-w-lg bg-slate-100 rounded-2xl shadow-md border-slate-200 mx-auto dark:bg-slate-600"
    >
      <form action="">
        <label for="email">
          <span
            class="block font-semibold mb-1 after:content-['*'] after:text-pink-700 after:ml-0.5"
            >Email</span
          >
          <input
            type="email"
            id="email"
            placeholder="Masukkan email anda..."
            class="px-3 py-2 w-full rounded border-slate-500 shadow text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-700 invalid:text-pink-700 invalid:focus:ring-pink-700 peer"
          />
          <p class="text-sm m-1 text-pink-700 invisible peer-invalid:visible">
            Email tidak valid
          </p>
        </label>
        <label for="username">
          <span
            class="block font-semibold mb-1 after:content-['*'] after:text-pink-700 after:ml-0.5"
            >Username</span
          >
          <input
            type="text"
            id="username"
            placeholder="Masukkan username anda..."
            class="px-3 py-2 w-full rounded border-slate-500 shadow text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-700 invalid:text-pink-700 invalid:focus:ring-pink-700 peer"
          />
          <p class="text-sm m-1 text-pink-700 invisible peer-invalid:visible">
            Username tidak valid
          </p>
        </label>
        <label for="password">
          <span
            class="block font-semibold mb-1 after:content-['*'] after:text-pink-700 after:ml-0.5"
            >Password</span
          >
          <input
            type="password"
            id="password"
            placeholder="Masukkan password anda..."
            class="px-3 py-2 w-full rounded border-slate-500 shadow text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-700 invalid:text-pink-700 invalid:focus:ring-pink-700 peer"
          />
          <p class="text-sm m-1 text-pink-700 invisible peer-invalid:visible">
            Password tidak valid
          </p>
        </label>
      </form>
    </div>
    <hr class="my-10" />
    <div>
      <button
        class="bg-sky-400 py-2 px-5 rounded-full block mx-auto text-white font-semibold hover:bg-sky-600 hover:cursor-pointer active:bg-sky-900 focus:outline-2 focus:outline-stone-950 dark:bg-slate-700 dark:hover:bg-slate-800 dark:active:bg-slate-900"
      >
        Slebew
      </button>
    </div>
    <hr class="my-10" />
    <div class="w-40 h-40 bg-sky-500 mx-auto rounded-md shadow-md my-20 cursor-pointer hover:scale-125 hover:rotate-45 hover:translate-x-16 hover:bg-pink-500 transition"></div>
    <!-- agar lebih baik jika cursor mungkin keluar dari box, kita bisa tambahkan group -->
    <div class="w-40 h-40 mx-auto my-20 group">
      <div class="w-full h-full bg-sky-500 rounded-md shadow-md group-hover:cursor-pointer group-hover:scale-125 group-hover:rotate-45 group-hover:bg-pink-500 origin-bottom-right transition"></div>
    </div>
    <!-- ANIMATION -->
     <div class="w-40 h-40 bg-sky-500 mx-auto rounded-md shadow-md my-20 cursor-pointer animate-bounce"></div>
    <hr class="my-10">
    <div class="container mx-auto">
      <div class="border rounded-lg shadow-md p-10 bg-slate-200">
        <img src="public/assets/person.png" alt="person" class="w-[100px] float-left shadow-md shadow-slate-400 mr-3 bg-amber-400">
        <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat at minima sapiente voluptatibus aliquam! Quo asperiores sint nam mollitia tempore? Incidunt neque ea, officia officiis veniam reiciendis aperiam recusandae consequatur accusamus minus maiores tenetur ullam nam. Quisquam minus ipsa in et quidem quaerat sit corporis non delectus dolorem facilis assumenda, beatae asperiores totam vel repellendus eveniet est at! Excepturi harum accusantium, maxime expedita voluptatum, laborum tenetur, aperiam deleniti molestiae facilis atque rem? Aliquam optio soluta architecto voluptatum temporibus aut odit, asperiores enim tempora, quibusdam ab dicta, reiciendis facere voluptatibus? Dignissimos, natus. Optio, voluptatum cum tenetur quis eos maxime nulla unde.</p>
      </div>
    </div>
    <hr class="my-10">
    <div class="container mx-auto columns-xs gap-3 p-10 bg-slate-200 border border-slate-300 rounded-2xl shadow-md">
      <img src="public/assets/random.jpg" alt="random" class="mb-3 rounded-md shadow-md aspect-square">
      <img src="public/assets/random.jpg" alt="random" class="mb-3 rounded-md shadow-md aspect-video">
      <img src="public/assets/random.jpg" alt="random" class="mb-3 rounded-md shadow-md aspect-square">
      <img src="public/assets/random.jpg" alt="random" class="mb-3 rounded-md shadow-md h-48 w-96 object-cover object-bottom-left">
      <img src="public/assets/random.jpg" alt="random" class="mb-3 rounded-md shadow-md">
      <img src="public/assets/random.jpg" alt="random" class="mb-3 rounded-md shadow-md aspect-video">
      <img src="public/assets/random.jpg" alt="random" class="mb-3 rounded-md shadow-md">
      <img src="public/assets/random.jpg" alt="random" class="mb-3 rounded-md shadow-md">
      <img src="public/assets/random.jpg" alt="random" class="mb-3 rounded-md shadow-md">
      <img src="public/assets/random.jpg" alt="random" class="mb-3 rounded-md shadow-md aspect-video">
      <img src="public/assets/random.jpg" alt="random" class="mb-3 rounded-md shadow-md">
      <img src="public/assets/random.jpg" alt="random" class="mb-3 rounded-md shadow-md">
      <img src="public/assets/random.jpg" alt="random" class="mb-3 rounded-md shadow-md aspect-video">
      <img src="public/assets/random.jpg" alt="random" class="mb-3 rounded-md shadow-md">
      <img src="public/assets/random.jpg" alt="random" class="mb-3 rounded-md shadow-md aspect-square">
    </div>
    <hr class="my-10">
    <div class="text-center">
      <h1 class="inline-block bg-gradient-to-r from-indigo-500 via-sky-500 to-pink-500 bg-clip-text text-transparent mx-auto font-black">JODI JONATAN</h1><br>
      <span class="box-decoration-clone bg-linear-to-r from-indigo-600 to-pink-500 px-2 text-white">
        Hello<br>World
      </span>
    </div>
    <div class="sticky top-0 text-center mt-5">
      <div class="w-40 h-40 bg-sky-500 mx-auto inline font-black">Hello, World!</div>
    </div>
    <hr class="my-10">
    <div class="relative size-32 border mx-auto border-slate-600">
      <div class="absolute inset-y-0 left-0 h-5 bg-sky-500"></div>
    </div>
    <hr class="my-10">
  </body>
</html>