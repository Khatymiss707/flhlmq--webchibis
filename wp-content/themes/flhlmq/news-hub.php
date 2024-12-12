<?php 
/**
 * Template Name: news-hub
 * Template Post Type: page
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>	

<div class="pageblanche">

	<section class="hero">
        <div class="swiper">
          <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="<?php the_field('swiper_image_01');?>" alt="ciel01" />
              </div>
              <div class="swiper-slide">
                <img src="<?php the_field('swiper_image_02');?>" alt="ciel02" />
              </div>
              <div class="swiper-slide">
                <img src="<?php the_field('swiper_image_03');?>" alt="ciel03" />
              </div>
          </div>
          <div class="swiper-pagination"></div>
          <div class="vecteur_batiment">
            <img class="building01" src="<?php the_field('swiper_image_01');?>" alt="" />
            <img class="building02" src="<?php the_field('swiper_image_02');?>" alt="" />
            <img class="building03" src="<?php the_field('swiper_image_03');?>" alt="" />
          </div>
        </div>
        <div class="case_transparente">
          <h1 class="titre"><?php the_title();?></h1>
          <div class="swiper02">
            <div class="swiper-wrapper">

            <?php
              $arguments = array( // 👈 Tableau d'arguments
                'post_type' => 'new',
                'posts_per_page' => 3, 
                'orderby' => 'date',
              );
              $projects = new WP_Query($arguments); // 👈 Utilisation
              while ($projects->have_posts()) : $projects->the_post(); 
            ?>
            
              <div class="swiper-slide">
                <h3 class="article_hero"><?php the_field('descriptif_one_sentence')?></h3>
              </div>

            <?php
              endwhile; 
              wp_reset_postdata(); 
            ?>
            </div>
          </div>
        </div>
    </section>

			<img class="titre_liste_nouvelles" src="<?php the_post_thumbnail_url(); ?>" alt="Liste de nouvelles">

			<div class="dropdown">
				<div class="nouvelle_menu">Filtre</div>
				<div class="dropdown-child">
					<a href="#" id="recent">Plus récents</a>
					<a href="#" id="vieux">Plus ancients</a>
				</div>
			</div>

			<div class="listes_nouvelles_caroussel">
			</div>

			<div class="contenant_btn">
				<button id="more" class="affichage_plus_nvs">
					Voir plus de nouvelles
				</button>
			</div>

	</div>
<div>

<script>
		let recent = document.getElementById("recent"); 
		let older = document.getElementById("vieux"); 

		const toggleButton = document.querySelector(".affichage_plus_nvs");
		toggleButton.addEventListener("click", myToggle);

		function myToggle() {
			const cards = document.querySelectorAll(".card:nth-child(3), .card:nth-child(4)");

			cards.forEach(element => {
				if (window.getComputedStyle(element).display === "none") {
					element.style.display = "flex";
				} else {
					element.style.display = "none";
				}
			});
		}

		fetch("http://localhost:81/2130100/flhlmq--webchibis/wp-json/wp/v2/new?&_embed")
		.then(response => response.json())
		.then(news => {
			console.log(news);
			let maxNews = 3; 
			let count = 0; 

				news.forEach(element => {
					if (count <= maxNews) {
				let titre = element.title.rendered
				let description = element.content.rendered
				let color = element.acf.categorie_color
				let link = element.acf.link_next_news
				let img = element._embedded["wp:featuredmedia"][0].source_url
				let btn = element.acf.btn_label

				let newsHTML =
				`
				<div class="card">
					<img src="${img}" class="card-image">
					<div class="card-content">
						<h2 class="card-title">${titre}</h2>
						<p class="card-description">${description}</p>
						<button class="card-button">
						<a href="${link}">${btn}</a>
						</button>
					</div>
				</div>
				`; 
				
				let newscontenu = document.querySelector(".listes_nouvelles_caroussel"); 
				newscontenu.innerHTML += newsHTML; 
				count++;
			}; 
			});


		});
</script>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>