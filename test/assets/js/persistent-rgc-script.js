// Persistent Red/Green Theme Color
(function () {
  // Theme switch
  var themeSwitch = document.getElementById("themeSwitch");
  if (themeSwitch) {
    initTheme(); // if user has already selected a specific theme -> apply it
    themeSwitch.addEventListener("change", function (event) {
      resetTheme(); // update color theme
    });

    function initTheme() {
      var darkThemeSelected =
        localStorage.getItem("themeSwitch") !== null &&
        localStorage.getItem("themeSwitch") === "green";
      // update checkbox
      themeSwitch.checked = darkThemeSelected;
      // update body data-theme attribute
      darkThemeSelected
        ? document.body.setAttribute("data-theme", "green")
        : document.body.removeAttribute("data-theme");
    }

    function resetTheme() {
      if (themeSwitch.checked) {
        // dark theme has been selected
        document.body.setAttribute("data-theme", "green");
        localStorage.setItem("themeSwitch", "green");
      } else {
        document.body.removeAttribute("data-theme");
        localStorage.removeItem("themeSwitch");
      }
    }
  }
})();
