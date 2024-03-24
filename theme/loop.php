<div class="loop">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="">
<div class="">
<?php the_post_thumbnail("thumbnail"); ?>
</div>
<h1 class="">
<a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h1>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>