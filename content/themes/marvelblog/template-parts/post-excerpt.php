<article <?php post_class('class-name'); ?>>
    <h2 class="post__title"><?php the_title(); ?></h2>
    <div class="post__infos">
        <?php the_date(); ?> &bull; par <?php the_author(); ?>
    </div>
    <div class="post__content">
    <p>
        <?php the_excerpt(); ?>
    </p>
    </div>
    <a class="post__link" href="<?php the_permalink(); ?>">Lire l'article</a>
</article>