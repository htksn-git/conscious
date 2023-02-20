<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php if( is_single() ): ?>
<?php // 前後の記事へのリンク
get_template_part('tmp/prev-next-link'); ?>
<?php endif; ?>

<?php if( is_single() ): ?>
<nav class="page-bottom__new-posts">
  <?php // 最新記事（同じカテゴリー）
    $args = [
      'post_type' => 'post',
      'category_name' => get_category_slug(),
      'posts_per_page' => 6,
      'orderby' => 'date',
      'order' => 'DESC',
      'post__not_in' => null,
    ];
    get_template_part('tmp/wp-query', null, $args);
  ?>
</nav>

<nav class="page-bottom__new-posts">
  <?php // 最新記事（全記事）
    $args = ['posts_per_page' => 6];
    // get_template_part('tmp/new-posts', null, $args);
  ?>
</nav>
<?php endif; ?>

<nav class="page-bottom__category">
  <?php // カテゴリー一覧
  $args = ['pad_counts' => false];
  get_template_part('tmp/categories-link', null, $args); ?>
</nav>
