<?php 
/**
 * 	Template Name: about
 * 	Template Post Type: page
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<section class="a_propos">
    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

    <div class="contenue">
        <h4 class="description">
            <?php the_content(); ?>
        </h4>
    </div>
</section>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>