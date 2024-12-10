<?php 
/**
 * Template Name: index
 * Template Post Type: page, new
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<img class="logo_lettre" src="./medias/images/page_accueil/section_hero/decoration_logo.svg" alt="logo">
  

  <div class="pageblanche">

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

      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="./medias/images/page_accueil/section_hero/talismenas.jpg" alt="ciel01" />
          </div>
          <div class="swiper-slide">
            <img src="./medias/images/page_accueil/section_hero/emma_trewin.jpg" alt="ciel02" />
          </div>
          <div class="swiper-slide">
            <img src="./medias/images/page_accueil/section_hero/jdominici.jpg" alt="ciel03" />
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="vecteur_batiment">
          <img class="building01"
            src="./medias/images/page_accueil/section_hero/batiments_vectors/arriere_building_01.svg" alt="" />
          <img class="building02"
            src="./medias/images/page_accueil/section_hero/batiments_vectors/arriere_building_02.svg" alt="" />
          <img class="building03"
            src="./medias/images/page_accueil/section_hero/batiments_vectors/arriere_building_03.svg" alt="" />
        </div>
      </div>
      
      <div class="case_transparente">
        <h1 class="titre">
          La Fédération des locataire d’ habitation à loyer modique du Québec
        </h1>
        <div class="swiper02">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <h3 class="article_hero">Envoyez un courriel pour soutenir Alexis! Un jeune trisomique handicapé et en fin
                de vie ne peut même plus aller à l’extérieur puisque l’office municipal d’habitation qui gère son HLM
                refuse d’installer un élévateur, même si des fonds d’exception ont été débloqués à cet effet.</h3>
            </div>
            <div class="swiper-slide">
              <h3 class="article_hero">«Je vis dans un HLM et ça, c’est une chance que j’ai» Pour lire l'article du
                journal Le Soleil:
                https://www.lesoleil.com/actualites/actualites-locales/la-capitale/2024/09/15/la-chance-dhabiter-dans-un-hlm-5L4SZKQNHZADTEKTRYCSCWKI5M/
              </h3>
            </div>
            <div class="swiper-slide">
              <h3 class="article_hero">Pétition pour des HLM de qualité. La FLHLMQ profitera de la manifestation et du
                camps organisés par le FRAPRU afin de réclamer du logement social, les 14 et 15 septembre, pour lancer
                publiquement sa pétition pour des HLM de qualité.</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="donation">
      <img class="donation_img" src="<?php the_field('join_section_image_organisation'); ?>" alt="">
      <h2 class="titre_joindre">
        <img class="joindre" src="<?php the_field('join_section_title'); ?>" alt="JOINDRE NOTRE ORGANISATION">
      </h2>
      <div class="bloc_information">
        <h3 class="descriptif_equipe"><?php the_field('join_section_description'); ?></h3>
        <div class="btn_donation">
          <button class="membre"><?php the_field('join_section_btn_btn_title'); ?></button>
        </div>
      </div>
    </section>

    <section class="services">
      <img class="titre_services" src="<?php the_field('services_section_title'); ?>" alt="">
      <div class="c_contenu">
        <div class="s_congres">
          <h3 class="titre">Service 01 - <?php the_field('services_section_service_01_title'); ?></h3>
          <p class="info">
		  <?php the_field('services_section_service_01_description'); ?>
		  </p>
        </div>
      </div>
      <div class="i_contenu">
              <div class="s_infolettre">
        <h3 class="titre">Service 02 - <?php the_field('services_section_service_02_title'); ?></h3>
        <p class="info">
		<?php the_field('services_section_service_02_description'); ?>
		</p>
      </div>
      </div>
      <div class="e_contenu">
        <div class="s_environnement">
        <h3 class="titre">Service 03 - <?php the_field('services_section_service_03_title'); ?></h3>
        <p class="info">
			<?php the_field('services_section_service_03_description'); ?>
		</p>
      </div>
      </div>
      
      <div class="s_comite">
        <h3 class="titre">Service 04 - <?php the_field('services_section_service_04_title'); ?></h3>
        <p class="info">
		<?php the_field('services_section_service_04_description'); ?>
		</p>
      </div>
    </section>

    <section class="actualites">
      <div class="empty"></div>
      <img class="titre_actualites" src="./medias/images/page_accueil/section_actualite/titre_actualite.svg"
        alt="">
      <div class="card01">
        <img src="./medias/images/liste_actualite/carte/actualite_01.jpg" alt="">
        <h1 class="titre_solo_actualite">Envoyez un courriel pour soutenir Alexis!</h1>
        <p class="descriptif_actualite">L'OMH refuse les fonds de la SHQ pour aider un jeune trisomique en fin de vie.
        </p>
      </div>
      <div class="card02">
        <img src="./medias/images/liste_actualite/carte/actualite_02.jpg" alt="">
        <h1 class="titre_solo_actualite">«Je vis dans un HLM et ça, c’est une chance que j’ai»</h1>
        <p class="descriptif_actualite">Une membre de notre conseil d'administration, Chantal Daneau, a même fait la une
          du journal Le Soleil et d'un reportage de Radio-Canada en affirmant: «Je vis dans un HLM et ça, c’est une
          chance que j’ai. Il y a environ 34 000 ménages qui aimeraient avoir la même chance que moi».</p>
      </div>
      <div class="card03">
        <img src="./medias/images/liste_actualite/carte/actualite_03.png" alt="">
        <h1 class="titre_solo_actualite">Pétition pour des HLM de qualité</h1>
        <p class="descriptif_actualite">Dès demain, nos associations sont invités à faire du porte-à-porte afin de
          récolter au moins 10 000 signatures et à demander à leur député.e de les déposer en leurs noms à l'Assemblée
          nationale.</p>
      </div>
    </section>

    <section class="temoignages">
      <img class="titre" src="./medias/images/page_accueil/temoingnage/titre_temoin.svg" alt="title">
      <div class="entete">
        <h1>TÉMOIGNAGES</h1>
        <img class="conteneur_mobile_icones" src="./medias/images/page_accueil/temoingnage/mobile_icon.svg" alt="icones">
      </div>
      <img class="desktop_icones" src="./medias/images/page_accueil/temoingnage/icon_desktop.svg" alt="icones">
      <div class="contenant_temoignages">
        <div class="utilisateur">
          <h3>Utilisateur 01</h3>
          <p class="description">
            J'ai rejoint cette communauté de propriétaire-locataire il y a quelques années,
            et depuis, je me sens comme à la maison ! Tout le monde est amical et serviable,
            ce qui rend la vie en communauté plus facile et plus agréable.
          </p>
        </div>
        <div class="utilisateur">
          <h3>Utilisateur 02</h3>
          <p class="description">
            Depuis que je suis ici, j'ai pu rencontrer de nouvelles personnes et me sentir
            plus connecté aux autres. C'est comme si j'avais trouvé une famille accueillante
            et solidaire.
          </p>
        </div>
        <div class="utilisateur">
          <h3>Utilisateur 03</h3>
          <p class="description">
            La communauté de locataires est géniale ! J'adore l'ambiance conviviale.
          </p>
        </div>
      </div>
    </section>

    <section class="infolettre">
      <img class="title" src="./medias/images/page_accueil/section_infolettre/titre_infolettre.svg" alt="title">
      <div class="boite_question">
        <div class="item">
          <h2 class="question"> Question 01 - Comment puis-je m'inscrire ?</h2>
          <p class="answer">Pour vous inscrire, cliquez sur le bouton "S'inscrire" en haut à droite de la page
            d'accueil et suivez les instructions.</p>
        </div>
        <div class="item">
          <h2 class="question"> Question 02 - Est-ce que mes informations personnelles sont sécurisées ?</h2>
          <p class="answer">Oui, nous prenons la sécurité de vos données très au sérieux. Consultez notre politique
            de confidentialité pour plus d'informations.
          </p>
        </div>
        <div class="item">
          <h2 class="question"> Question 03 - Les services sont-ils payants ?</h2>
          <p class="answer">Oui, certains services sont payants. Vous trouverez des informations sur les tarifs dans la
            section "Tarifs" de notre site.</p>
        </div>
      </div>
      <img class="join_titre" src="./medias/images/page_accueil/section_infolettre/titre_joindre_maintenant.svg"
        alt="joindre notre infolettre">
      <form>
        <input type="email" id="email" class="input" placeholder="exemple707@gmail.com">
      </form>
      <img class="souris_icone" src="./medias/images/page_accueil/icones/cursor.svg" alt="souris">
    </section>

  </div>



	<?php the_content(); // Contenu principal de la page ?>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>