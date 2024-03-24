<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>

<h1 class="title">Contactez-moi</h1>

<div class="contact">
<div class="home_link">
        <?php echo wp_get_attachment_image(173, 'small'); ?>
        <p class="contact_text">07.82.42.94.56</p>
    </div>
    <div class="home_link">
        <?php echo wp_get_attachment_image(172, 'small'); ?>
        <p class="contact_text">emma.wettle@gmail.com</p>
    </div>
</div>

<form class="formulaire" method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
    <input type="hidden" name="action" value="custom_contact_form">
    <input type="text" name="name" placeholder="Nom" required>
    <input type="email" name="email" placeholder="Adresse e-mail" required>
    <input type="text" name="subject" placeholder="Sujet" required>
    <textarea name="message" placeholder="Message" required></textarea>
    <button type="submit" name="submit">Envoyer</button>
</form>


<?php get_footer(); ?>