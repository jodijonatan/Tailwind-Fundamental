document.title = "Learn TailwindCSS";

const box = document.getElementById("box");
const judul = document.createElement("h1");

box.style.background = "linear-gradient(to right, #03A791, #81E7AF)";
box.style.display = "flex";
box.style.justifyContent = "center";
box.style.alignItems = "center";
box.style.fontSize = "35px";

judul.innerHTML = "Hello, World!";
judul.style.fontWeight = "bold";

box.appendChild(judul);
