<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php // カテゴリー
  $args = array(
    'parent' => 0, // 親カテゴリーのみ一覧で取得
    'orderby' => 'term_order',
    'order' => 'ASC',
    'hide_empty' => false, // 記事のないカテゴリーも含める
    'exclude' => 1, // 「未分類」のカテゴリーを除外
    'pad_counts' => $args['pad_counts'], // 記事数のカウント表示の有無（引数で取得する）
  );
  $categories = get_categories( $args );
?>

<nav class="categories-link">
  <ul class="categories-link__ul">
  <?php foreach( $categories as $category ) : ?>
    <li class="categories-link__list">
      <a class="categories-link__href category-icon <?php echo $category->slug; ?>" href="<?php echo get_category_link( $category->term_id ); ?>">
        <?php if($args['pad_counts'] == true): ?>
        <?php echo $category->name; ?> (<?php echo $category->count; ?>)
        <?php else: ?>
        <?php echo $category->name; ?>
        <?php endif; ?>
      </a>
    </li>
  <?php endforeach; ?>
  </ul>
</nav>
