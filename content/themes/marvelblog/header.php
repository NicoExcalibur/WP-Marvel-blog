<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel blog</title>
    <link rel="stylesheet" href="content/themes/marvelblog/dist/app.c3f9f951.css"> 
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="header__content">
          <div class="logo">
            <a href="<?php echo get_home_url(); ?>" class="logo__text"><?php bloginfo('title'); ?></a>
            <div class="logo__baseline"><?php bloginfo('description'); ?></div>
          </div>
         
         <!-- <nav class="main-nav">
            <ul>
              <li><a href="#">Accueil</a></li>
              <li><a href="#">Personnages</a></li>
              <li><a href="#">Comics</a></li>
            </ul>
          </nav> -->

          <?php

        wp_nav_menu([
        'theme_location' => 'main',
        'container' => 'nav',
        'container_class' => 'main-nav'
        ]);

        ?>
        </div>
      </header>
      <main class="main">
      <div class="title">
          <!--<img
          src="https://source.unsplash.com/1500x300/?super-hero"
          alt=""
          class="title__image"
          />-->
          <div class="title_text">
            <h1>Bienvenue sur Marvel Blog !</h1>
            <p>Le blog de référence sur vos comics favoris.</p>
          </div>
        </div>