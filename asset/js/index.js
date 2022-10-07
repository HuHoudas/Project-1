var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

/* Set the width of the side navigation to 250px */
function openNav() {
  sidenav.classList.add("active");
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  sidenav.classList.remove("active");
}

const message =
"Merci pour le schtroumpf intérêt que vous me portez. Je vous donne une schtroumpf reponse dans les plus breff delais.";

document.getElementById("contactForm");
addEventListener("submit", function (event) {
  event.preventDefault();
  alert(message);
});
