<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</div>

<footer class="footer">
    <!--
    <div class="column1">-->
        <div class="titre_footer">
            <div class="logo">
                <!-- scf pour image dans wp -->
                <img src="<?php the_field('footerlogo'); ?>" />
            </div>
        </div>
        <p class="address">
            <?php the_field('location'); ?>
        </p>
        <p class="contactes">
            <!-- scf pour texte dans wp -->
            <?php the_field('phone_number'); ?>
        </p>
        <div class="lien">
            <!-- scf pour email dans wp -->
            <a href="info@flhlmq.com"><?php the_field('email_flhlmq'); ?></a>
        </div>
        <div class="icones_reseaux">
            <div class="youtube">
                <!-- scf pour image dans wp -->
                <img src="<?php the_field('mediassociaux_firstlogo'); ?>" alt="youtube" />
            </div>

            <div class="facebook">
                <!-- scf pour image dans wp -->
                <img src="<?php the_field('mediassociaux_secondlogo'); ?>" alt="facebook" />
            </div>
        </div>
    </div>
    <!--<div class="column2">-->
        <div class="partners">
            <p class="partenaires">
                <!-- scf pour texte dans wp -->
                <?php the_field('partners_titlepartners'); ?>
            </p>
            <div class="quebec">
                <!-- scf pour image dans wp -->
                <img src="<?php the_field('partners_logo'); ?>" alt="quebec" />
            </div>
            <div class="frapru">
                <!-- scf pour image dans wp -->
                <img src="<?php the_field('partners_secondlogo'); ?>" alt="frapru" />
            </div>
            <div class="cnl">
                <!-- scf pour image dans wp -->
                <img src="<?php the_field('partners_thirdlogo'); ?>" alt="cnl" />
            </div>
            <div class="rohq">
                <!-- scf pour image dans wp -->
                <img src="<?php the_field('partners_fourthlogo'); ?>" alt="rohq" />
            </div>
        </div>
        <p class="joindre">
            <!-- scf pour texte dans wp -->
            <?php the_field('join_title'); ?>
        </p>
        <div class="membership">
            <button class="membre_footer">
                <!-- scf pour texte dans wp -->
                <?php the_field('buttons_btn_label'); ?>
            </button>
        </div>
    </div> 

    
    <!-- scf pour texte dans wp -->
    <p class="credit"><?php the_field('credits'); ?></p>

    <?php
						$arguments = array( // 👈 Tableau d'arguments
							'post_type' => 'footer',
							'posts_per_page' => 1, 
						);
						$projects = new WP_Query($arguments); // 👈 Utilisation
						while ($projects->have_posts()) : $projects->the_post(); 
						?>
</footer>

<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */

     /*wp-query*/

     

?>

</body>

</html>