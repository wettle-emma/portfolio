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

          <img class="motion_photo" src="<?php the_field("photo"); ?>" alt="bob">

          <div class="projet_paragraphe">
            <div class="projet_texte2"><?php the_field("infos"); ?></div>
            <div class="projet_texte2"><?php the_field("solution"); ?></div>
          </div>

          <div>
          <video class="motion_video" controls><source src="<?php the_field("video"); ?>" type="video/mp4"></video>
          </div>
      </article>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>