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
                while(have_posts()): the_post();
                    // the_title('<h1>','</h1>');
                    // the_permalink();?>
                
                <article>
                    <h5><a href="<?php the_permalink();?>"><?=get_the_title();?></a></h5>
                    <p> <?php  echo wp_trim_words(get_the_excerpt(),20);?></p>
                </article>
            <?php endwhile;
            endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>


        
        
        
        
