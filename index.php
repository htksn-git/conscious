<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php get_header(); ?>

<article class="index">

	<header class="index-header">
		<?php if ( is_home() ): ?>
			<h1 class="index-header__title">BLOG</h1>
		<?php elseif ( is_category() ): ?>
			<h1 class="index-header__title"><?php echo get_category_name(); ?></h1>
		<?php elseif ( is_tag() ): ?>
			<h1 class="index-header__title"><?php // echo get_tag_name(); ?></h1>
		<?php endif; ?>

		<?php if ( is_category() || is_tag() ): ?>
			<?php the_field('acf_category_editor'); ?>
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

<?php // ページャー
get_template_part('tmp/pager'); ?>

<?php get_footer(); ?>
