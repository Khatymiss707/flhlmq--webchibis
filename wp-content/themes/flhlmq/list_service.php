<?php 
/**
 * 	Template Name: list services
 * 	Template Post Type : page, article, service-list
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

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

    <section class="liste_service_page">
        <img class="titre_services" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

        <div class="services_description">
            <img class="liste_service_titre_description" src="<?php the_field('services_description_title_image'); ?>">
            <p class="contenu">
                <?php the_field('services_description_full_services_description'); ?>
            </p>
        </div>

        <div class="listes_services_caroussel">
            <img class="titre_liste_services" src="./medias/images/liste_service/titre_liste_services.svg" alt="">

            <div class="swiper03">
            <div class="swiper-wrapper">
                <div class="swiper-slide card">
                <img src="./medias/images/liste_service/caroussel/locataireCA.jpg" alt="Card 1" class="card-image">
                <div class="card-content">

                    <h2 class="card-title">Service 01 - Le Congrès</h2>
                    <p class="card-description">
                    “Échanger, voter les grandes orientations de la fédération et élire le conseil d'administration.”
                    </p>
                    <button class="card-button">En savoir plus</button>
                </div>
                </div>

                <div class="swiper-slide card">
                <img src="./medias/images/liste_service/caroussel/infolettre.jpeg" alt="Card 2" class="card-image">
                <div class="card-content">
                    <h2 class="card-title">Service 02 - L’Infolettre</h2>
                    <p class="card-description">
                    “Rester à jour en vous inscrivant à l'infolettre!”
                    </p>
                    <button class="card-button">En savoir plus</button>
                </div>
                </div>

                <div class="swiper-slide card">
                <img src="./medias/images/liste_service/caroussel/environnemnt_saint.png" alt="Card 3" class="card-image">
                <div class="card-content">
                    <h2 class="card-title">Service 03 - Environnement sain</h2>
                    <p class="card-description">
                    “Rejoignez-nous pour un environnement sain, solidaire et engagé pour la défense de vos droits de
                    locataire.”

                    </p>
                    <button class="card-button">En savoir plus</button>
                </div>
                </div>

                <div class="swiper-slide card">
                <img src="./medias/images/liste_service/caroussel/comité_consultatif.jpg" alt="Card 4" class="card-image">
                <div class="card-content">
                    <h2 class="card-title">Service 04 - Comité consultatif</h2>
                    <p class="card-description">
                    “Échanger, voter les grandes orientations de la fédération et élire le conseil d'administration.”
                    </p>
                    <button onclick="window.location.href='service_comite_consultatif.html'" class="card-button">En savoir
                    plus</button>
                </div>
                </div>
            </div>
            </div>
        </div>

    </section>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>