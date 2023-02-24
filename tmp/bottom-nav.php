<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php if( is_single() ): ?>
<?php // SNSシェアボタン
get_template_part('tmp/sns-share'); ?>
<?php endif; ?>

<?php if( is_single() ): ?>
<?php // 前後の記事へのリンク
get_template_part('tmp/prev-next-link'); ?>
<?php endif; ?>

<?php if( is_single() ): ?>
<div class="tab__wrap">
	<div class="tab__btn-list">
		<div class="tab__btn active">New posts of<br><?php echo get_category_name(); ?></div>
		<div class="tab__btn">New posts</div>
	</div>

	<div class="tab__content-list">
		<div class="tab__content active">
			<nav class="bottom-nav__new-posts">
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
		</div>
		<div class="tab__content">
			<nav class="bottom-nav__new-posts">
				<?php // 最新記事（全記事）
					$args = [
						'post_type' => 'post',
						'category_name' => null,
						'posts_per_page' => 6,
						'orderby' => 'date',
						'order' => 'DESC',
						'post__not_in' => null,
					];
					get_template_part('tmp/wp-query', null, $args);
				?>
			</nav>
		</div>
	</div>
</div>
<?php endif; ?>

<nav class="bottom-nav__category">
  <?php // カテゴリー一覧
  $args = ['pad_counts' => false];
  get_template_part('tmp/categories-link', null, $args); ?>
</nav>
