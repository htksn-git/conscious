<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php if( is_single() || is_home() || is_front_page() ): ?>
<a class="index-card__href index-card__icon icon-<?php echo get_category_slug(); ?>" href="<?php the_permalink(); ?>">
<?php else: ?>
<a class="index-card__href" href="<?php the_permalink(); ?>">
<?php endif; ?>
  <h3 class="index-card__title"><?php the_title(); ?></h3>
	<?php if( ! is_page('sitemap') ): ?>
  <dl class="post-meta">
		<?php if( is_single() || is_home() || is_front_page() ): ?>
			<dt>Category</dt>
			<dd><?php echo get_category_name(); ?></dd>
			<?php if (get_tag_name() != ''): ?>
				<dt>Tags</dt>
				<dd><?php echo get_tag_name(); ?></dd>
			<?php endif; ?>
    <?php endif; ?>
		<?php if( ! is_page() || is_front_page() ): ?>
		<?php get_template_part('tmp/date'); ?>
    <?php endif; ?>
		<?php if( is_page() && ! is_front_page() ): ?>
		<?php echo gen_page_excerpts(); ?>
    <?php endif; ?>
  </dl>
	<?php endif; ?>
</a>
