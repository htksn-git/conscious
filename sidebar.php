<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<aside class="sidebar">
  <?php if ( is_single() ): ?>
  <section class="sidebar__section">
    <h3 class="sidebar__title">TOC</h3>
    <?php echo do_shortcode('[ez-toc]'); ?>
  </section>
  <?php endif; ?>

  <section class="sidebar__section">
    <h3 class="sidebar__title">Tags</h3>
    <nav class="sidebar__tag">
      <?php // タグクラウド
      get_template_part('tmp/tag-cloud'); ?>
    </nav>
  </section>

  <section class="sidebar__section">
    <h3 class="sidebar__title">Categories</h3>
    <nav class="sidebar__category">
      <?php // カテゴリー一覧
      $args = ['pad_counts' => true];
      get_template_part('tmp/categories-link', null, $args); ?>
    </nav>
  </section>
</aside>
