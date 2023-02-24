<?php 
// Modèle index.php représente le modèle par defaut du théme
 ?> 
<?php get_header(); ?>
<main>
    <!-- <h3>index.php</h3> -->
<?php 
    if (have_posts()):
        while(have_posts()): the_post();
            // the_title('<h1>','</h1>');
            // the_permalink();?>

            <h5><a href="<?php the_permalink();?>"><?=get_the_title();?></a></h5>
<?php        
            // the_content();
            // the_excerpt();
            echo wp_trim_words(get_the_excerpt(),10);
        endwhile;
    endif;
?>
</main>
<?php get_footer(); ?>


        
        
        
        
