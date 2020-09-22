<?php

// Fonction permettant de charger des feuilles de style et des scripts
function marvelblog_scripts()
{
  // on charge la feuille de style
  wp_enqueue_style(
    'marvelblog-css', // nom de la feuille de style
    get_theme_file_uri('public/app.c3f9f951.css'), // chemin vers la stylesheet
    [], // dépendances (pas besoin, on utilise Parcel)
    '20200604', // version
    'all' // media
  );

  // on charge le js
  wp_enqueue_script(
    'marvelblog-script', // nom du script
    get_theme_file_uri('public/app.c3f9f951.js'), // chemin
    [], // dépendances
    '20200604', // version
    true // script chargé avant la fermeture de <body>
  );
}

add_action('wp_enqueue_scripts', 'marvelblog_scripts');


// Lors de la déclaration de fonctions, il est important de vérifier si elle existe (indispensable pour éviter les conflits avec les child-thèmes)
if (!function_exists('marvelblog_setup')) {

  // Fonction permettant de mettre en place mes fonctionnalités de thème
  function marvelblog_setup()
  {
    // Gestion automatique de la balise <title> par WordPress
    add_theme_support('title-tag');

    // Permet l'ajout d'images mises en avant sur les posts
    add_theme_support('post-thumbnails');

    // Déclaration d'emplacements de menu
    register_nav_menus([
      'main' => 'Menu principal'
    ]);
  }
}

// On greffe la fonction "oblog_setup" sur le hook "after_setup_theme"
add_action('after_setup_theme', 'marvelblog_setup');