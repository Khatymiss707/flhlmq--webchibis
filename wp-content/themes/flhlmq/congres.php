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

            <section class="nav">
                <nav class="navbar">
                    <div class="hamburger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                    <ul class="nav_menu">

                        <li class="nav-item">
                          <a href="#" class="nav-link">équipe</a>
                        </li>
                        <li class="nav-item">
                          <a href="liste_service.html" class="nav-link">services</a>
                        </li>
                        <li class="nav-item">
                          <a href="liste_nouvelles.html" class="nav-link">nouvelles</a>
                        </li>
                        <li class="nav-item">
                          <a href="a_propos.html" class="nav-link">à propos</a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">faq</a>
                        </li>
                        <li class="nav-item">
                          <a href="joindre.html" class="nav-link">nous joindre</a>
                        </li>
            
                        <div class="right_side_nav">
            
                          <li class="nav-item autre">
                            <img class="loupe" src="./medias/images/page_accueil/icones/loupe.svg" alt="loupe">
                          </li>
            
                          <li class="nav-item  autre">
                            <select>
                              <option value="fr">FRA</option>
                              <option value="eng">ENG</option>
                            </select>
                          </li>
                        </div>
            
            
            
                      </ul>
                </nav>
            </section>

            <img class="image_nouvelle" src="./medias/images/page_nouvelle/nouvelle01.jpg" alt="">

            <div class="case_transparente nouvelle">
                <h1 class="titre nouvelle">Envoyez un courriel pour soutenir Alexis!</h1>
                <h2 class="categorie">Communauté</h1>
                    <h2 class="date">17/09/2024</h1>
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