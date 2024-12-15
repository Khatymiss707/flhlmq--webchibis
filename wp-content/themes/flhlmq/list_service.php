<?php 
/**
 * 	Template Name: list services
 * 	Template Post Type : service-list
 *  Post Type : service-list
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
                    <!-- scf pour image dans wp -->
                    <img src="<?php the_field('swiper_image_01');?>" alt="ciel01" />
                </div>
                <div class="swiper-slide">
                    <!-- scf pour image dans wp -->
                    <img src="<?php the_field('swiper_image_02');?>" alt="ciel02" />
                </div>
                <div class="swiper-slide">
                    <!-- scf pour image dans wp -->
                    <img src="<?php the_field('swiper_image_03');?>" alt="ciel03" />
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="case_transparente">
            <!-- scf pour text dans wp -->
            <h1 class="titre">
                <?php the_field("description_courte_titre")?>
            </h1>
            <div class="swiper02">
                <div class="swiper-wrapper">

                 <!--WP QUERY  POUR DESCRIPTION COURTE DANS LE SWIPPER-->
              <?php
                $arguments = array( // 👈 Tableau d'arguments
                  'post_type' => 'service',
                  'posts_per_page' => 4, 
                );
                $projects = new WP_Query($arguments); // 👈 Utilisation
                while ($projects->have_posts()) : $projects->the_post(); 
              ?>
                <div class="swiper-slide">
                   <h3 class="article_hero">
                      <?php the_field("description_courte")?>"
                   </h3>
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

        <!-- url pour image mise en avant -->
        <img class="titre_services" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

        <div class="services_description">
            <!-- scf pour image dans wp -->
            <img class="liste_service_titre_description" src="<?php the_field('services_description_title_image'); ?>">
            <p class="contenu">
                <!-- scf pour texte dans wp -->
                <?php the_field('services_description_full_services_description'); ?>
            </p>
        </div>

        <div class="listes_services_caroussel">
            <!-- scf pour image dans wp -->
            <img class="titre_liste_services" src="<?php the_field('title_services'); ?>" alt="">

            <div class="swiper03">
                <div class="swiper-wrapper">
                    <div class="swiper-slide card">
                        <?php
                          $arguments = array( // 👈 Tableau d'arguments
                            'post_type' => 'service',
                            'posts_per_page' => 4, 
                          );
                          $projects = new WP_Query($arguments); // 👈 Utilisation
                          while ($projects->have_posts()) : $projects->the_post(); 
                        ?>
<!--
                        <div class="prochaine_nouvelle">
                          <a href="<?php the_field('link_next_services');?>">
                            <h2>
                              <?php the_field('service-list-title'); ?>
                            </h2>
                          </a>
                          <p><?php the_title(); ?></p>
                        </div>
-->
                        <img src="<?php the_field('service-image');?>" alt="Card 1" class="card-image">
                        <div class="card-content">
                            <!-- scf pour texte dans wp -->
                            <a href="<?php the_field('service_url');?>">
                            <h2>
                              <?php the_field('service_title'); ?>
                            </h2>
                          </a>
                            <p class="card-description">
                                <!-- scf pour texte dans wp -->
                                <?php the_field('description_courte'); ?>
                            </p>
                            <a href="<?php the_field('present-services-label'); ?>">
                                <button class="card-button">
                                    <!-- scf pour texte dans wp -->
                                    <?php the_field('present-services-label'); ?>
                                </button>
                            </a>
                            
                        </div>

                        <?php
                          endwhile; 
                          wp_reset_postdata(); 
                        ?>
                </div>
            </div>

    </section>

</div>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>