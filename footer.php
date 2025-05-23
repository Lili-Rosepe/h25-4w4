<footer>
    <?php $footer_adresse  = get_theme_mod('footer_adresse', 'Default Title');  ?>
    <?php $footer_telephone  = get_theme_mod('footer_telephone', 'Default Title');  ?>
    <?php $footer_mission  = get_theme_mod('footer_mission', 'Default Title'); ?> 
   <?php $footer_couleur = get_theme_mod('footer_couleur','#c8f4fa');
    $footer_image = get_theme_mod('footer_image', '');
    genere_vague($footer_couleur);
    ?>
    <div class="piedpage global">
    <div class="piedpage__s1__image"><?php echo $footer_image; ?></div>
        <section class="piedpage__s1">
           <div class="piedpage__s1__liens">
            <h4>Liens sur le voyages</h4>
           <a href="https://www.airtransat.com/fr-CA/accueil?search=flight&flightType=RT&gateway=AIRPORT_YYZ&pax=1-0-0-0">Air Transat</a>
           <a href="https://www.aircanada.com/home/ca/fr/aco/flights">Air Canada</a>
           <a href="https://www.tripadvisor.ca/">Tripadvisor</a>
           <a href="https://www.booking.com/">Booking.com</a>
           <a href="https://fr.airbnb.ca/">Airbnb</a>
           <a href="https://www.expedia.ca/">Expedia</a>
           </div>
            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                    <h4>Adresse et Recherche</h4>
                <p> <?php echo $footer_adresse; ?></p>
                <p>Tel: <?php echo $footer_telephone; ?></p>
                </div>
                <div class="piedpage__s1__adresse__recherche">
                
                    <?php get_search_form();   ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                <h4>Mission du club</h4>
                <p> <?php echo $footer_mission; ?></p>
            </div>

            <div class="piedpage__s1__icone">
            <!-- Différent icone des média sociaux -->
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=000000" width="20" height="20">

            </div>
            <div class="piedpage__s1__externe">
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                )); ?>
            </div>
                <p>Lien git: <a href="https://github.com/Lili-Rosepe/h25-4w4">Lien GitHub</a></p>
        </section>
        <section class="piedpage__s2"></section>
        <section class="piedpage__s3"></section>


    </div>
</footer>
<?php wp_footer() ?>