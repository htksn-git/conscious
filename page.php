<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php // サイドバー非表示
  $no_sidebar = array(
    'about',
    'information',
  );
?>

<?php get_header(); ?>

<main>
	<article class="page-article" itemscope="itemscope" itemprop="blogPost" itemtype="https://schema.org/BlogPosting">
	<?php if(have_posts()): while(have_posts()): the_post(); ?>

		<header class="page-article__header" itemprop="headline">
			<div class="page-article__header-in">
				<div class="page-article__header-meta">
					<h1 class="page-article__title"><?php the_title(); ?></h1>
					<?php // 投稿メタ情報
					get_template_part('tmp/post-meta'); ?>
				</div>
			</div>
			<?php // パンくずリスト
			get_template_part('tmp/breadcrumbs'); ?>
		</header>
		
		<div class="page-article__wrapper">
			<?php // コンテンツ
			get_template_part('tmp/content'); ?>

			<?php if ( ! is_page($no_sidebar) && ! is_front_page() ): ?>
			<?php get_sidebar(); ?>
			<?php endif; ?>
		</div>

	<?php endwhile; endif; ?>
	</article>
</main>

<?php get_footer(); ?>
