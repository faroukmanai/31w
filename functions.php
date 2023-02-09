<?php 
// Enfiler la feuille de style
function ajouter_styles() {
    wp_enqueue_style('31w-style-principal',//id de la feuille de style
                get_template_directory_uri() . '/style.css',//adresse url de la feuile de style
                array(),//les dependance avec les autes feuilles destyle
                filemtime(get_template_directory() . '/style.css'));//la derniere version de la feuille de style
}
add_action( 'wp_enqueue_scripts', 'ajouter_styles' );

/** add theme support **/
add_theme_support( 'html5',
                    array('search-form', 
                    'comment-form', 
                    'comment-list', 
                    'gallery', 
                    'caption' ) );

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo',
                    array(
                    'height' => 150,
                    'width'  => 150,
                    ) );
                    
/** enregistrement des menus **/
function enregistrement_des_menus(){
    register_nav_menus( array(
        'menu_entete' => 'menu entête',
        'menu foter'  => 'menu pied de page',
        ) );
    }
add_action( 'after_setup_theme', 'enregistrement_des_menus', 0 );
                    