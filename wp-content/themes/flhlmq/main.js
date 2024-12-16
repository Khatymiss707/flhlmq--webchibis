const swiper = new Swiper('.swiper', {
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },
});

const swiper02 = new Swiper('.swiper02', {
  loop: true,
  spaceBetween: 100,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
});

//Page_liste_service_swiper
var swiper03 = new Swiper(".swiper03", {
  loop: true,
  spaceBetween: 0,
  slidesPerView: 1, // Show 1 card at a time
  centeredSlides: true,
  pagination: {
    el: ".swiper-pagination",
    type: "progressbar",
  },
});

//burger toggle
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav_menu");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
})

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
  hamburger.classList.remove("active");
  navMenu.classList.remove("active");
}));

//accordeon

let $title = $('.question');
let content   = '.answer';
$title.click(function () {
  $(this).next(content).slideToggle();
  $(this).parent().siblings().children().next().slideUp();
  return false;
});





//gsap background parrallax

const logo = document.querySelector(".logo_lettre");
document.addEventListener("DOMContentLoaded", () => {
  // gsap code here!
  gsap.from(logo, {
    repeat: -1,
    yoyo: true,
    y: '0.2%',
  });

 });

 //Banniere ecole btn fermer/close

 let close = document.querySelector(".fermer");
 let banner = document.querySelector(".banniere"); 

close.addEventListener("click", function () {
  banner.style.display = "none";
}); 
 







