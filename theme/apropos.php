<?php
/*
Template Name: Apropos
*/
?>
<?php get_header(); ?>

<h1 class="title">A propos</h1>

<div>
    <div class="bento">
        <div class="un">
            <img class="bento_photo" src="<?php echo wp_get_attachment_url(163, 'medium'); ?>"/>
        </div>
        <div class="deux"></div> 
        
        <div class="trois">
            <h2 class="bento_title">Salut !</h2>
            <p class="bento_text">Moi c’est Emma WETTLE, étudiante en BUT MMI parcours Création Numérique à Montbéliard. </p>
            <p class="bento_text">J’ai 20 ans et je suis passionnée par tout ce qui touche au graphisme et à la création numérique !</p>
        </div>

        <div class="quatre">
            <h2 class="bento_title">C'est quoi le BUT MMI ?</h2>
            <p class="bento_text1">Le BUT Métier du Multimédia et de l’Internet se déroule sur 3 ans. </p>
            <p class="bento_text">Il s’agit d’une formation regroupant la communication, la création numérique ainsi que le développement web. </p>
            <p class="bento_text">On y retrouve aussi l’audiovisuel dans certains établissement, notamment à MMI Montbéliard !</p>
            <p class="bento_text">La formation propose 3 parcours : Création Numérique, Développement Web et dispositifs interactifs ainsi que Stratégie de Communication et design d’expérience.</p>
        </div>

        <div class="cinq"></div>
        <div class="six"></div>
        <div class="sept"></div>
    </div>

    <div class="bento2">
        <div class="huit">
            <h2 class="bento_title">Qui suis-je ?</h2>
            <p class="bento_text">Avant de venir en MMI, j’ai effectué un baccalauréat général avec les spécialités Histoire de l’Art et Histoire Géographie Géopolitique Sciences Politiques (HGGSP).</p>
            <p class="bento_text">Après cela, j'ai poursuivi mes études à l'université en rejoignant une Classe Préparatoire aux Grandes Écoles (CPGE) Lettres à Mulhouse. Malheureusement, je me suis rapidement rendu compte que ce domaine ne correspondait pas à mes aspirations.</p>
            <p class="bento_text">J’ai toujours été attirée par tout ce qui touche à l’art, mais également par la lecture et les voyages. Ces activités stimulent ma curiosité et m'inspirent dans mes projets personnels et professionnels.</p>
            <div>
                <a target="_blank" href="https://medias.emmawettle.fr/EmmaWettleCV.pdf"><h3 class="bento_cv">Consultez mon cv</h3></a>
            </div>
        </div>

        <div class="neuf"></div>

        <div class="dix">
            <a class="dix_mail" href="<?php echo esc_url( home_url( '/contactez-moi' ) ); ?>"><?php echo wp_get_attachment_image(94, 'small'); ?></a>
        </div>

        <div class="onze">
            <div class="onze_icons">
                <?php echo wp_get_attachment_image(95, 'small'); ?>
                <?php echo wp_get_attachment_image(89, 'small'); ?>
                <?php echo wp_get_attachment_image(88, 'small'); ?>
                <?php echo wp_get_attachment_image(90, 'small'); ?>
                <?php echo wp_get_attachment_image(91, 'small'); ?>
                <?php echo wp_get_attachment_image(92, 'small'); ?>
                <?php echo wp_get_attachment_image(96, 'small'); ?>
                <?php echo wp_get_attachment_image(93, 'small'); ?>
            </div>
        </div>

        <div class="douze">
            <a class="douze_lien" href="<?php echo esc_url( home_url( '/realisations' ) ); ?>"><p class="bento_bigtext">Découvrez mes réalisations</p></a>
        </div>
    </div>


</div>

<?php get_footer(); ?>