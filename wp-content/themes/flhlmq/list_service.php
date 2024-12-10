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