<?php 
/**
 * Template Name: index
 * Template Post Type: page, new
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<img class="logo_lettre" src="<?php the_field('actuality_section_background_house'); ?>" alt="logo">
  
  <div class="pageblanche">

      <section class="hero">
        <div class="swiper">
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
          <div class="vecteur_batiment">
            <img class="building01" src="<?php the_field('hero_swiper_image_01');?>" alt="" />
            <img class="building02" src="<?php the_field('hero_swiper_image_02');?>" alt="" />
            <img class="building03" src="<?php the_field('hero_swiper_image_03');?>" alt="" />
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

    <section class="donation">
      <img class="donation_img" src="<?php the_field('join_section_image_organisation'); ?>" alt="">
      <h2 class="titre_joindre">
        <img class="joindre" src="<?php the_field('join_section_title'); ?>" alt="JOINDRE NOTRE ORGANISATION">
      </h2>
      <div class="bloc_information">
        <h3 class="descriptif_equipe"><?php the_field('join_section_description'); ?></h3>
        <div class="btn_donation">
          <button class="membre"><?php the_field('join_section_btn_btn_title'); ?></button>
        </div>
      </div>
    </section>

    <section class="services">
      <img class="titre_services" src="<?php the_field('services_section_title'); ?>" alt="">
      <div class="c_contenu">
        <div class="s_congres">
          <h3 class="titre">Service 01 - <?php the_field('services_section_service_01_title'); ?></h3>
          <p class="info"><?php the_field('services_section_service_01_description'); ?></p>
        </div>
      </div>
      <div class="i_contenu">
        <div class="s_infolettre">
        <h3 class="titre">Service 02 - <?php the_field('services_section_service_02_title'); ?></h3>
        <p class="info"><?php the_field('services_section_service_02_description'); ?></p>
      </div>
      <div class="e_contenu">
        <div class="s_environnement">
        <h3 class="titre">Service 03 - <?php the_field('services_section_service_03_title'); ?></h3>
        <p class="info"><?php the_field('services_section_service_03_description'); ?></p>
      </div>
      <div class="s_comite">
        <h3 class="titre">Service 04 - <?php the_field('services_section_service_04_title'); ?></h3>
        <p class="info"><?php the_field('services_section_service_04_description'); ?></p>
      </div>
    </section>

    <section class="actualites" style="background-image: url('<?php the_field('actuality_section_background_house'); ?>')">
      <div class="empty"></div>
      <img class="titre_actualites" src="<?php the_field('actuality_section_title'); ?>" alt="ACTUALITÉS">

      <?php
        $arguments = array( // 👈 Tableau d'arguments
        'post_type' => 'new',
        'posts_per_page' => 3, 
        'orderby' => 'date',
        );
        $projects = new WP_Query($arguments); // 👈 Utilisation
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

    <section class="temoignages">
      <img class="titre" src="<?php the_field('testimony_section_title_desktop'); ?>" alt="title">
      <div class="entete">
        <h1>TÉMOIGNAGES</h1>
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

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>