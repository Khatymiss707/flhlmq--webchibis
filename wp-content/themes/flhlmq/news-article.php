<?php 
/**
 * Template Name: news-article
 * Template Post Type: post, page, new
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
	<div class="pageblanche">
		
		<section class="hero">

			<div itemscope itemtype="https://schema.org/Nouvelle">
				<img itemprop="image" class="image_nouvelle" src="<?php the_post_thumbnail_url(); ?>" alt="">
				<div class="case_transparente nouvelle">
					<h1 class="titre nouvelle">
						<span itemprop="name"><?php the_title(); ?></span>
					</h1>
					<h2 class="categorie" style="color:<?php the_field('categorie_color'); ?>">
						<span itemprop="categorie"><?php the_field('category_news'); ?></span>
					</h2>
					<h2 class="date">
						<span itemprop="publication"><?php the_field('date_news'); ?></span>
					</h2>
				</div>
			</div>
		
			</section>

			<div class="text_nouvelle" itemprop="contexte">
				<?php the_content(); ?>
				<a itemprop="source" class="nouvelle_lien" href="<?php the_field('link_article');?>">Voir l’article</a></br>
			</div>

			<?php
			$arguments = array( // 👈 Tableau d'arguments
				'post_type' => 'new',
				'posts_per_page' => 1, 
				'orderby' => 'date',
			);
			$projects = new WP_Query($arguments); // 👈 Utilisation
			while ($projects->have_posts()) : $projects->the_post(); 
			?>
			
			<div class="prochaine_nouvelle">
				<a href="<?php the_field('link_next_news');?>">
					<h2>Prochaine nouvelle</h2>
				</a>
				<p><?php the_title(); ?></p>
			</div>	

			<?php
			endwhile; 
			wp_reset_postdata(); 
			?>
			
		</section>
	</div>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>