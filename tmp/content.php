<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php if ( is_page('menu') ): ////////////////////////////////////////// ?>
<?php get_template_part('page/menu'); ?>

<?php elseif ( is_page('about') ): ////////////////////////////////////////// ?>
<?php get_template_part('page/about'); ?>

<?php elseif ( is_page('sitemap') ): ////////////////////////////////////////// ?>
<?php get_template_part('page/sitemap'); ?>

<?php elseif ( is_page() || is_single() ): ////////////////////////////////////////// ?>
<?php add_filter('the_content', 'wpautop'); ?>
<?php the_content(); ?>

<?php endif; ?>
