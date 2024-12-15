<?php 
/**
 * Template Name: Services
 * Template Post Type: post, page, service
 */

 get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<div class="pageblanche">

  <section class="hero">
        <?php
             $arguments = array( // 👈 Tableau d'arguments
             'post_type' => 'service',
            'posts_per_page' => 1
              );
             $projects = new WP_Query($arguments); // 👈 Utilisation
             while ($projects->have_posts()) : $projects->the_post(); 
         ?>

        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php the_field("swiper_image_01")?>" alt="ciel01" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php the_field("swiper_image_02")?>" alt="ciel02" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php the_field("swiper_image_03")?>" alt="ciel03" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php the_field("swiper_image_04")?>" alt="ciel03" />
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        
         <?php
                    endwhile; 
                    wp_reset_postdata(); 
         ?>
                
                
        <div class="case_transparente">
            
            
         
            <h1 class="titre">
                <?php the_field("next_service_title")?>"
            </h1>
            
            <div class="swiper02">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <h3 class="article_hero">
                            <?php the_field("next_service_description")?>"
                        </h3>
                    </div>
                    <div class="swiper-slide">
                        <h3 class="article_hero">
                            <?php the_field("next_service_description")?>"
                        </h3>
                    </div>
                    <div class="swiper-slide">
                        <?php the_field("next_service_description")?>"
                        </h3>
                    </div>
                    <div class="swiper-slide">
                        <?php the_field("next_service_description")?>"
                        </h3>
                    </div>
                </div>
            </div>
            
        </div>

    </section>

  <div class="service_comite">
              
      <!-- url pour image mise en avant -->
      <img class="service_titre_comite" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

      <p class="contexte_service_comite">
          <?php the_content(); ?>

          <a class="document_association" href="<?php the_field('link_url_1'); ?>">
              <!-- url pour image mise en avant -->
              <?php the_field('link_title_1'); ?>
          </a>

          </br></br>

          <a class="document_agir" href="<?php the_field('link_url_2'); ?>">
              <!-- url pour image mise en avant -->
              <?php the_field('link_title_2'); ?>
          </a>

          </br></br>
      </p>

      <div class="page_comite_suivant">

          <a href="<?php the_field('next_service_url'); ?>">
              <!--<a href="#service_infolettre">-->
              <h2 class="suivant_titre">
                  <!-- scf pour texte dans wp -->
                  <?php the_field('next_service_title'); ?>
              </h2>
          </a>
          
          <h3 class="service_suivant_infolettre_titre">
              <!-- scf pour texte dans wp -->
              <?php the_field('next_service_sous-titre'); ?>
          </h3>
          <p class="service_suivant_infolettre_para" style="color: white;">
              <!-- scf pour texte dans wp -->
              <?php the_field('next_service_description'); ?>
          </p>
          

          </br></br>
      </div>

  </div>
</div>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>