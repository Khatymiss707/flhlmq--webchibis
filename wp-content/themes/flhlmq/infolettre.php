<?php 
/**
 * 	Template Name: services_infolettre
 * 	Template Post Type : service
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

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