    <?php get_header(); ?>

    
    <?php get_template_part('gabarits/hero'); ?>
    
    

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
     <!-- ////////////////////////////////////////////////  section rest-api -->
     <section class="destinations">
        <?php categories_liste("destinations") ?>
        <h2 class="destinations__titre">Articles de la catégorie</h2>
        <div class="destinations__list"></div>
    </section>

    <footer></footer>
    <?php get_footer(); ?>
</body>
</html>