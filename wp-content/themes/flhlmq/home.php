<?php 
/**
 * Template Name: index
 * Template Post Type: page, new
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages Ã  afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

 <!--LOGO IN REPEAT DANS L'ARRIERE PLAN-->
  <img class="logo_lettre" src="<?php the_field('background_gsap'); ?>" alt="logo">
  
  <!--DIV GLOBAL-->
  <div class="pageblanche">

      <!--SECTION HERO AKA 2 SWIPERS-->
      <section class="hero">
        <div class="swiper">
          <!--SWIPER CIEL-->
          <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="<?php the_field('hero_swiper_image_01');?>" alt="ciel01" />
              </div>
              <div class="swiper-slide">
                <img src="<?php the_field('hero_swiper_image_02');?>" alt="ciel02" />
              </div>
              <div class="swiper-slide">
                <img src="<?php the_field('hero_swiper_image_03');?>" alt="ciel03" />
              </div>
          </div>
          <div class="swiper-pagination"></div>
          <!--BATIMENTS VECTEURS-->
          <div class="vecteur_batiment">
            <img class="building01" src="<?php the_field('hero_building_01');?>" alt="" />
            <img class="building02" src="<?php the_field('hero_building_02');?>" alt="" />
            <img class="building03" src="<?php the_field('hero_building_03');?>" alt="" />
          </div>
        </div>
        <!--SWIPER 2 POUR TEXTES DES NOUVELLES-->
        <div class="case_transparente">
          <h1 class="titre"><?php the_field('titre_site');?></h1>
          <div class="swiper02">
            <div class="swiper-wrapper">

            <!--WP QUERY 3 NOUVELLES POUR 3 SWIPER SLIDES POUR DESCRIPTION COURTE-->
            <?php
              $arguments = array( // ðŸ‘ˆ Tableau d'arguments
                'post_type' => 'new',
                'posts_per_page' => 3, 
                'orderby' => 'date',
              );
              $projects = new WP_Query($arguments); // ðŸ‘ˆ Utilisation
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
    
       <!--SECTION DONATION/MEMBRE AVEC BOUTON MENE AU JOINDRE-->
      <section class="donation">
        <img class="donation_img" src="<?php the_field('join_section_image_organisation'); ?>" alt="">
        <h2 class="titre_joindre">
          <img class="joindre" src="<?php the_field('join_section_title'); ?>" alt="JOINDRE NOTRE ORGANISATION">
        </h2>
        <div class="bloc_information">
          <h3 class="descriptif_equipe"><?php the_field('join_section_description'); ?></h3>
          <div class="btn_donation">
            <a href="<?php the_field('join_section_btn_link_join'); ?>">
              <button class="membre"><?php the_field('join_section_btn_btn_title'); ?></button>
            </a>
          </div>
        </div>
      </section>
      
      <!--SECTION DESCRIPTIF DE CHAQUE SERVICE-->
      <section class="services">
        <img class="titre_services" src="<?php the_field('services_section_title'); ?>" alt="">

              <!--WP QUERY 4 SERVICES-->
              <?php
                $arguments = array( // 👈 Tableau d'arguments
                  'post_type' => 'service',
                  'posts_per_page' => 4, 
                );
                $projects = new WP_Query($arguments); // 👈 Utilisation
                while ($projects->have_posts()) : $projects->the_post(); 
              ?>
                <div class="<?php the_field('service_class01'); ?>">
                  <div class="<?php the_field('service_class02'); ?>">
                    <h3 class="titre"><?php the_field('service_number'); ?> - <?php the_title();?></h3>
                    <p class="info"><?php the_field('description_courte'); ?></p>
                  </div>
                </div>

              <?php
                endwhile; 
                wp_reset_postdata(); 
              ?>
      </section>

      <!--SECTIONS 3 NOUVELLES -->
      <section class="actualites" style="background-image: url('<?php the_field('actuality_section_background_house'); ?>')">
        <div class="empty"></div>
        <img class="titre_actualites" src="<?php the_field('actuality_section_title'); ?>" alt="ACTUALITÃ‰S">
        
        <!--3 NOUVELLES EN WPQUERY-->
        <?php
          $arguments = array( // ðŸ‘ˆ Tableau d'arguments
          'post_type' => 'new',
          'posts_per_page' => 3, 
          'orderby' => 'date',
          );
          $projects = new WP_Query($arguments); // ðŸ‘ˆ Utilisation
          while ($projects->have_posts()) : $projects->the_post(); 
        ?>
              
          <div class="card01">
            <img src="<?php the_post_thumbnail_url();?>" alt="">
            <h1 class="titre_solo_actualite"><?php the_title()?></h1>
            <p class="descriptif_actualite"><?php the_field('descriptif_one_sentence')?></p>
          </div>

        <?php
          endwhile; 
          wp_reset_postdata(); 
        ?>
      </section>
      
       <!--TEMOIGNAGES-->
      <section class="temoignages">
        <img class="titre" src="<?php the_field('testimony_section_title_desktop'); ?>" alt="title">
        <div class="entete">
          <h1>TÃ‰MOIGNAGES</h1>
          <img class="conteneur_mobile_icones" src="<?php the_field('testimony_section_title_mobile'); ?>" alt="icones">
        </div>
        <img class="desktop_icones" src="<?php the_field('testimony_section_icon_desktop'); ?>" alt="icones">
        <div class="contenant_temoignages">
          <div class="utilisateur">
            <h3><?php the_field('testimony_section_user_title'); ?></h3>
            <p class="description"><?php the_field('testimony_section_user_review'); ?></p>
          </div>
          <div class="utilisateur">
            <h3><?php the_field('testimony_section_user01_title'); ?></h3>
            <p class="description"><?php the_field('testimony_section_user01_review'); ?></p>
          </div>
          <div class="utilisateur">
            <h3><?php the_field('testimony_section_user02_title'); ?></h3>
            <p class="description"><?php the_field('testimony_section_user02_review'); ?></p>
          </div>
        </div>
      </section>
      
      <!--ACCORDEON AVEC QUESTIONS POUR LES MEMBRES POTENTIELS-->
      <section class="infolettre">
        <img class="title" src="<?php the_field('newsletter_section_title'); ?>" alt="title">
        <div class="boite_question">
          <div class="item">
            <h2 class="question"><?php the_field('newsletter_section_accordeon_question'); ?></h2>
            <p class="answer"><?php the_field('newsletter_section_accordeon_answer'); ?></p>
          </div>
          <div class="item">
            <h2 class="question"><?php the_field('newsletter_section_accordeon02_question'); ?></h2>
            <p class="answer"><?php the_field('newsletter_section_accordeon02_answer'); ?></p>
          </div>
          <div class="item">
            <h2 class="question"><?php the_field('newsletter_section_accordeon03_question'); ?></h2>
            <p class="answer"><?php the_field('newsletter_section_accordeon03_answer'); ?></p>
          </div>
        </div>

        <img class="join_titre" src="<?php the_field('newsletter_section_title_join'); ?>"
          alt="joindre notre infolettre">
        <form>
          <input type="email" id="email" class="input" placeholder="exemple707@gmail.com">
        </form>
        <img class="souris_icone" src="<?php the_field('newsletter_section_souris'); ?>" alt="souris">
      </section>

  </div>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a Ã©tÃ© trouvÃ©e
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>