<?php

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