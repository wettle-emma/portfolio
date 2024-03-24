<?php get_header(); ?>
<div class="">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<article class="">
<?php the_post_thumbnail( 'thumbnail' ); ?>
<h1 class="">
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h1>
<?php the_terms( $post->ID, 'nature', 'Nature : ' ); ?><br>
<?php the_terms( $post->ID, 'couleur', 'Couleur : ' ); ?><br>
<div class="content">
<?php the_content(); ?>
</div>
</article>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_footer(); ?>