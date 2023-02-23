<?php 
// Modèle category.php rpermet d'afficher une archive par categorie d'article
 ?> 
<?php get_header(); ?>
<main>
    <code>category.php</code>
    <section class="blocflex">
<?php 
    if (have_posts()):
        while(have_posts()): the_post();?>
        <article>
            <h5><a href="<?php the_permalink();?>"><?=get_the_title();?></a></h5>
            <p><?= wp_trim_words(get_the_excerpt(),10);?></p>
        </article>
       <?php endwhile;
    endif;?>
</section>
</main>
<?php get_footer(); ?>


        
        
        
        
