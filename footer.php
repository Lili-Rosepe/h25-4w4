<footer>
    <div class="piedpage global">
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
                <p>3800 Sherbrooke St E, Montreal, Quebec H1X 2A2</p>
                <p>Tel: (514) 254-7131</p>
                </div>
                <div class="piedpage__s1__adresse__recherche">
                
                    <?php get_search_form();   ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                <h4>Mission du club</h4>
                <p>La mission d'un site de club de voyage est de proposer à ses membres une expérience unique en facilitant l'accès à des destinations et des offres exclusives. En offrant des conseils personnalisés, des packages sur mesure et une communauté engagée, le site permet aux voyageurs de découvrir de nouvelles horizons tout en bénéficiant d'avantages tarifaires et d'un service de qualité. L'objectif est de rendre les voyages plus accessibles, plus simples et plus enrichissants, tout en favorisant les échanges et les partages d'expériences entre passionnés de voyage.</p>
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

        </section>
        <section class="piedpage__s2"></section>
        <section class="piedpage__s3"></section>


    </div>
</footer>
<?php wp_footer() ?>