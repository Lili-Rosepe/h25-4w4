    <?php get_header(); ?>
    <?php
     $hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
     $hero_background = get_theme_mod('hero_background', '') ; 
     $hero_telephone = get_theme_mod('hero_telephone', ' 5 1 4'); 
     $hero_adresse = get_theme_mod('hero_adresse', 'Sherbrooke MTL');
     $hero_couleur = get_theme_mod('hero_couleur', '#FFFFFF'); ?>
    <section class="hero" style="background-image: url(<?php echo $hero_background ?>)" >
        <div class="hero__contenu global">
            <?php $hero_couleur = get_theme_mod('hero_couleur', '#FFFFFF'); ?>
            <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
            <p class="hero__description">
            <?php bloginfo('description'); ?>
            </p>
            <p class="hero__courriel">
            <?php bloginfo('admin_email'); ?>
            </p>
            <p class="hero__adresse">
            <?php echo $hero_telephone; ?>
            </p>
            <p class="hero__telephone">
            Tel: <?php echo $hero_telephone; ?>
            </p>
            <p class="hero_auteur">Auteur: <?php echo $hero_auteur; ?></p>
            <div class="hero__icone">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=000000" width="20" height="20">
            </div>
        </div>

    </section>
    <section class="populaire">
        <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); 
            if (in_category("galerie"))  {
                the_content() ;
            } else {    ?>
                <?php get_template_part( 'gabarits/carte' ); ?>
            <?php } ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <footer></footer>
    <?php get_footer(); ?>
</body>
</html>