<?php get_header() ?>
<main class="site_main">
    <!-- <h3 class="marge_entete">single.php</h3> -->
    <section class="blocflex">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <article class="informations">
                    <?php

                    //titre
                    the_title('<h1>', '</h1>');

                    //contenu
                    the_content(); ?>
                </article>

                <p><?php the_field('enseignant'); ?></p>
                <p><?php the_field('domaine'); ?> </p>
                <p><?php
                $heures = " heures";
                the_field('heures')?><?= $heures ?></p>
                <?php
            endwhile;
        endif;
        ?>
        <section>
</main>
<?php 
// get_footer(); 
?>