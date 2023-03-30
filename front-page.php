<?php 
// Modèle index.php représente le modèle par defaut du théme
 ?> 
<?php get_header(); ?>
<main class="site__main">
    <!-- <code>front-page.php</code> -->
    <section class="viewport">
        <h2>Tp2</h2>
        <h3>Auteur: Farouk Manai</h3>
        <h4>Cours: 31w - Introduction à un gestionnaire de contenu</h4>
        <?php wp_nav_menu(array(
            "menu"=>"evenement",
            "container"=>"nav",
            "container_class"=>"menu__bloc"
        )); ?>
    </section>
    <!-- <h3>index.php</h3> -->
    <section class="blocflex">
        <?php 
            if (have_posts()):
                while(have_posts()): the_post();?>
                <?php if (in_category('galerie')){
                    get_template_part("template-parts/categorie", "galerie");
                }
                else{
                    get_template_part("template-parts/categorie", "note-wp"); 
                }
                ?>
            <?php endwhile;
            endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>


        
        
        
        
