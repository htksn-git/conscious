<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php // 現在のページが属する情報を取得
  global $post;
  $tags = get_the_tags(); //タグ情報を取得
  $tags_num = count($tags);
?>

<dl class="post-meta">
  <dt>Post on</dt>
  <dd><?php get_template_part('tmp/date'); ?></dd>
  <dt>Category</dt>
  <dd><?php the_category(); ?></dd>
  <?php if ($tags_num != 0): ?>
  <dt>Tags</dt>
  <dd><?php the_tags( '<ul class="post-meta__tags"><li>', '</li><li>', '</li></ul>' ); ?></dd>
  <?php endif; ?>
</dl>
