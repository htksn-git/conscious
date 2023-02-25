<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<section class="information">
	<?php add_filter('the_content', 'wpautop'); ?>
	<?php the_content(); ?>

	<nav class="information__nav">
		<?php // 最新記事（同じカテゴリー）
			$args = [
				'post_type' => 'page',
				'posts_per_page' => -1,
				'category_name' => null,
				'orderby' => 'menu_order',
				'order' => 'ASC',
				'post__not_in' => array(16, 7, 17),
			];
			get_template_part('tmp/wp-query', null, $args);
		?>
	</nav>
</section>
