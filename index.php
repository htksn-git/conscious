<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php get_header(); ?>

<nav class="index-card">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<a class="index-card__href" href="<?php the_permalink(); ?>">
		<div class="index-card__thumbnail"><?php the_post_thumbnail('tmb_sort'); ?></div>
		<h3 class="index-card__title"><?php the_title(); ?></h3>
		<div class="index-card__excerpt"><?php echo mb_substr(get_the_excerpt(), 0, 140).'';?></div>
	</a>
<?php endwhile; endif; ?>
</nav>

<?php // ページャー
get_template_part('tmp/pager'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
