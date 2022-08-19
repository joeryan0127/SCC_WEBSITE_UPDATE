$(document).ready(function () {
  $("body").on("click", "#portfolioModal1", function (e) {
    e.preventDefault();
    localStorage.setItem("openModal", "#portfolioModal1");
    let href = e.target.href;
    window.location.replace(href);
  });
  $("body").on("click", "#portfolioModal2", function (e) {
    e.preventDefault();
    localStorage.setItem("openModal", "#portfolioModal2");
    let href = e.target.href;
    window.location.replace(href);
  });
  $("body").on("click", "#portfolioModal3", function (e) {
    e.preventDefault();
    localStorage.setItem("openModal", "#portfolioModal3");
    let href = e.target.href;
    window.location.replace(href);
  });
  $("body").on("click", "#portfolioModal4", function (e) {
    e.preventDefault();
    localStorage.setItem("openModal", "#portfolioModal4");
    let href = e.target.href;
    window.location.replace(href);
  });
  $("body").on("click", "#portfolioModal5", function (e) {
    e.preventDefault();
    localStorage.setItem("openModal", "#portfolioModal5");
    let href = e.target.href;
    window.location.replace(href);
  });
  $("body").on("click", "#portfolioModal6", function (e) {
    e.preventDefault();
    localStorage.setItem("openModal", "#portfolioModal6");
    let href = e.target.href;
    window.location.replace(href);
  });
});
