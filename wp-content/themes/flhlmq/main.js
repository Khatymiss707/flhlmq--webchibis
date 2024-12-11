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

fetch("http://localhost:81/federation-des-locataires--web-chibis/wp-json/wp/v2/new/?_embed")
  .then(response => response.json())
  .then(news => {
    console.log(news); 
  });

//liste nouvelles fetch filter
let recent = document.getElementById("recent"); 
let older = document.getElementById("vieux"); 

recent.addEventListener("click", () => {
  fetch("http://localhost:81/federation-des-locataires--web-chibis/wp-json/wp/v2/new?orderby=date&order=asc")
  .then(response => response.json())
  .then(news => {
    console.log(news); 
  });
}); 

older.addEventListener("click", () => {
  fetch("http://localhost:81/federation-des-locataires--web-chibis/wp-json/wp/v2/new?orderby=date&order=desc")
  .then(response => response.json())
  .then(news => {
    console.log(news); 
  });
}); 


//accordeon

var $title = $('.title');
var content   = '.content';
$title.click(function () {
  $(this).next(content).slideToggle();
  $(this).parent().siblings().children().next().slideUp();
  return false;
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


//gsap background parrallax

const logo = document.querySelector(".logo_lettre");


document.addEventListener("DOMContentLoaded", (event) => {
  // gsap code here!
  gsap.from(logo, {
    repeat: -1,
    yoyo: true,
    y: '0.2%',
  });

 });





