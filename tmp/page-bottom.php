<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<nav class="page-bottom__category">
  <?php // カテゴリー一覧
  $args = ['pad_counts' => false];
  get_template_part('tmp/categories-link', null, $args); ?>
</nav>
