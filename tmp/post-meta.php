<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<dl class="post-meta">
  <dt>Post on</dt>
  <dd><?php get_template_part('tmp/date'); ?></dd>
  <?php if ( ! is_page() ): ?>
  <dt>Category</dt>
  <dd><?php the_category(); ?></dd>
  <?php if ( has_tag() ): ?>
  <dt>Tags</dt>
  <dd><?php the_tags( '<ul class="post-meta__tags"><li>', '</li><li>', '</li></ul>' ); ?></dd>
  <?php endif; ?>
  <?php endif; ?>
</dl>
