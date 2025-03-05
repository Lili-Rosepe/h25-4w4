<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club de voyage</title>
    <!-- link rel="stylesheet" href="normalize.css" -->
    <!-- link rel="stylesheet" href="style.css" -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders:opsz,wght@10..72,100..900&display=swap" rel="stylesheet">
     <?php wp_head() ?>
</head>
<body>
    <header>
        <div class="entete">
            <figure class="entete__logo">
            <?php
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
            ?>
            </figure>
            <div class="entete__navigation">
                <?php wp_nav_menu(array(
                    'menu' => 'principal',
                    'container' => 'nav',
                    'container_class' => 'entete__menu'
                )); ?>
                
                <form class="recherche">
                    <input type="search" placeholder="Rechercher" class="recherche__input">
                    <img class="recherche__img"  src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="16" height="16">
                </form>
            </div> <!-- fin entete__navigation  -->
        </div>
    </header>