<?php get_header(); ?>
 
<div class="wrapper">
    <?php get_template_part('template-parts/twitter'); ?>

    <div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/post-excerpt'); ?>
        <?php endwhile;
        endif; ?>
    </div>
</div>

<?php get_footer(); ?>