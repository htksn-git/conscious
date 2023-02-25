<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php // サイドバー非表示
  $no_sidebar = array(
    'about',
    'information',
    'contact',
  );
?>

<?php // ループ開始
if(have_posts()): while(have_posts()): the_post(); ?>

<header class="content-header" itemprop="headline">
	<div class="content-header__wrap">
		<?php if ( is_single() ): ?>
		<div class="content-header__meta icon-<?php echo get_category_slug(); ?>">
		<?php else: ?>
		<div class="content-header__meta">
		<?php endif; ?>
			<h1 class="content-header__title"><?php the_title(); ?></h1>
			<?php // 投稿メタ情報
			get_template_part('tmp/post-meta'); ?>
		</div>
	</div>
	<?php // パンくずリスト
	get_template_part('tmp/breadcrumbs'); ?>
</header>

<?php // サイドバー表示切り替え
if ( is_page($no_sidebar) || is_front_page() ): ?>
<div class="content-wide content-<?php echo get_page_slug(); ?>">
	<div class="content-wide-wrapper-<?php echo get_page_slug(); ?>">
		<main class="content-wide-main">
			<article class="content-wide-article" itemscope="itemscope" itemprop="blogPost" itemtype="https://schema.org/BlogPosting">
				<?php // コンテンツ
				get_template_part('tmp/content'); ?>
			</article>
		</main>
	</div>
</div>

<?php else: ?>

<div class="content-wrapper">
	<main class="content-main">
		<article class="content-article" itemscope="itemscope" itemprop="blogPost" itemtype="https://schema.org/BlogPosting">
			<?php // コンテンツ
			get_template_part('tmp/content'); ?>
		</article>
	</main>
	<?php get_sidebar(); ?>
</div>
<?php endif; ?>

<?php // ループ終了
endwhile; endif; ?>

<aside class="bottom-nav">
  <?php // ページ下部コンテンツ
  get_template_part('tmp/bottom-nav'); ?>
</aside>
