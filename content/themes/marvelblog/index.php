<?php get_header(); ?>
 
<?php get_template_part('template-parts/twitter'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php get_template_part('template-parts/post-excerpt'); ?>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>