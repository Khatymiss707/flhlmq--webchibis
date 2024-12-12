<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche l'entête (Header) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title>
        <?php bloginfo('name'); // Affiche le nom du blog ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description à partir des paramètres du site - sinon, affichez le titre du post ou de la page. ?>
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php 
	// Tous les .css et .js sont chargés dans le fichier functions.php
    ?>
    <!--Instancier des fichier CSS et js dans le <head>-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>

        <!--BANNIERE SCOLAIRE-->
        <div class="banniere">
            <p><?php the_field('description'); ?></p>
            <div class="banniere_btn">
                <button class="visiter"><?php the_field('visite'); ?></button>
                <button class="fermer"><?php the_field('fermer'); ?></button>
            </div>
        </div>

        <!--NAVIGATION WORDPRESS ET LE BURGER-->
        <section class="nav">
            <nav class="navbar">
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>

                <?php
                    wp_nav_menu( array(
                    'theme_location' => 'main_menu',  // S'assurer de chercher main_menu pour menu principal dans l'acceuil
                    'menu_class' => 'nav_menu',  // Applique classes nav_menu et etc. aux liens et nav
                    'container' => 'ul',
                    'list_item_class' => 'nav-item',
                    'link_item_class' => 'nav-link',
                ));?>
            </nav>
        </section>

    </header>

    <!-- CONTENU PRINCIPAL -->
    <div class="pageblanche">