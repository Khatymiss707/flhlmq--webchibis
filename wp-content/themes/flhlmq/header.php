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

    <?php wp_head(); 
/* Cette fonction permet à WordPress et aux extensions d'instancier des fichier CSS et js dans le <head>
	 Supprimer cette fonction briserait vos extensions et diverses fonctionnalités WordPress. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>
</head>

<body <?php body_class(); 
	/* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
	?>>

    <header>
        <div class="banniere">
            <p>
                <?php the_field('description'); ?>
            </p>
            <div class="banniere_btn">
                <button class="visiter">
                    <?php the_field('visite'); ?>
                </button>
                <button class="fermer">
                    <?php the_field('fermer'); ?>
                </button>
            </div>
        </div>

        <section class="nav">
        <nav class="navbar">
          <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </div>

        <?php
            wp_nav_menu( array(
            'theme_location' => 'main_menu',  // Make sure you've registered the 'main-menu' location in your theme
            'menu_class' => 'nav_menu',  // Apply Bootstrap navbar classes to the <ul>
            'container' => 'ul',
            'list_item_class' => 'nav-item',
            'link_item_class' => 'nav-link',
        ));
        ?>
        </nav>
      </section>

    </header>

    <div class="pageblanche">
        <!-- Débute le contenu principal de notre site -->