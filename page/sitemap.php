<nav class="bottom-nav__new-posts">
	<?php // 最新記事（同じカテゴリー）
		$args = [
			'post_type' => 'page',
			'category_name' => null,
			'posts_per_page' => -1,
			'orderby' => 'date',
			'order' => 'DESC',
			'post__not_in' => null,
		];
		get_template_part('tmp/wp-query', null, $args);
	?>
</nav>

<nav class="bottom-nav__new-posts">
	<?php // 最新記事（同じカテゴリー）
		$args = [
			'post_type' => 'post',
			'category_name' => null,
			'posts_per_page' => -1,
			'orderby' => 'date',
			'order' => 'DESC',
			'post__not_in' => null,
		];
		get_template_part('tmp/wp-query', null, $args);
	?>
</nav>
