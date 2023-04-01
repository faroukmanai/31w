
<?php
/**
 * Template-partqui permettra d'afficher
 * un article provenant d'un conteneur de class blocflex
 * pour un article de categorie cours
 */

 $titre = get_the_title();
 $sigle = substr($titre, 0, 7);
 $titre_long = substr($titre,7, -5);
 $heures= "5h";
?>


<article class="blocflex__article">
    <h5><a href="<?php the_permalink(); ?>"> <?= $sigle; ?></a></h5>
    <h6><?= $titre_long?></h6>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <p><?php the_field('enseignant');?></p>
    <p><?php the_field('domaine');?></p>
    <p><?php the_field('heures')?><?= $heures ?></p>

</article>