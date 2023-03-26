<?php 
// Modèle index.php représente le modèle par defaut du théme
 ?> 
<?php get_header(); ?>
<main class="site__main">
    <h3>single.php</h3>
<?php 
    if (have_posts()):
        while(have_posts()): the_post();
            the_title('<h1>','</h1>');
            the_content();// get template parts
            the_field('enseignant'); ?> <br> <?php the_field('domaine'); //get template parts 
        endwhile;
    endif;
?>
</main>
<?php get_footer(); ?>


        
        
        
        
