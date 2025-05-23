<?php
/**
 * Template Name: Pays
 */
get_header(); ?>
    <?php $pays_titre  = get_theme_mod('pays_titre', 'France');  ?>
    <?php $pays_heure  = get_theme_mod('pays_heure', '23 juin');  ?>
    <?php $pays_descriptions  = get_theme_mod('pays_descriptions', 'Un voyage en France promet une expérience riche et variée'); ?> 
    <?php $footer_image = get_theme_mod('footer_image', '');?>
  <section class="contenu__pays">
        <h1>Les plus beau Pays</h1>
        <p>Plongez au cœur de l’aventure et laissez-vous emporter par l’appel du large ! Notre planète regorge de destinations incroyables, chacune promettant une expérience unique et mémorable. Que vous rêviez de plages idylliques baignées de soleil, de sommets majestueux invitant à la randonnée, de villes vibrantes d’histoire et de modernité, ou de rencontres culturelles authentiques, il y a un pays fait pour vous.</p>
       
        <div class="prochainVoyage">
        <p>Prochain voyage: <?php echo $pays_titre; ?></p>

            <p> Date: <?php echo $pays_heure; ?></p>
            <p><?php echo $pays_descriptions; ?></p>
        </div>
        <div class="galerie">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>

        </div>
   
<div class="accordion"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e299d7" fill-opacity="1" d="M0,128L21.8,138.7C43.6,149,87,171,131,165.3C174.5,160,218,128,262,96C305.5,64,349,32,393,48C436.4,64,480,128,524,138.7C567.3,149,611,107,655,106.7C698.2,107,742,149,785,154.7C829.1,160,873,128,916,149.3C960,171,1004,245,1047,250.7C1090.9,256,1135,192,1178,186.7C1221.8,181,1265,235,1309,240C1352.7,245,1396,203,1418,181.3L1440,160L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path></svg>
</div>  
</section>
        <!-- ////////////////////////////////////////////////  section rest-api -->
        «
        <section class="pays">
        <?php categories_liste("pays") ?>
        <h2 class="pays__titre">Articles de la catégorie</h2>
        
        </section>
    </div>
</section>
<div class="accordion"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e299d7" fill-opacity="1" d="M0,128L21.8,138.7C43.6,149,87,171,131,165.3C174.5,160,218,128,262,96C305.5,64,349,32,393,48C436.4,64,480,128,524,138.7C567.3,149,611,107,655,106.7C698.2,107,742,149,785,154.7C829.1,160,873,128,916,149.3C960,171,1004,245,1047,250.7C1090.9,256,1135,192,1178,186.7C1221.8,181,1265,235,1309,240C1352.7,245,1396,203,1418,181.3L1440,160L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path></svg>
</div>
<?php get_footer(); ?>