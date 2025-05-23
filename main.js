document.title = "Learn TailwindCSS";

const box = document.getElementById("box");
const judul = document.createElement("h1");

box.style.background = "linear-gradient(to right, #03A791, #81E7AF)";
box.style.display = "flex";
box.style.justifyContent = "center";
box.style.alignItems = "center";
box.style.fontSize = "35px";
box.style.borderRadius = "40px";

judul.innerHTML = "Hello, World!";
judul.style.fontWeight = "bold";
judul.style.padding = "20px";

box.appendChild(judul);

function cihuy() {
  box.style.background = "linear-gradient(to right, #A62C2C, #E83F25)";
  box.style.transition = "transform 1s";
  box.style.transform = "scale(1.1) rotate(720deg)";
}

function lepasCihuy() {
  box.style.background = "linear-gradient(to right, #03A791, #81E7AF)";
  box.style.transform = "scale(1) rotate(0)";
}

box.addEventListener("mouseenter", cihuy);
box.addEventListener("mouseleave", lepasCihuy);
