<?php

// Fonction permettant de charger des feuilles de style et des scripts
function marvelblog_enqueues()
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

add_action('wp_enqueue_scripts', 'marvelblog_enqueues');