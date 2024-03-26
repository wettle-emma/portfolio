<?php
/*
Template Name: projets
*/
?>
<?php get_header(); ?>

<h1 class="title">Réalisations</h1>

<div>
<div class="bandeau">
    <?php for ($i = 0; $i < 10; $i++) { ?>
        <p class="texte_bandeau">WEBDESIGN</p>
    <?php } ?>
</div>


    <?php

    $args = array(
        'post_type' => 'webdesign',
    );

    // LA REQUETE
    $the_query = new WP_Query( $args );
    // La boucle
    if ( $the_query->have_posts() ) {
        echo '<div class="projets_groupe">';
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            echo '<a href="' . get_permalink() . '">';
            echo '<div class="">';
            the_post_thumbnail("thumbnail");
            echo the_title("<h1 class='project_title'>", "</h1>", true); // Changed false to true
            the_content();
            echo '</div>';
            echo '</a>';
        }
    echo '</div>';
    } else {
        // Rien à afficher
    }
    /* Remettre les données initiales */
    wp_reset_postdata(); ?>
</div>

<div>
    <div class="bandeau">
    <?php for ($i = 0; $i < 10; $i++) { ?>
        <p class="texte_bandeau">GRAPHISME</p>
    <?php } ?>
    </div>

    <?php

    $args = array(
        'post_type' => 'graphisme',
    );

    // LA REQUETE
    $the_query = new WP_Query( $args );
    // La boucle
    if ( $the_query->have_posts() ) {
        echo '<div class="projets_groupe">';
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            echo '<a href="' . get_permalink() . '">';
            echo '<div class="">';
            the_post_thumbnail("thumbnail");
            echo the_title("<h1 class='project_title'>", "</h1>", true); // Changed false to true
            the_content();
            echo '</div>';
            echo '</a>';
        }
    echo '</div>';
    } else {
        // Rien à afficher
    }
    /* Remettre les données initiales */
    wp_reset_postdata(); ?>
</div>

<div>
    <div class="bandeau">
    <?php for ($i = 0; $i < 10; $i++) { ?>
        <p class="texte_bandeau2">MOTION DESIGN</p>
    <?php } ?>
    </div>

    <?php

    $args = array(
        'post_type' => 'motion',
    );

    // LA REQUETE
    $the_query = new WP_Query( $args );
    // La boucle
    if ( $the_query->have_posts() ) {
        echo '<div class="projets_groupe">';
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            echo '<a href="' . get_permalink() . '">';
            echo '<div class="">';
            the_post_thumbnail("thumbnail");
            echo the_title("<h1 class='project_title'>", "</h1>", true); // Changed false to true
            the_content();
            echo '</div>';
            echo '</a>';
        }
    echo '</div>';
    } else {
        // Rien à afficher
    }
    /* Remettre les données initiales */
    wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>