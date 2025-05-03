let button = document.getElementById("menubutton-js");
let nav = document.getElementById("side-menu-js");

// Az egér belépésekor megjelenítjük a menüt
button.addEventListener("mouseenter", openMenu);

// Az egér elhagyásakor elrejtjük a menüt
nav.addEventListener("mouseleave", closeMenu);

// Az egér belépésekor biztosítjuk, hogy a menü ne tűnjön el
nav.addEventListener("mouseenter", () => {
  nav.classList.remove("invisible");
});

function openMenu() {
  nav.classList.remove("invisible"); // A menü láthatóvá válik
  button.classList.toggle("invisible");
}

function closeMenu() {
  nav.classList.add("invisible"); // A menü eltűnik
  button.classList.toggle("invisible");
}
