<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

function nath_register_assets()
{

    // Déclarer jQuery
    // wp_enqueue_script('jquery');

    // Déclarer le JS
    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.2',
        true
    );

    wp_enqueue_script(
        'nath',
        get_template_directory_uri() . '/assets/js/script.js',
        array(),
        '1.0',
        true
    );

    // Déclarer le fichier CSS à un autre emplacement
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
        array(),
        '5.3.2'
    );

    // Déclarer le fichier style.css à la racine du thème
    wp_enqueue_style(
        'nath',
        get_stylesheet_uri(),
    );
}
add_action('wp_enqueue_scripts', 'nath_register_assets');

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );