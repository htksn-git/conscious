<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<dl class="post-meta">
  <dt>Post on</dt>
  <dd><?php get_template_part('tmp/date'); ?></dd>
  <dt>Category</dt>
  <dd><?php the_category(); ?></dd>
  <?php if (count_tags() != 0): ?>
  <dt>Tags</dt>
  <dd><?php the_tags( '<ul class="post-meta__tags"><li>', '</li><li>', '</li></ul>' ); ?></dd>
  <?php endif; ?>
</dl>
