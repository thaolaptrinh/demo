/** Preloader */
const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

setTimeout(function () {
  $("#preloader").style.display = "none";
}, 500);
