<?php 
// Enfiler la feuille de style
function ajouter_styles() {
    wp_enqueue_style('31w-style-principal',//id de la feuille de style
                get_template_directory_uri() . '/style.css',//adresse url de la feuile de style
                array(),//les dependance avec les autes feuilles destyle
                filemtime(get_template_directory() . '/style.css'));//la derniere version de la feuille de style
}
add_action( 'wp_enqueue_scripts', 'ajouter_styles' );

