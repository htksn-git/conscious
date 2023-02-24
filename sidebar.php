<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<aside class="sidebar">
  <?php if ( is_single() || is_page() ): ?>
	<?php echo do_shortcode('[ez-toc]'); ?>
  <?php endif; ?>

  <?php if ( is_page('当面タグは使わない') ): ?>
  <section class="sidebar__section">
    <h3 class="sidebar__title">Tags</h3>
    <nav class="sidebar__tag">
      <?php // タグクラウド
      get_template_part('tmp/tag-cloud'); ?>
    </nav>
  </section>
  <?php endif; ?>

  <section class="sidebar__section">
    <h3 class="sidebar__title">Categories</h3>
    <nav class="sidebar__category">
      <?php // カテゴリー一覧
      $args = ['pad_counts' => true];
      get_template_part('tmp/categories-link', null, $args); ?>
    </nav>
  </section>
</aside>
