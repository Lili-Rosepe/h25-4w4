
<?php
     $hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
     $hero_telephone = get_theme_mod('hero_telephone', ' 5 1 4'); 
     $hero_email = get_theme_mod('hero_email', 'Default Title');
     $hero_adresse = get_theme_mod('hero_adresse', 'Sherbrooke MTL');
     $hero_couleur = get_theme_mod('hero_couleur', '#FFFFFF'); 
    for ($k=0; $k<3; $k++){
    $hero_background[$k] = get_theme_mod('hero_background'. $k, ''); 
    }
  ?>
  <!-- Section hero -->
    <section class="hero">
      <div class="hero__carrousel active" style="background-image: url(<?php echo $hero_background[0] ?>)"></div>
      <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[1] ?>)"></div>
      <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[2] ?>)"></div>
    <div class="hero__radio">
      <input class="hero__radio__input" date-id_radio= "0" type="radio" name="carrousel">
      <input class="hero__radio__input" date-id_radio= "1" type="radio" name="carrousel">
      <input class="hero__radio__input" date-id_radio= "2" type="radio" name="carrousel">

    </div>
      <div class="hero__contenu global">  
        <div class="hero__animation active">     

          <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
          <p class="hero__description"><?php bloginfo('description'); ?>
          </p>

        </div>

        <div class="hero__animation">     
          <h1 class="hero__titre">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda provident tempora reprehenderit? Cumque aliquid cum fugit qui!</h1>
          <p class="hero__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis cupiditate ratione quasi amet cum beatae excepturi
          </p>

        </div>
        <div class="hero__animation">     
          <h1 class="hero__titre">fugit qui!</h1>
          <p class="hero__description">zzzzzzzzz
          </p>

        </div>
        
        <p class="hero__courriel">
        <?php echo $hero_email; ?>
        </p>
        <p class="hero__adresse">
        <?php echo $hero_adresse; ?>
        </p>
        <p class="hero__telephone">
        Tel: <?php echo $hero_telephone; ?>
        </p>
        <p class="hero_auteur">Auteur: <?php echo $hero_auteur; ?></p>
        <?php get_template_part('gabarits/icones-social'); ?>

      </div>
      
    </section>