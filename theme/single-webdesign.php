<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
      <article>
          <h1 class="title">
            <?php the_title(); ?>
          </h1>
          
            <div class="">
              <ul class="projet_infos">
                <li><p class="projet_bold">Année</p><?php the_field("annee"); ?></li>
                <li><p class="projet_bold">Projet</p><?php the_field("projet_"); ?></li>
                <li><p class="projet_bold">En groupe ?</p><?php the_field("groupe"); ?></li>
                <li><p class="projet_bold">Outils utilisés</p><?php the_field("outils"); ?></li>
              </ul>
            </div>
            
            <img class="graphisme_photo" src="<?php the_field("photo"); ?>" alt="bob">

          <div class="projet_paragraphe">
            <div class="projet_texte">
              <?php the_field("presentation"); ?>
            </div>
            <img class="mockup" src="<?php the_field("photo2"); ?>" alt="bob">
          </div>

          <div class="projet_paragraphe">
            <div class="projet_texte2"><?php the_field("infos"); ?></div>
            <div class="projet_texte2"><?php the_field("solution"); ?></div>
          </div>

          <a  href="<?php the_field("lien"); ?>">
            <p class="projet_lien">Lien du projet</p>
          </a>

            <div class="projet_maquette">
                <img class="maquette" src="<?php the_field("maquette"); ?>" alt="bob">
                <img class="maquette" src="<?php the_field("maquette2"); ?>" alt="bob">
                <img class="maquette" src="<?php the_field("maquette3"); ?>" alt="bob">
            </div>
      </article>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>