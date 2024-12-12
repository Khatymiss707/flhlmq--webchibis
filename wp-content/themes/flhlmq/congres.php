<?php 
/**
 * 	Template Name: services_congres
 * 	Post Type : service, page
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

<div class="service_comite">
    <img class="service_titre_comite" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

    <p class="contexte_service_comite">
        <?php the_content(); ?>

        <a class="document_association" href="<?php the_field('link_url_1'); ?>">
            <?php the_field('link_title_1'); ?>
        </a>

        </br></br>

        <a class="document_agir" href="<?php the_field('link_url_2'); ?>">
            <?php the_field('link_title_2'); ?>
        </a>

        </br></br>
    </p>

    <div class="page_comite_suivant">
        <a href="<?php the_field('title'); ?>">
            <!--<a href="#service_infolettre">-->
            <h2 class="suivant_titre">
                <?php the_field('next_news_description_title'); ?>
            </h2>
        </a>
        <h3 class="service_suivant_infolettre_titre">
            <?php the_field('next_news_description_second_title'); ?>
        </h3>
        <h4 class="service_suivant_infolettre_para">
            <?php the_field('next_news_description_next_news'); ?>
        </h4>

    </div>

</div>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>