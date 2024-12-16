//swiper hero images
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

//swiper her text
const swiper02 = new Swiper('.swiper02', {
  loop: true,
  spaceBetween: 100,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
});

//Page_liste_service_swiper
const swiper03 = new Swiper(".swiper03", {
  loop: true,
  spaceBetween: 0,
  slidesPerView: 1, // Show 1 card at a time
  centeredSlides: true,
  pagination: {
    el: ".swiper-pagination", // Connects the pagination with the swiper container
    type: "progressbar",
  },
});

//accordeon
// Selection des questions
const questions = document.querySelectorAll('.question');

// loop for each pour chacun
questions.forEach(question => {
  // prendre reponse
  const answer = question.nextElementSibling;

  // par defaut dermer
  answer.style.display = "none";

  // sur click
  question.addEventListener('click', () => {
    // sur click mettre actif
    question.classList.toggle('active');
    
    // Toggle visibilite
    if (answer.style.display === "block") {
      answer.style.display = "none";
    } else {
      answer.style.display = "block";
    }
  });
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

//liste nouvelles fetch filter that doesn't work
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


//Toggle more news in news hub
 const toggleButton = document.querySelector(".affichage_plus_nvs");
 toggleButton.addEventListener("click", myToggle);
 
 function myToggle() {
   var x = document.getElementById("liste_novs_deux");
 
   if (x.style.display === "none") {
     x.style.display = "flex";
   } else {
     x.style.display = "none";
   }
 }
 
//Banniere ecole btn fermer/close

let close = document.querySelector(".fermer");
let banner = document.querySelector(".banniere"); 

close.addEventListener("click", function () {
  banner.style.display = "none";
}); 




