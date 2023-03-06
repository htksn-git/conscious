<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<article class="index">

	<header class="index-header">
		<?php if ( is_home() ): ?>
			<h1 class="index-header__title">BLOG</h1>
		<?php endif; ?>

		<?php if ( is_category() ): ?>
			<?php // カテゴリーページ冒頭コンテンツ
			get_template_part('tmp/category-content'); ?>
		<?php endif; ?>
	</header>

	<section class="index-card">
		<nav class="index-card__wrap">
		<?php if(have_posts()): while(have_posts()): the_post(); ?>

			<?php // カード
			get_template_part('tmp/index-card'); ?>

		<?php endwhile; endif; ?>
		</nav>
	</section>

</article>
