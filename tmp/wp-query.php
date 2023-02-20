<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php
  $args = array(
    'post_type' => $args['post_type'],
    'posts_per_page' => $args['posts_per_page'],
    'category_name' => $args['category_name'],
    'orderby' => $args['orderby'],
    'order' => $args['order'],
    'post__not_in' => $args['post__not_in'],
  );
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  <?php // カード
  get_template_part('tmp/index-card'); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
