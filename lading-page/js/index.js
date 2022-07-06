// <!-- ========== Menu ========== -->

const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const menu = $(".menu");
const menuToggle = $(".menu-toggle");

/** Preloader */

setTimeout(function () {
  $("#preloader").style.display = "none";
}, 1500);

/** Handle Show Menu */

menuToggle.addEventListener("click", () => {
  menu.classList.toggle("show-mobile");
});

/** Change bgr header */

function scrollHeader() {
  const nav = $(".header-navbar");
  this.scrollY > 500
    ? nav.classList.add("header-fixed")
    : nav.classList.remove("header-fixed");
}

window.addEventListener("scroll", scrollHeader);

/** Scroll Top */

function scrollUp() {
  const scrollUp = $(".scroll-up");
  this.scrollY >= 200
    ? scrollUp.classList.add("show-scroll")
    : scrollUp.classList.remove("show-scroll");
}

window.addEventListener("scroll", scrollUp);

/** Acion on scroll JS */
let elToShow = document.querySelectorAll(".action-on-scroll");

let isElInViewPort = (el) => {
  let rect = el.getBoundingClientRect();
  // some browsers support innerHeight, others support documentElement.clientHeight
  let viewHeight = window.innerHeight || document.documentElement.clientHeight;
  return (
    (rect.top <= 0 && rect.bottom >= 0) ||
    (rect.bottom >= viewHeight && rect.top <= viewHeight) ||
    (rect.top >= 0 && rect.bottom <= viewHeight)
  );
};

function loop() {
  elToShow.forEach((item) => {
    if (isElInViewPort(item)) {
      item.classList.add("start");
    } else {
      item.classList.remove("start");
    }
  });
}

window.onscroll = loop;

loop();
