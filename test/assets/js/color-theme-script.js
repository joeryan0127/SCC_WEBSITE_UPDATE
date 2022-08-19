function rotate() {
  var i = document.getElementById("color-theme-icon");
  i.classList.toggle("norotate");
}

// Persistent Toggle Button
var tSwitcher = document.getElementById("theme-switcher");
let element = document.body;

let onpageLoad = localStorage.getItem("theme") || "";
if (onpageLoad != null && onpageLoad == "dark-theme") {
  tSwitcher.checked = true;
}
element.classList.add(onpageLoad);

function themeToggle() {
  if (tSwitcher.checked) {
    localStorage.setItem("theme", "dark-theme");
    element.classList.add("dark-theme");
  } else {
    localStorage.setItem("theme", "");
    element.classList.remove("dark-theme");
  }
}

//Switch Dark Theme
// check for saved 'darkMode' in localStorage
let darkMode = localStorage.getItem("darkMode");

const darkModeToggle = document.querySelector("#dark-mode-toggle");

const enableDarkMode = () => {
  // 1. Add the class to the body
  document.body.classList.add("dark-theme");
  // 2. Update darkMode in localStorage
  localStorage.setItem("darkMode", "enabled");
};

const disableDarkMode = () => {
  // 1. Remove the class from the body
  document.body.classList.remove("dark-theme");
  // 2. Update darkMode in localStorage
  localStorage.setItem("darkMode", null);
};

// If the user already visited and enabled darkMode
// start things off with it on
if (darkMode === "enabled") {
  enableDarkMode();
}

// When someone clicks the button
darkModeToggle.addEventListener("click", () => {
  // get their darkMode setting
  darkMode = localStorage.getItem("darkMode");

  // if it not current enabled, enable it
  if (darkMode !== "enabled") {
    enableDarkMode();
    // if it has been enabled, turn it off
  } else {
    disableDarkMode();
  }
});

//Switch Color-Theme
window.addEventListener("load", (event) => {
  let currentColor = localStorage.getItem("bgcolor")
    ? localStorage.getItem("bgcolor")
    : "#000000";
  document.querySelector(".colorPicked").style.backgroundColor = currentColor;
  document.querySelector("#colorit").value = currentColor;
});

function setColor() {
  //localStorage.setItem('background', $('#colorit').val());
  let color = document.querySelector("#colorit").value;
  document.querySelector(".colorPicked").style.backgroundColor = color;
  localStorage.setItem("bgcolor", color);
}
