<?php 
/**
 * 	Template Name: about
 *  Post Type : Page
 * 	Template Post Type: page
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
            <h1 class="titre"><?php the_title();?></h1>
            <div class="swiper02">
              <div class="swiper-wrapper">

              <!-- wp querry -->
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
                  <!-- scf pour text dans wp -->
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
    

  <section class="a_propos">
      <!-- url pour image mise en avant -->
      <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

      <div class="contenue">
          <h4 class="description">
              <!-- aller rechercher le texte écrit sur la page de wp -->
              <?php the_content(); ?>
          </h4>
      </div>
  </section>

</div>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>