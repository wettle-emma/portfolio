<?php
/*
Template Name: confirmation
*/
?>
<?php get_header(); ?>

<h1 class="home_h2">Votre message a bien été envoyé.</h1>

<button class="home_button">
    <a class="confirmation" href="<?php echo esc_url( home_url( '/' ) ); ?>">Retourner à la page d'accueil</a>
</button>

<?php get_footer(); ?>