<?php 
// Modèle index.php représente le modèle par defaut du théme
 ?> 
<?php get_header(); ?>
<main class="site__main">
    <code>front-page.php</code>
    <!-- <h3>index.php</h3> -->
    <section class="blocflex">
        <?php 
            if (have_posts()):
                while(have_posts()): the_post();?>
                <?php get_template_part("template-parts/categorie", "note-wp"); ?>
            <?php endwhile;
            endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>


        
        
        
        
