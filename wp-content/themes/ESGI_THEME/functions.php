<?php
// Chargement des assets css et js
add_action('wp_enqueue_scripts', 'esgi_enqueue_assets');
function esgi_enqueue_assets() {
    wp_enqueue_style('main', get_stylesheet_uri());
    wp_enqueue_script(
        'esgi-menu',
        get_template_directory_uri() . '/src/assets/js/menu.js',
        array(),   // dépendances
        '1.0',     // version
        true       // charge avant </body>
    );
}

// Activer les images mises en avant
add_theme_support('post-thumbnails');

// Déclarer les emplacements de menus
add_action( 'after_setup_theme', 'esgi_register_menus' );
function esgi_register_menus() {
    register_nav_menus( array(
        'menu-1' => __( 'Menu principal', 'esgi' ),
        ));
}