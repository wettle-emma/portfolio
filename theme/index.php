<?php
/*
Template Name: Home
*/
?>
<?php get_header();?>

<h1 class="home_title">Emma Wettlé</h1>

<div class="home_container">
    <a href="<?php echo esc_url( home_url( '/crac-19' ) ); ?>" class="image-link">
        <div class="rectangle">
            <img class="home_photo" src="<?php echo wp_get_attachment_url(165, 'large'); ?>">
            <p class="home_project2">Crac 19</p>
        </div>
    </a>

    <a href="<?php echo esc_url( home_url( '/cassandre' ) ); ?>" class="image-link">
        <div class="rectangle2">
            <img class="home_photo2" src="<?php echo wp_get_attachment_url(164, 'large'); ?>">
            <p class="home_project">Cassandre</p>
        </div>
    </a>

    <a href="<?php echo esc_url( home_url( '/lfadc' ) ); ?>" class="image-link">
        <div class="rectangle">
            <img class="home_photo" src="<?php echo wp_get_attachment_url(135, 'large'); ?>">
            <p class="home_project3">LFADC</p>
        </div>
    </a>
</div>


<button class="home_button">
    <a href="<?php echo esc_url( home_url( '/realisations' ) ); ?>">Voir + de projets</a>
</button>

<div>
    <h2 class="home_h2">On reste en contact ?</h2>
    <div class="home_link">
        <?php echo wp_get_attachment_image(173, 'small'); ?>
        <p class="contact_text">07.82.42.94.56</p>
    </div>
    <div class="home_link">
        <?php echo wp_get_attachment_image(172, 'small'); ?>
        <p class="contact_text">emma.wettle@gmail.com</p>
    </div>
</div>

<?php get_footer();?>
