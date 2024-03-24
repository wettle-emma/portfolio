<?php
add_theme_support('post-thumbnail');

//ajouter une nouvelle zone de menu à mon thème 
function register_my_menu(){
    register_nav_menus( array(
        'header-menu' => __( 'Menu De Tete'),
        'footer-menu'  => __( 'Menu De Pied'),
        
    ) );
}
add_action('init', 'register_my_menu'); 

add_image_size( 'perso', 1113, 129, true) ;

function custom_contact_form_handler() {
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);

    $to = 'emma.wettle@gmail.com';
    $headers = "From: $name <$email>" . "\r\n";
    
    wp_mail($to, $subject, $message, $headers);

    // Redirigez l'utilisateur vers une page de confirmation
    wp_redirect( home_url('/confirmation') );
    exit;
}
add_action( 'admin_post_nopriv_custom_contact_form', 'custom_contact_form_handler' );
add_action( 'admin_post_custom_contact_form', 'custom_contact_form_handler' );

add_action('template_redirect', 'handle_custom_contact_form');

function handle_custom_contact_form() {
    if(isset($_POST['submit'])) {
        $to = "emma.wettle@gmail.com"; // Adresse email de destination
        $subject = "Formulaire de contact"; // Sujet de l'email
        $name = $_POST['name']; // Nom de l'expéditeur
        $from = $_POST['email']; // Email de l'expéditeur
        $message = $_POST['message']; // Message

        // En-têtes de l'email
        $headers = "From: $name <$from>" . "\r\n";
        $headers .= "Reply-To: $from" . "\r\n";
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // Envoi de l'email
        if (mail($to, $subject, $message, $headers)) {
            // Afficher un message de succès ici si nécessaire
            // Vous pouvez simplement ajouter un élément HTML pour afficher un message de confirmation sur la même page
            echo "<p>Votre message a été envoyé avec succès.</p>";
        } else {
            echo "<p>Une erreur s'est produite lors de l'envoi du message.</p>";
        }
    }
}

?>
