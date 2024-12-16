<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</div>

<footer class="footer">
    <div class="column1">
        <div class="titre_footer">
            
            <?php
                 $arguments = array( // 👈 Tableau d'arguments
                 'post_type' => 'footer',
                'posts_per_page' => 1
                  );
                 $projects = new WP_Query($arguments); // 👈 Utilisation
                 while ($projects->have_posts()) : $projects->the_post(); 
            ?>
            
            <a href="https://web-chibis.tim-momo.com/" class="logo">
                <img src="<?php the_field('footerlogo'); ?>" />
            </a>
            
        </div>
        
        <?php
                    wp_nav_menu( array(
                    'theme_location' => 'footer',  // S'assurer de chercher main_menu pour menu principal dans l'acceuil
                    'menu_class' => 'navigation',  // Applique classes nav_menu et etc. aux liens et nav
                    'container' => 'a',
                    'list_item_class' => 'nav-item',
                    'link_item_class' => 'nav-link',
                ));?>
        
        <a href="<?php the_field('google-map'); ?>">
           <p class="address">
                <?php the_field('location'); ?>
            </p> 
        </a>
        
        <p class="contactes"><?php the_field('phone_number'); ?></p>
        <div class="lien">
            <a href="info@flhlmq.com"><?php the_field('email_flhlmq'); ?></a>
        </div>
        <div class="icones_reseaux">
            <div class="youtube">
                <img src="<?php the_field('mediassociaux_firstlogo'); ?>" alt="youtube" />
            </div>

            <div class="facebook">
                <img src="<?php the_field('mediassociaux_secondlogo'); ?>" alt="facebook" />
            </div>
        </div>
    </div>
    <div class="column2">
        <div class="partners">
            <p class="partenaires">
                <?php the_field('partners_titlepartners'); ?>
            </p>
            <div class="quebec">
                <img src="<?php the_field('partners_logo'); ?>" alt="quebec" />
            </div>
            <div class="frapru">
                <img src="<?php the_field('partners_logo2'); ?>" alt="frappu" />
            </div>
            <div class="cnl">
                <img src="<?php the_field('partners_thirdlogo'); ?>" alt="cnl" />
            </div>
            <div class="rohq">
                <img src="<?php the_field('partners_fourthlogo'); ?>" alt="rohq" />
            </div>
        </div>
        <p class="joindre"><?php the_field('join_title'); ?></p>
        <div class="membership">
            <a href="<?php the_field('buttons_link_btn'); ?>">
               <button class="membre_footer">
                    <?php the_field('buttons_btn_label'); ?>
                </button> 
            </a>
            
        </div>
    </div>
    <p class="credit"><?php the_field('credits'); ?></p>
    
    <?php
        endwhile; 
        wp_reset_postdata(); 
    ?>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="./main.js"></script>
<script src="<?php bloginfo('template_url'); ?>"></script>

<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>

</body>

</html>