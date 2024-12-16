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
                 $arguments = array( // ðŸ‘ˆ Tableau d'arguments
                 'post_type' => 'footer',
                'posts_per_page' => 1
                  );
                 $projects = new WP_Query($arguments); // ðŸ‘ˆ Utilisation
                 while ($projects->have_posts()) : $projects->the_post(); 
            ?>
            
            <a href="https://web-chibis.tim-momo.com/" class="logo">
                <img src="<?php the_field('footerlogo'); ?>" />
            </a>
            
        </div>
        
        <div class="navigation">
            <a href="https://web-chibis.tim-momo.com/a-propos/">A propos</a>
            <a href="https://web-chibis.tim-momo.com/323-2/">Services</a>
            <a href="https://web-chibis.tim-momo.com/news/">Nouvelles</a>
            <a href="https://web-chibis.tim-momo.com/joindre-la-communaute/">Nous joindre</a>
        </div>
        
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
            <button class="membre_footer">
                <?php the_field('buttons_btn_label'); ?>
            </button>
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
/* Espace oÃ¹ WordPress peut insÃ©rer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous dÃ©sactiverez du mÃªme coup toutes vos extensions (plugins) ðŸ¤·. 
	 Vous pouvez la dÃ©placer si dÃ©sirÃ©, mais garder lÃ . */
?>

</body>

</html>