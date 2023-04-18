<?php get_header(); ?>

<main class="site__main">
    <h1>Erreur 404</h1>
    <h3>Page introuvable. Vous pouvez tenter une recherche :</h3>
    <?php get_search_form(); ?>

    <h3>Nos choix de cours :</h3>
<ul>
    <?php
    $args = array(
        'post_type' => 'post',
        'category_name' => 'cours',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC'
    );

    $cours_query = new WP_Query($args);

    if ($cours_query->have_posts()) {
        while ($cours_query->have_posts()) {
            $cours_query->the_post();
            $titre = get_the_title();
            $sigle = substr($titre, 0, 7);
            $titre_long = substr($titre, 7, -5);
            echo '<li><a href="' . get_permalink() . '">' . $sigle . ' - ' . $titre_long . '</a></li>';
        }
    } else {
        echo '<li>Aucun cours trouvé.</li>';
    }

    wp_reset_postdata();
    ?>
</ul>
    
</main>

<?php get_footer(); ?>
