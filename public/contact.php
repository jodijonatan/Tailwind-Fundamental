<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="/src/css/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-linear-to-r from-[#9ACBD0] to-[#48A6A7]">
<nav class="flex justify-between items-center p-4 bg-[#89A8B2] text-stone-800 fixed top-0 w-screen">
    <div class="font-bold mx-15 bg-gradient-to-r from-[#077A7D] to-[#03A791] bg-clip-text text-transparent">JO DEV</div>cle
    <ul class="flex space-x-6 mx-15">
      <li><a href="/public/index.php" class="hover:underline">Home</a></li>
      <li><a href="/public/about.php" class="hover:underline">About</a></li>
      <li><a href="/public/contact.php" class="hover:underline">Contact</a></li>
    </ul>
  </nav>
  <header>
    <h1 class="flex text-2xl font-bold justify-center mt-30">Contact Me</h1>
    <div class="flex justify-center">
      <div class="flex w-[700px] h-[100px] items-center justify-center m-5">
      <p class="text-center">
        Saya sangat senang untuk berkolaborasi dengan sesama programmer, atau hanya sekedar ngobrol santai dengan semua orang. Saya akan sangat senang berbagi pengalaman dengan anda, silahkan isi form di bawah ini untuk kolaborasi atau hanya sekedar ngobrol santai
      </p>
    </div>
    </div>
    <div class="flex justify-center items-center">
      <form action="https://formspree.io/f/xrbpvbqo" method="POST" class="border-[2px] bg-blue-300 p-8 shadow-lg shadow-cyan-200/50">
        <div class="bg-amber-50 p-2 rounded-2xl">
          <label class="font-bold" for="">Name: 
            <input class="outline-none" placeholder="Masukin nama kamu" type="text">
          </label>  
        </div>
        <div class="bg-amber-50 p-2 mt-3 rounded-2xl">
          <label class="font-bold" for="">Email: 
            <input class="outline-none" placeholder="Masukin email kamu" type="email" name="email">
          </label>
        </div>
        <div class="bg-amber-50 p-2 mt-3 rounded-2xl">
          <label class="font-bold" for="password">Password:
            <input type="password" id="password" class="outline-none" placeholder="Masukkan password kamu">
          </label>
        </div>
        <div class="pt-[10px]">
          <label for="" class="font-bold pl-2">Pesan: <br> 
            <textarea name="message" rows="6" cols="40" class="outline-none bg-amber-50 p-2 mt-1 rounded-2xl" placeholder="Masukin pesan kamu"></textarea>
          </label><br>
        </div>
        <div>
          <button type="submit" onclick="alert('Makasii, pesan kamu udah terkirim')" class="bg-[#48A6A7] py-2 px-3 rounded-[17px] mt-2 hover:bg-[#336D82] hover:cursor-pointer shadow-md">Kirim</button>
        </div>
      </form>
    </div>
  </header>
  <main class="h-screen">
    <div class="flex justify-center">
      <h1 class="mt-25 text-2xl font-medium">Selain itu, kamu juga bisa contact aku lewat beberapa media sosial ini</h1>
    </div>
    <div class="flex justify-center mt-8">
        <ul class="text-[20px] bg-blue-300 p-8 border-[2px] shadow-lg shadow-cyan-200/50 px-[200px]">
          <li><a href="https://instagram.com/cold.joo"><i class="fab fa-instagram mr-3"></i>Instagram</a></li>
          <li><a href="https://github.com/jodijonatan"><i class="fab fa-github mr-3"></i>Github</a></li>
        </ul>
      </div>
  </main>
</body>
</html>