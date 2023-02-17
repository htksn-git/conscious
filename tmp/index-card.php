<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php // 現在のページが属する情報を取得
  global $post;
  $cat = get_the_category(); //カテゴリー情報を取得
  $cat = $cat[0];
  $cat_name = $cat->name;

  $tag = get_the_tags(); //タグ情報を取得
  $tag = $tag[0];
  $tag_name = $tag->name;
  $tag_slug = $tag->slug;
?>

<a class="index-card__href" href="<?php the_permalink(); ?>">
  <h3 class="index-card__title"><?php the_title(); ?></h3>
  <dl class="post-meta">
    <dt>Post on</dt>
    <dd><?php get_template_part('tmp/date'); ?></dd>
    <dt>Category</dt>
    <dd><?php echo $cat_name; ?></dd>
    <?php if ($tag_name != ''): ?>
    <dt>Tags</dt>
    <dd><?php echo $tag_name; ?></dd>
    <?php endif; ?>
  </dl>
</a>



