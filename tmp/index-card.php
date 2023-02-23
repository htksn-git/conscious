<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<a class="index-card__href" href="<?php the_permalink(); ?>">
  <h3 class="index-card__title"><?php the_title(); ?></h3>
  <dl class="post-meta">
		<?php get_template_part('tmp/date'); ?>
		<?php if( is_single() ): ?>
    <dt>Category</dt>
    <dd><?php echo get_category_name(); ?></dd>
    <?php if (get_tag_name() != ''): ?>
    <dt>Tags</dt>
    <dd><?php echo get_tag_name(); ?></dd>
    <?php endif; ?>
    <?php endif; ?>
  </dl>
</a>
