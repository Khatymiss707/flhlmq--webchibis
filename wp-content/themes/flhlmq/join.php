<?php 
/**
 * Template Name: join_page
 * Template Post Type: page, join
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<div class="pageblanche">

    <section class="joindre_page">
      <img class="titre" src="<?php the_post_thumbnail_url(); ?>" alt="nous joindre" />

      <div class="information">

        <div class="bande poste">
          <h3 class="titre"><?php the_field('poste_contacttitle'); ?></h3>
          <p class="info"><?php the_field('poste_contactoptions'); ?></p>
        </div>

        <div class="bande courriel">
            <h3 class="titre"><?php the_field('addresse_contact_title'); ?></h3>
            <p class="info"><?php the_field('addresse_contact_options'); ?></p>
        </div>
        <div class="bande copieur">

          <h3 class="titre"><?php the_field('telephone_contact_title'); ?></h3>
          <p class="info"><?php the_field('telephone_contact_options'); ?></p>

        </div>


      </div>

      <div class="formulaire">
        <img src="<?php the_field('title_contact'); ?>" alt="">
        <form>

          <label class="label_prenom" for="fname"><?php the_field('form_title_title_prenom'); ?></label>
          <input class="input_prenom" type="text" id="prenom" name="prenom"><br>

          <label class="label_nom" for="lname"><?php the_field('form_title_title_nom'); ?></label>
          <input class="input_nom" type="text" id="nom" name="nom"><br>

          <label class="label_adress" for="fname"><?php the_field('form_title_title_adresse'); ?></label>
          <input class="input_adress" type="email" name="mail" id="email" name="email"><br>

          <label class="label_mail" for="fname"><?php the_field('form_title_title_textarea'); ?></label>
          <textarea class="input_mail" id="message" name="message" rows="10" cols="50" placeholder="<?php the_field('form_title_ecrire_ici'); ?>"></textarea><br><br>

          <button class="joindre_btn" type="submit"><?php the_field('buttons_btn_label'); ?></button>


        </form>
      </div>
    </section>
  </div>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>