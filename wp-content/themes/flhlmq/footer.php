<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</div>

<footer class="footer">
    <div class="column1">
        <div class="titre_footer">
            <div class="logo">
                <img src="<?php the_field('footerlogo'); ?>" />
            </div>
        </div>
        <p class="address">
            <?php the_field('location'); ?>
        </p>
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
                <img src="<?php the_field('partners_secondlogo'); ?>" alt="frapru" />
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
            <button class="membre_footer"><?php the_field('buttons_btn_label'); ?></button>
        </div>
    </div>
    <p class="credit"><?php the_field('credits'); ?></p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>

</body>

</html>